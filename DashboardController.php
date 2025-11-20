<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Resident;
use App\Models\BarangayService;
use App\Models\Complaint;
use App\Models\Event;
use App\Models\FinancialRecord;
use App\Models\WasteRecord;
use App\Models\Purok;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Show the admin dashboard.
     */
    public function index()
    {
        // Fetch all necessary data for the dashboard
        $totalResidents = Resident::count();
        $totalServices = BarangayService::where('status', 'active')->count();
        $totalComplaints = Complaint::where('status', 'pending')->count();
        $totalEvents = Event::where('event_date', '>=', Carbon::now())->count();

        // Financial data
        $totalIncome = FinancialRecord::where('type', 'income')->sum('amount');
        $totalExpenses = FinancialRecord::where('type', 'expense')->sum('amount');
        $netIncome = $totalIncome - $totalExpenses;

        // Monthly financial data for chart
        $incomeData = [];
        $expenseData = [];
        for ($month = 1; $month <= 12; $month++) {
            $incomeData[] = FinancialRecord::where('type', 'income')
                ->whereMonth('created_at', $month)
                ->whereYear('created_at', Carbon::now()->year)
                ->sum('amount');
            $expenseData[] = FinancialRecord::where('type', 'expense')
                ->whereMonth('created_at', $month)
                ->whereYear('created_at', Carbon::now()->year)
                ->sum('amount');
        }

        // Population by Purok
        $populationByPurok = Purok::withCount('residents')->get();

        // Waste collection
        $wasteCollected = WasteRecord::sum('weight_kg');

        // Complaint resolution
        $resolvedComplaints = Complaint::where('status', 'resolved')->count();
        $complaintResolutionRate = $totalComplaints > 0 ? ($resolvedComplaints / ($totalComplaints + $resolvedComplaints)) * 100 : 0;

        // Recent complaints
        $recentComplaints = Complaint::latest()->take(5)->get();

        // Upcoming events
        $upcomingEvents = Event::where('event_date', '>=', Carbon::now())->orderBy('event_date')->take(5)->get();

        // Puroks with resident count
        $puroks = Purok::withCount('residents')->get();

        return view('admin.dashboard', compact(
            'totalResidents',
            'totalServices',
            'totalComplaints',
            'totalEvents',
            'totalIncome',
            'totalExpenses',
            'netIncome',
            'incomeData',
            'expenseData',
            'populationByPurok',
            'wasteCollected',
            'resolvedComplaints',
            'complaintResolutionRate',
            'recentComplaints',
            'upcomingEvents',
            'puroks'
        ));
    }
}
