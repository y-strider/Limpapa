<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LimpapaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed Puroks
        \DB::table('puroks')->insert([
            ['purok_name' => 'Purok 1', 'description' => 'Northern area of Limpapa', 'psgc_code' => '0907216008'],
            ['purok_name' => 'Purok 2', 'description' => 'Central area of Limpapa', 'psgc_code' => '0907216008'],
            ['purok_name' => 'Purok 3', 'description' => 'Southern area of Limpapa', 'psgc_code' => '0907216008'],
        ]);

        // Seed sample residents
        \DB::table('residents')->insert([
            [
                'first_name' => 'Juan',
                'last_name' => 'Dela Cruz',
                'middle_name' => 'Santos',
                'birth_date' => '1980-05-15',
                'gender' => 'Male',
                'civil_status' => 'Married',
                'address' => 'Purok 1, Limpapa',
                'contact_number' => '09123456789',
                'occupation' => 'Farmer',
                'psgc_code' => '0907216008',
                'purok_id' => 1,
            ],
            [
                'first_name' => 'Maria',
                'last_name' => 'Santos',
                'middle_name' => 'Garcia',
                'birth_date' => '1985-03-20',
                'gender' => 'Female',
                'civil_status' => 'Married',
                'address' => 'Purok 2, Limpapa',
                'contact_number' => '09198765432',
                'occupation' => 'Teacher',
                'psgc_code' => '0907216008',
                'purok_id' => 2,
            ],
        ]);

        // Seed sample complaints
        \DB::table('complaints')->insert([
            [
                'complainant_name' => 'Pedro Reyes',
                'complainant_contact' => '09187654321',
                'complaint_description' => 'Pothole on main road in Purok 1',
                'complaint_type' => 'Infrastructure',
                'incident_date' => now()->subDays(3),
                'status' => 'pending',
                'resolution' => null,
                'resolved_date' => null,
            ],
            [
                'complainant_name' => 'Ana Lopez',
                'complainant_contact' => '09234567890',
                'complaint_description' => 'Mosquito infestation in Purok 2',
                'complaint_type' => 'Health',
                'incident_date' => now()->subDays(7),
                'status' => 'resolved',
                'resolution' => 'Sprayed insecticide',
                'resolved_date' => now()->subDays(2),
            ],
        ]);

        // Seed barangay services
        \DB::table('barangay_services')->insert([
            ['service_name' => 'Health Consultation', 'description' => 'Free health check-ups', 'category' => 'Health', 'fee' => 0.00, 'is_active' => true],
            ['service_name' => 'Certificate Issuance', 'description' => 'Barangay certificates', 'category' => 'Administrative', 'fee' => 50.00, 'is_active' => true],
            ['service_name' => 'Complaint Filing', 'description' => 'File complaints and grievances', 'category' => 'Administrative', 'fee' => 0.00, 'is_active' => true],
        ]);

        // Seed sample financial records
        \DB::table('financial_records')->insert([
            [
                'record_type' => 'income',
                'category' => 'Local Government Unit',
                'description' => 'Monthly IRA allocation',
                'amount' => 50000.00,
                'transaction_date' => now()->subDays(10),
                'recorded_by' => 'Barangay Treasurer',
                'psgc_code' => '0907216008',
            ],
            [
                'record_type' => 'expense',
                'category' => 'Maintenance',
                'description' => 'Road repair materials',
                'amount' => 15000.00,
                'transaction_date' => now()->subDays(5),
                'recorded_by' => 'Barangay Treasurer',
                'psgc_code' => '0907216008',
            ],
        ]);

        // Seed sample events
        \DB::table('events')->insert([
            [
                'event_name' => 'Barangay Assembly',
                'description' => 'Monthly barangay assembly meeting',
                'event_date' => now()->addDays(7),
                'location' => 'Barangay Hall',
                'organizer' => 'Barangay Captain',
                'expected_attendees' => 100,
                'status' => 'planned',
                'budget' => 5000.00,
                'psgc_code' => '0907216008',
            ],
        ]);

        // Seed sample waste records
        \DB::table('waste_records')->insert([
            [
                'waste_type' => 'biodegradable',
                'quantity' => 50.5,
                'collection_area' => 'Purok 1',
                'collection_date' => now()->subDays(1),
                'collected_by' => 'Barangay Waste Collector',
                'disposal_method' => 'Composting',
                'status' => 'collected',
                'psgc_code' => '0907216008',
            ],
        ]);

        // Seed admin user
        \DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'username' => 'admin',
                'password' => bcrypt('password'),
                'role' => 'admin',
            ],
        ]);
    }
}
