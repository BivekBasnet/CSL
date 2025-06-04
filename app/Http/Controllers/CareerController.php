<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use App\Mail\CareerApplicationMail;

class CareerController extends Controller
{
    /**
     * Display all career applications (admin only)
     */
    public function index()
    {
        // This would be for admin panel to view applications
        $applications = collect(); // Replace with actual model query
        return view('admin.applications', compact('applications'));
    }

    /**
     * Store a new career application
     */
    public function apply(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'position' => 'required|string',
            'experience' => 'nullable|string',
            'availability' => 'nullable|string',
            'cover_letter' => 'nullable|string|max:2000',
            'resume' => 'nullable|file|mimes:pdf,doc,docx|max:5120' // 5MB max
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $applicationData = $validator->validated();

        try {
            // Handle resume upload
            if ($request->hasFile('resume')) {
                $resume = $request->file('resume');
                $resumePath = $resume->store('resumes', 'local');
                $applicationData['resume_path'] = $resumePath;
                $applicationData['resume_original_name'] = $resume->getClientOriginalName();
            }

            // Add timestamp
            $applicationData['applied_at'] = now();

            // Save to database (uncomment when model is ready)
            // CareerApplication::create($applicationData);

            // Send email notification to HR
            Mail::to(config('mail.hr_email', 'hr@cleaningservice.com'))
                ->send(new CareerApplicationMail($applicationData));

            // Send confirmation email to applicant
            Mail::to($applicationData['email'])
                ->send(new \App\Mail\ApplicationConfirmationMail($applicationData));

            return redirect()->back()
                ->with('success', 'Thank you for your application! We will review it and get back to you within 5 business days.');

        } catch (\Exception $e) {
            \Log::error('Career application submission error: ' . $e->getMessage());
            
            // Clean up uploaded file if there was an error
            if (isset($resumePath)) {
                Storage::disk('local')->delete($resumePath);
            }
            
            return redirect()->back()
                ->with('error', 'Sorry, there was an error submitting your application. Please try again or email us directly.')
                ->withInput();
        }
    }

    /**
     * Download resume (admin only)
     */
    public function downloadResume($id)
    {
        // This would be for admin to download resumes
        // $application = CareerApplication::findOrFail($id);
        // return Storage::disk('local')->download($application->resume_path, $application->resume_original_name);
    }

    /**
     * Get available positions
     */
    public function getPositions()
    {
        $positions = [
            [
                'id' => 'operations-manager-auckland',
                'title' => 'Operations Manager',
                'location' => 'Auckland',
                'type' => 'Full-time',
                'description' => 'Oversee day-to-day site operations and manage cleaning teams.',
                'requirements' => [
                    'Leadership experience in operations',
                    'Team management skills',
                    'Customer service focus'
                ]
            ],
            [
                'id' => 'operations-manager-christchurch',
                'title' => 'Operations Manager',
                'location' => 'Christchurch',
                'type' => 'Full-time',
                'description' => 'Oversee day-to-day site operations and manage cleaning teams.',
                'requirements' => [
                    'Leadership experience in operations',
                    'Team management skills',
                    'Customer service focus'
                ]
            ],
            [
                'id' => 'cleaner',
                'title' => 'Cleaner',
                'location' => 'Various',
                'type' => 'Part-time/Full-time',
                'description' => 'Provide high-quality cleaning services to residential and commercial clients.',
                'requirements' => [
                    'Attention to detail',
                    'Reliable and punctual',
                    'Physical fitness'
                ]
            ],
            [
                'id' => 'supervisor',
                'title' => 'Supervisor',
                'location' => 'Various',
                'type' => 'Full-time',
                'description' => 'Supervise cleaning teams and ensure quality standards.',
                'requirements' => [
                    'Previous cleaning experience',
                    'Leadership skills',
                    'Quality control experience'
                ]
            ]
        ];

        return response()->json($positions);
    }
}
