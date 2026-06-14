<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visit;

class VisitController extends Controller
{
    public function approve($id)
    {
        $visit = Visit::findOrFail($id);
        $visit->update(['status' => 'Approved']); 

        return redirect()->back()->with('status', __('Visit has been approved.'));
    }

    public function reject($id)
    {
        $visit = Visit::findOrFail($id);
        $visit->update(['status' => 'Rejected']);

        return redirect()->back()->with('status', __('Visit has been rejected.'));
    }

    /**
     * Soft delete / Archive a visit record.
     */
    public function destroy($id)
    {
        $visit = Visit::findOrFail($id);
        $visit->delete();

        return redirect()->back()->with('status', __('Visit record deleted successfully.'));
    }

    /**
     * Restore an archived visit record.
     */
    public function restore($id)
    {
        $visit = Visit::withTrashed()->findOrFail($id);
        $visit->restore();

        return redirect()->back()->with('status', __('Visit restored to active view.'));
    }

    /**
     * Permanently delete a visit record (Admin Only).
     */
    public function forceDelete($id)
    {
        $visit = Visit::withTrashed()->findOrFail($id);
        $visit->forceDelete();

        return redirect()->back()->with('status', __('Visit record completely erased.'));
    }
}