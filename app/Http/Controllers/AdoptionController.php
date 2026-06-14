<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adoption;
use App\Models\Animal;

class AdoptionController extends Controller
{
    public function index() {}
    public function create() {}
    public function show($id) {}
    public function updateStatus(Request $request, $id) {}

    public function store(Request $request)
    {
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', __('Please log in to apply for adoption.'));
        }
        $request->validate([
            'animal_id' => 'required|exists:animals,id',
            'comment' => 'required|string|min:10|max:1500',
        ]);
        $adoption = new Adoption();
        $adoption->date = now()->toDateString();
        $adoption->status = 'Pending';
        $adoption->comment = $request->comment;
        $adoption->user_id = auth()->id();
        $adoption->animal_id = $request->animal_id;
        $adoption->save();

        return redirect()->back()->with('success', __('Your adoption application has been submitted successfully! We will review it shortly.'));
    }
}