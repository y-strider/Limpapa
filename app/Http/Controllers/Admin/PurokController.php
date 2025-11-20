<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Purok;
use Illuminate\Http\Request;

class PurokController extends Controller
{
    /**
     * Display a listing of the puroks.
     */
    public function index()
    {
        $puroks = Purok::withCount('residents')->get();
        return view('admin.puroks.index', compact('puroks'));
    }

    /**
     * Store a newly created purok.
     */
    public function store(Request $request)
    {
        $request->validate([
            'purok_name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Purok::create($request->only(['purok_name', 'description']));

        return redirect()->route('admin.dashboard')->with('success', 'Purok added successfully.');
    }

    /**
     * Update the specified purok.
     */
    public function update(Request $request, Purok $purok)
    {
        $request->validate([
            'purok_name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $purok->update($request->only(['purok_name', 'description']));

        return redirect()->route('admin.dashboard')->with('success', 'Purok updated successfully.');
    }

    /**
     * Remove the specified purok.
     */
    public function destroy(Purok $purok)
    {
        $purok->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Purok deleted successfully.');
    }
}
