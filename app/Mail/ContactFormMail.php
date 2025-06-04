<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contactData;

    /**
     * Create a new message instance.
     */
    public function __construct(array $contactData)
    {
        $this->contactData = $contactData;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->subject('New Contact Form Submission - ' . $this->contactData['service'])
                    ->view('emails.contact-form')
                    ->with([
                        'name' => $this->contactData['name'],
                        'email' => $this->contactData['email'],
                        'phone' => $this->contactData['phone'],
                        'service' => $this->contactData['service'],
                        'property_type' => $this->contactData['property_type'],
                        'frequency' => $this->contactData['frequency'],
                        'bedrooms' => $this->contactData['bedrooms'] ?? 'Not specified',
                        'bathrooms' => $this->contactData['bathrooms'] ?? 'Not specified',
                        'message' => $this->contactData['message'] ?? 'No additional message'
                    ]);
    }
}
