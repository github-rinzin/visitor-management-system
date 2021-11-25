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
        
        return DataTables::of($visitors)->make(true);
        // return response()->json($visitors);
        
    }
}
