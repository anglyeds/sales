<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


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
        $order_by = Input::has('order_by') ? Input::get('order_by') : 'item_name';
        $search = Input::has('search_field') ? Input::get('search_field') : '';

        $items = \DB::table('items')->where(function($query){

            $min_price = Input::has('min_price') ? Input::get('min_price') : null;
            $max_price = Input::has('max_price') ? Input::get('max_price') : null;
            $categorys = Input::has('categorys') ? Input::get('categorys') : [];
            

            if(isset($min_price) && isset($max_price)){

                if(isset($categorys)){
                    foreach ($categorys as $category) {
                        $query->orWhere('selling_price','>=',$min_price)
                                ->where('selling_price','<=',$max_price)
                                ->where('category','=',$category);
                    }
                }
                $query->where('selling_price','>=',$min_price)
                        ->where('selling_price','<=',$max_price);
                
            }elseif(isset($categorys)){
                if(isset($categorys)){
                    foreach ($categorys as $category) {
                        $query->orWhere('category','=',$category);
                    }
                }
            }       


        })->select(\DB::raw('*'))
            ->where('item_name','like','%'.$search.'%')
            ->orderBy($order_by, 'asc')->groupBy('item_name')->get();

        return view('landing.countryhk', compact(['items']));
    }

    public function countryhk_item_details($item_name)
    {        
        $items = \DB::table('items')->where('item_name', '=', $item_name)->get();
        return view('landing.countryhk_item_details', ['items' => $items]);
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
