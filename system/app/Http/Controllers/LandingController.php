<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LandingController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Landing Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders your application's "dashboard" for users that
    | are authenticated. Of course, you are free to change or remove the
    | controller as you wish. It is just here to get your app started!
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */  

    public function index()
    {
        return view('welcome');
    }

    public function country()
    {

        return view('country');
    }

    public function countryhk()
    {
        
        return view('landing.countryhk');
    }

    public function countrysg()
    {
        
        return view('landing.countrysg');
    }

    public function countryid()
    {
        
        return view('landing.countryid');
    }
}
