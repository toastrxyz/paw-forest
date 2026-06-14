<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;

class DonationController extends Controller
{
    public function edit($id)
    {
        // Use withTrashed() so admins can still edit or view archived records if needed
        $donation = Donation::withTrashed()->with('user')->findOrFail($id);
        return view('pages.admin.donations-edit', compact('donation'));
    }

    public function update(Request $request, $id)
    {
        $donation = Donation::withTrashed()->findOrFail($id);
        
        $data = $request->validate([
            'method_of_payment' => 'required|string',
            'message'           => 'nullable|string'
        ]);
        
        $donation->update($data);
        return redirect('/admin/donations')->with('status', __('Donation record saved.'));
    }

    public function destroy($id)
    {
        // This will now soft delete the record automatically if the trait is on the model
        $donation = Donation::findOrFail($id);
        $donation->delete(); 
        
        return redirect('/admin/donations')->with('status', __('Donation record archived.'));
    }

    public function restore($id)
    {
        // Add the restore mechanism for the admin dashboard button
        $donation = Donation::withTrashed()->findOrFail($id);
        $donation->restore();

        return redirect('/admin/donations')->with('status', __('Donation record restored successfully.'));
    }
}