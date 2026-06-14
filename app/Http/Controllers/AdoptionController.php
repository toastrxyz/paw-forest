<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adoption;

class AdoptionController extends Controller
{
    public function approve($id)
    {
        $adoption = Adoption::findOrFail($id);
        $adoption->update(['status' => 'Approved']);

        return redirect()->back()->with('status', __('Application has been approved.'));
    }

    public function reject($id)
    {
        $adoption = Adoption::findOrFail($id);
        $adoption->update(['status' => 'Rejected']);

        return redirect()->back()->with('status', __('Application has been rejected.'));
    }

    public function destroy($id)
    {
        $adoption = Adoption::findOrFail($id);
        $adoption->delete();

        return redirect()->back()->with('status', __('Application deleted successfully.'));
    }

    public function restore($id)
    {
        // We use withTrashed() to find records that have a deleted_at timestamp
        $adoption = Adoption::withTrashed()->findOrFail($id);
        $adoption->restore();

        return redirect()->back()->with('status', __('Application restored to active view.'));
    }

    public function forceDelete($id)
    {
        $adoption = Adoption::withTrashed()->findOrFail($id);
        $adoption->forceDelete();

        return redirect()->back()->with('status', __('Application record completely erased.'));
    }
}