<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    /**
     * Display all contact submissions (admin only)
     */
    public function index()
    {
        // This would be for admin panel to view submissions
        $contacts = collect(); // Replace with actual model query
        return view('admin.contacts', compact('contacts'));
    }

    /**
     * Store a new contact form submission
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'service' => 'required|string',
            'property_type' => 'required|string',
            'frequency' => 'required|string',
            'bedrooms' => 'nullable|integer|min:1|max:10',
            'bathrooms' => 'nullable|integer|min:1|max:10',
            'message' => 'nullable|string|max:1000'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $contactData = $validator->validated();

        try {
            // Save to database (uncomment when model is ready)
            // Contact::create($contactData);

            // Send email notification
            Mail::to(config('mail.admin_email', 'admin@cleaningservice.com'))
                ->send(new ContactFormMail($contactData));

            // Send confirmation email to customer
            Mail::to($contactData['email'])
                ->send(new \App\Mail\ContactConfirmationMail($contactData));

            return redirect()->back()
                ->with('success', 'Thank you for your message! We will get back to you within 24 hours.');

        } catch (\Exception $e) {
            \Log::error('Contact form submission error: ' . $e->getMessage());
            
            return redirect()->back()
                ->with('error', 'Sorry, there was an error sending your message. Please try again or call us directly.')
                ->withInput();
        }
    }

    /**
     * Get quote via API (for AJAX requests)
     */
    public function getQuote(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'service' => 'required|string',
            'property_type' => 'required|string',
            'frequency' => 'required|string',
            'bedrooms' => 'nullable|integer',
            'bathrooms' => 'nullable|integer'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        // Calculate quote based on parameters
        $quote = $this->calculateQuote($validator->validated());

        return response()->json([
            'success' => true,
            'quote' => $quote
        ]);
    }

    /**
     * Calculate quote based on service parameters
     */
    private function calculateQuote(array $params)
    {
        $basePrice = 0;
        
        // Base price by service type
        switch ($params['service']) {
            case 'regular-cleaning':
                $basePrice = 80;
                break;
            case 'deep-cleaning':
                $basePrice = 150;
                break;
            case 'move-in-out':
                $basePrice = 200;
                break;
            case 'post-construction':
                $basePrice = 250;
                break;
            case 'office-cleaning':
                $basePrice = 100;
                break;
            case 'carpet-cleaning':
                $basePrice = 120;
                break;
            default:
                $basePrice = 80;
        }

        // Adjust for property type
        if ($params['property_type'] === 'house') {
            $basePrice *= 1.2;
        }

        // Adjust for bedrooms and bathrooms
        $bedrooms = $params['bedrooms'] ?? 2;
        $bathrooms = $params['bathrooms'] ?? 1;
        
        $basePrice += ($bedrooms * 15) + ($bathrooms * 10);

        // Adjust for frequency
        switch ($params['frequency']) {
            case 'weekly':
                $basePrice *= 0.9; // 10% discount
                break;
            case 'fortnightly':
                $basePrice *= 0.95; // 5% discount
                break;
            case 'monthly':
                // No discount
                break;
            case 'one-time':
                $basePrice *= 1.1; // 10% premium
                break;
        }

        return [
            'amount' => round($basePrice, 2),
            'currency' => 'NZD',
            'frequency' => $params['frequency'],
            'service' => $params['service']
        ];
    }
}
