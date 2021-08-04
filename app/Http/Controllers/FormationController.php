<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\formation;
use App\Models\Cart;

class FormationController extends Controller
{
    //
    function index(){
        $data=formation::all();
        return view('welcome',['formations'=>$data]); 
    }
    /*function index2(){
        $data=formation::all();
        return view('dashboard',['formations'=>$data]);
    }
    */
    function detail($id_formation){
        $data=formation::find($id_formation);
        return view('detail',['formation' =>$data]);
    }

    function search(Request $req){
        $data=formation::where('titre','LIKE','%'.$req->input('query').'%')->get();
        return view('search',['formations'=>$data]);
    }


    function addToCart(Request $req){
        if($req->session()->has('user')){
            $cart=new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->formation_id=$req->formation_id;
            $cart->save();
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
        
    }
    
    
}
