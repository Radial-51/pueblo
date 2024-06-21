<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Community;


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
        $serviceCount = Service::count();
        $communityServiceCount = Community::count();
        $offerServiceCount = Service::where('status', 'Oferta')->count(); 
    
        return view('home', compact('serviceCount', 'communityServiceCount', 'offerServiceCount'));
    }
}
