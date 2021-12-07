<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;


function generateToken(){
    return "PM-" .(string)(hrtime()[1]);
}
class VisitorController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $visitor = new Visitor;
        $visitors = Visitor::whereDate('created_at', date('Y-m-d'))->get();
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
        $visitor->checked_out = false;
        
        $head_count = $request->head_count;
        if($head_count < 1 || $head_count == null) $head_count = 1; 
        $visitor->head_count = $head_count;
        
        // 1. Generate token
        $token = generateToken();
        // 2. Save the token
        $visitor->token = $token;
        // 3. SMS the token to user
        $basic  = new \Vonage\Client\Credentials\Basic(env('SMS_API_KEY'), env('SMS_API_SECRET'));
        $client = new \Vonage\Client($basic);

        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS("97517418360", "BPC Power Museum VMS", "You have been checked in with token nuumber ".$token)
        );
        
        $message = $response->current();
        
        if ($message->getStatus() == 0) {
            echo "The message was sent successfully\n";
        } else {
            echo "The message failed with status: " . $message->getStatus() . "\n";
        }

        // 4. save the user
        $visitor->save();
        // 5. done
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
