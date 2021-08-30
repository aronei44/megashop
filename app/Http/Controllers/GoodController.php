<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Good;

class GoodController extends Controller
{
    public function add(Request $request){
    	$validatedData = $request->validate([
    		'good_name'=>'required|max:255',
    		'good_image'=>'required|mimes:jpg,png,jpeg,heic',
    		'good_price'=>'required|numeric',
    		'good_discount'=>'required|numeric',
    		'good_stocks'=>'required|numeric',
    		'good_category'=>'required|max:50',
    		'good_desc'=>'required'
    	]);
    	$nama =  'foto' .  '-' .time() .'.'.$request->file('good_image')->extension();
        $request->good_image->move(public_path('img'),$nama);
    	Good::create([
    		'good_seller_id'=>auth()->user()->id,
    		'good_name'=>$request->good_name,
    		'good_image'=>$nama,
    		'good_price'=>$request->good_price,
    		'good_discount'=>$request->good_discount,
    		'good_stocks'=>$request->good_stocks,
    		'good_category'=>$request->good_category,
    		'good_desc'=>htmlspecialchars($request->good_desc)
    	]);
    	return redirect('/tokoku');
    }
    public function lihat(){
    	$goods = Good::where('good_seller_id',auth()->user()->id)->get();
    	return view('tokoku',['url'=>'/profil','goods'=>$goods]);
    }
}
