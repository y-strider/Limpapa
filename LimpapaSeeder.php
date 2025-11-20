<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Purok;
use App\Models\Resident;
use App\Models\Complaint;
use App\Models\BarangayService;
use App\Models\Event;
use App\Models\FinancialRecord;
use App\Models\WasteRecord;
use Illuminate\Support\Facades\Hash;

class LimpapaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create Admin User
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // Create Puroks
        $puroks = collect(['Purok 1', 'Purok 2', 'Purok 3', 'Purok 4', 'Purok 5'])
            ->map(fn ($name) => Purok::create(['purok_name' => $name]));

        // Create Residents
        for ($i = 0; $i < 150; $i++) {
            Resident::create([
                'first_name' => 'ResidentFirstName' . $i,
                'last_name' => 'LastName' . $i,
                'birth_date' => now()->subYears(rand(1, 80))->subDays(rand(0, 365)),
                'purok_id' => $puroks->random()->id,
            ]);
        }

        // Create Barangay Services
        BarangayService::create(['service_name' => 'Barangay Clearance']);
        BarangayService::create(['service_name' => 'Business Permit']);
        BarangayService::create(['service_name' => 'Certificate of Indigency']);

        // Create Complaints
        for ($i = 0; $i < 20; $i++) {
            Complaint::create([
                'title' => 'Complaint Title ' . $i,
                'description' => 'This is a sample complaint description.',
                'status' => rand(0, 1) ? 'pending' : 'resolved',
            ]);
        }

        // Create Events
        Event::create(['event_name' => 'Barangay Fiesta', 'event_date' => now()->addMonths(2)]);
        Event::create(['event_name' => 'Community Cleanup', 'event_date' => now()->addWeeks(3)]);
        Event::create(['event_name' => 'Sports Fest', 'event_date' => now()->addDays(10)]);

        // Create Financial Records
        for ($i = 0; $i < 12; $i++) {
            // Income
            FinancialRecord::create([
                'record_type' => 'income',
                'amount' => rand(5000, 15000),
                'transaction_date' => now()->startOfYear()->addMonths($i),
            ]);
            // Expense
            FinancialRecord::create([
                'record_type' => 'expense',
                'amount' => rand(3000, 10000),
                'transaction_date' => now()->startOfYear()->addMonths($i),
            ]);
        }

        // Create Waste Records
        for ($i = 0; $i < 50; $i++) {
            WasteRecord::create([
                'quantity' => rand(10, 100),
                'status' => rand(0, 1) ? 'collected' : 'pending',
            ]);
        }
    }
}