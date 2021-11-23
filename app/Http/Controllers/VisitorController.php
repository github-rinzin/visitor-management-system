<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;


function generateToken(){
    return "PM-" .(string)(hrtime()[1]);
}
class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $visitor = new Visitor;
        $visitors = Visitor::get()->all();
        return view('visitor.index',['visitors' => $visitors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('visitor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $visitor = new Visitor;
        $visitor->id_number = $request->id_number;
        $visitor->name = $request->name;
        $visitor->phone = $request->phone;
        $visitor->check_in_out = false;
        
        $head_count = $request->head_count;
        if($head_count < 1 || $head_count == null) $head_count = 1; 
        $visitor->head_count = $head_count;
        
        // 1. Generate token
        $token = generateToken();
        // 2. Save the token
        $visitor->token = $token;
        // $visitor->token = "POWMUS-20211121";
        // 3. SMS the token to user

        $visitor->save();
        // dd($visitor);
        return redirect()->back()->with('msg', "User successfully checked out with token nuumber ".$token);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function show(Visitor $visitor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function edit(Visitor $visitor)
    {
        return view("visitor.edit");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visitor $visitor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visitor $visitor)
    {
        //
    }
}
