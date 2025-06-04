<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CareerApplicationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $applicationData;

    /**
     * Create a new message instance.
     */
    public function __construct(array $applicationData)
    {
        $this->applicationData = $applicationData;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        $mail = $this->subject('New Job Application - ' . $this->applicationData['position'])
                     ->view('emails.career-application')
                     ->with([
                         'first_name' => $this->applicationData['first_name'],
                         'last_name' => $this->applicationData['last_name'],
                         'email' => $this->applicationData['email'],
                         'phone' => $this->applicationData['phone'],
                         'position' => $this->applicationData['position'],
                         'experience' => $this->applicationData['experience'] ?? 'Not specified',
                         'availability' => $this->applicationData['availability'] ?? 'Not specified',
                         'cover_letter' => $this->applicationData['cover_letter'] ?? 'No cover letter provided',
                         'has_resume' => isset($this->applicationData['resume_path'])
                     ]);

        // Attach resume if uploaded
        if (isset($this->applicationData['resume_path'])) {
            $mail->attach(storage_path('app/' . $this->applicationData['resume_path']), [
                'as' => $this->applicationData['resume_original_name'],
            ]);
        }

        return $mail;
    }
}
