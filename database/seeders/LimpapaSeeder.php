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
            [
                'first_name' => 'Pedro',
                'last_name' => 'Reyes',
                'middle_name' => 'Cruz',
                'birth_date' => '1990-08-10',
                'gender' => 'Male',
                'civil_status' => 'Single',
                'address' => 'Purok 3, Limpapa',
                'contact_number' => '09234567890',
                'occupation' => 'Fisherman',
                'psgc_code' => '0907216008',
                'purok_id' => 3,
            ],
            [
                'first_name' => 'Ana',
                'last_name' => 'Lopez',
                'middle_name' => 'Mendoza',
                'birth_date' => '1975-12-05',
                'gender' => 'Female',
                'civil_status' => 'Widowed',
                'address' => 'Purok 1, Limpapa',
                'contact_number' => '09345678901',
                'occupation' => 'Retired',
                'psgc_code' => '0907216008',
                'purok_id' => 1,
            ],
            [
                'first_name' => 'Carlos',
                'last_name' => 'Garcia',
                'middle_name' => 'Reyes',
                'birth_date' => '1995-02-28',
                'gender' => 'Male',
                'civil_status' => 'Single',
                'address' => 'Purok 2, Limpapa',
                'contact_number' => '09456789012',
                'occupation' => 'Student',
                'psgc_code' => '0907216008',
                'purok_id' => 2,
            ],
        ]);

        // Seed sample complaints (expanded)
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
            [
                'complainant_name' => 'Carlos Garcia',
                'complainant_contact' => '09456789012',
                'complaint_description' => 'Street light not working in Purok 3',
                'complaint_type' => 'Infrastructure',
                'incident_date' => now()->subDays(5),
                'status' => 'in_progress',
                'resolution' => null,
                'resolved_date' => null,
            ],
            [
                'complainant_name' => 'Maria Santos',
                'complainant_contact' => '09198765432',
                'complaint_description' => 'Illegal dumping near the river',
                'complaint_type' => 'Environment',
                'incident_date' => now()->subDays(10),
                'status' => 'resolved',
                'resolution' => 'Cleaned up and fined the offender',
                'resolved_date' => now()->subDays(1),
            ],
        ]);

        // Seed barangay services
        \DB::table('barangay_services')->insert([
            ['service_name' => 'Health Consultation', 'description' => 'Free health check-ups', 'category' => 'Health', 'fee' => 0.00, 'is_active' => true],
            ['service_name' => 'Certificate Issuance', 'description' => 'Barangay certificates', 'category' => 'Administrative', 'fee' => 50.00, 'is_active' => true],
            ['service_name' => 'Complaint Filing', 'description' => 'File complaints and grievances', 'category' => 'Administrative', 'fee' => 0.00, 'is_active' => true],
        ]);

        // Seed sample financial records (expanded)
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
                'record_type' => 'income',
                'category' => 'Business Permits',
                'description' => 'Business permit fees collected',
                'amount' => 2500.00,
                'transaction_date' => now()->subDays(8),
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
            [
                'record_type' => 'expense',
                'category' => 'Health Services',
                'description' => 'Medical supplies for health center',
                'amount' => 8000.00,
                'transaction_date' => now()->subDays(3),
                'recorded_by' => 'Barangay Treasurer',
                'psgc_code' => '0907216008',
            ],
            [
                'record_type' => 'expense',
                'category' => 'Events',
                'description' => 'Barangay fiesta preparations',
                'amount' => 12000.00,
                'transaction_date' => now()->subDays(1),
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

        // Seed users for different roles
        \DB::table('users')->insertOrIgnore([
            [
                'name' => 'Admin User',
                'username' => 'admin',
                'password' => bcrypt('password'),
                'role' => 'admin',
            ],
            [
                'name' => 'Regular User',
                'username' => 'user',
                'password' => bcrypt('password'),
                'role' => 'user',
            ],
            [
                'name' => 'Client User',
                'username' => 'client',
                'password' => bcrypt('password'),
                'role' => 'client',
            ],
            [
                'name' => 'Foreign User',
                'username' => 'foreign',
                'password' => bcrypt('password'),
                'role' => 'foreign',
            ],
        ]);
    }
}