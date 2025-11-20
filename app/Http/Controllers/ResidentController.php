<?php

namespace App\Http\Controllers;

use App\Models\Resident;
use Illuminate\Http\Request;

class ResidentController extends Controller
{
    public function index()
    {
        $residents = Resident::paginate(10);
        return view('residents.index', compact('residents'));
    }

    public function show($id)
    {
        $resident = Resident::findOrFail($id);
        return view('residents.show', compact('resident'));
    }

    public function create()
    {
        return view('residents.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'birth_date' => 'required|date',
            'gender' => 'required|in:Male,Female',
            'civil_status' => 'required|string',
            'address' => 'required|string',
            'contact_number' => 'required|string',
            'occupation' => 'nullable|string',
            'psgc_code' => 'required|string',
            'purok_id' => 'required|exists:puroks,id',
        ]);

        Resident::create($request->all());
        return redirect()->route('residents.index')->with('success', 'Resident created successfully.');
    }

    public function edit($id)
    {
        $resident = Resident::findOrFail($id);
        return view('residents.edit', compact('resident'));
    }

    public function update(Request $request, $id)
    {
        $resident = Resident::findOrFail($id);
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'birth_date' => 'required|date',
            'gender' => 'required|in:Male,Female',
            'civil_status' => 'required|string',
            'address' => 'required|string',
            'contact_number' => 'required|string',
            'occupation' => 'nullable|string',
            'psgc_code' => 'required|string',
            'purok_id' => 'required|exists:puroks,id',
        ]);

        $resident->update($request->all());
        return redirect()->route('residents.index')->with('success', 'Resident updated successfully.');
    }

    public function destroy($id)
    {
        $resident = Resident::findOrFail($id);
        $resident->delete();
        return redirect()->route('residents.index')->with('success', 'Resident deleted successfully.');
    }
}
