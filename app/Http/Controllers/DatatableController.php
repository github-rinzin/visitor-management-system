<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
// model
use App\Models\Visitor;

class DatatableController extends Controller
{
    public function getReport(Request $request){
        
        $visitors = Visitor::whereBetween('created_at', [$request->start_date, $request->end_date])->get();
        // $visitors = Visitor::all()->get();
        return DataTables::of($visitors)
            ->addColumn('checked_out', function(Visitor $visitor){
                return $visitor->checked_out ? "Checked Out" : "Not Checked Out";
            })
            ->addColumn('head_count', function(Visitor $visitor){
                return $visitor->head_count;
            })
            ->addColumn('created_at', function(Visitor $visitor){
                return $visitor->created_at->toDayDateTimeString();
            })
            ->addColumn('updated_at', function(Visitor $visitor){
                return $visitor->updated_at->toDayDateTimeString();
            })
            ->make(true);
        // return response()->json($visitors);
        
    }
}
