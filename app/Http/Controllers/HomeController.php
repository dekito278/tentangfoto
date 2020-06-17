<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function rates()
    {
        $rates = rate::all();
        return view('rates',compact('rates'));
    }


    public function show($id)
    {
        $rate = rate::find($id);
        return view('ratesShow',compact('rate'));
    }

    public function raterate(Request $request)
    {
        request()->validate(['rate' => 'required']);
        $rate = rate::find($request->id);
        $rating = new \willvincent\Rateable\Rating;
        $rating->rating = $request->rate;
        $rating->user_id = auth()->user()->id;
        $rate->ratings()->save($rating);

        return redirect()->route("rates");
    }

}
