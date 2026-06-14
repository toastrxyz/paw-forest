<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visit;
use App\Models\Animal;

class VisitController extends Controller
{
    public function index() {}
    public function create() {}
    public function show($id) {}
    public function updateStatus(Request $request, $id) {}

    public function store(Request $request)
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', __('Please log in to apply for a visit.'));
        }
        $request->validate([
            'animal_id' => 'required|exists:animals,id',
            'visit_date' => 'required|date|after:today',
            'visit_time' => 'required',
            'comment' => 'nullable|string|max:1000',
        ]);

        $animal = Animal::findOrFail($request->animal_id);

        $combinedDateTime = $request->visit_date . ' ' . $request->visit_time;

        $visit = new Visit();
        $visit->date = $combinedDateTime;
        $visit->comment = $request->comment;
        $visit->status = 'Pending';
        $visit->user_id = auth()->id();
        $visit->animal_id = $animal->id;
        $visit->location_id = $animal->location_id;
        $visit->employee_id = null;
        $visit->save();

        return redirect()->back()->with('success', __('Your visitation request has been submitted successfully!'));
    }
}