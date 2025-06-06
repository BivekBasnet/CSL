<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubserviceSeeder extends Seeder
{
    public function run()
    {
        $services = [
            [
                'name' => 'Regular House Cleaning',
                'description' => 'Comprehensive cleaning of all living spaces...',
                'subservices' => [
                    'Dusting & Vacuuming',
                    'Bathroom Cleaning',
                    'Kitchen Cleaning',
                    'Floor Mopping',
                    'Get Quote'
                ],
            ],
            [
                'name' => 'Deep Cleaning',
                'description' => 'Thorough cleaning of hard-to-reach areas...',
                'subservices' => [
                    'Baseboards & Window Tracks',
                    'Inside Cabinets',
                    'Light Fixtures',
                    'Detailed Sanitization',
                    'Get Quote'
                ],
            ],
            [
                'name' => 'Move In/Out Cleaning',
                'description' => 'Complete property cleaning to ensure a spotless space...',
                'subservices' => [
                    'Complete Property Clean',
                    'Lease Requirement Standards',
                    'All Room Deep Clean',
                    'Get Quote'
                ],
            ],
        ];

        foreach ($services as $data) {
            $service = Service::create([
                'name' => $data['name'],
                'description' => $data['description'],
            ]);
            foreach ($data['subservices'] as $sub) {
                Subservice::create([
                    'service_id' => $service->id,
                    'name' => $sub,
                ]);
            }
        }
    }
}
