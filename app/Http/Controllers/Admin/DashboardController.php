<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Resident;
use App\Models\BarangayService;
use App\Models\Complaint;
use App\Models\FinancialRecord;
use App\Models\Event;
use App\Models\WasteRecord;
use DB;

class DashboardController extends Controller
{
    public function index()
    {
        // Get statistics for dashboard
        $totalResidents = Resident::count();
        $totalServices = BarangayService::count();
        $totalComplaints = Complaint::count();
        $totalEvents = Event::count();

        // Financial summary
        $totalIncome = FinancialRecord::where('record_type', 'income')->sum('amount');
        $totalExpenses = FinancialRecord::where('record_type', 'expense')->sum('amount');
        $netIncome = $totalIncome - $totalExpenses;

        // Recent complaints
        $recentComplaints = Complaint::latest()->take(5)->get();

        // Upcoming events
        $upcomingEvents = Event::where('event_date', '>=', now())->orderBy('event_date')->take(5)->get();

        // Waste collection summary
        $wasteCollected = WasteRecord::where('status', 'collected')->sum('quantity');

        // Population by purok
        $populationByPurok = Resident::select('puroks.purok_name', DB::raw('count(*) as count'))
            ->join('puroks', 'residents.purok_id', '=', 'puroks.id')
            ->groupBy('puroks.purok_name')
            ->get();

        // Financial data for chart
        $monthlyIncome = FinancialRecord::select(
                DB::raw('MONTH(transaction_date) as month'),
                DB::raw('SUM(CASE WHEN record_type = "income" THEN amount ELSE 0 END) as income'),
                DB::raw('SUM(CASE WHEN record_type = "expense" THEN amount ELSE 0 END) as expense')
            )
            ->whereYear('transaction_date', date('Y'))
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        return view('admin.dashboard', compact(
            'totalResidents',
            'totalServices',
            'totalComplaints',
            'totalEvents',
            'totalIncome',
            'totalExpenses',
            'netIncome',
            'recentComplaints',
            'upcomingEvents',
            'wasteCollected',
            'populationByPurok',
            'monthlyIncome'
        ));
    }
}
