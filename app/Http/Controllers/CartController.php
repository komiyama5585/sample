<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = Cart::all();

        return view('carts.index', compact('carts'));   

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
        public function store(Request $request,Cart $carts)
    {
        $carts->count = $request->input('count');

        //$csum = (int) $request->input('count');
       // $psum = (int) $request->input('price');

       // dd($request->input('price'));
       
        $carts->price = $request->input('price')*$request->input('count');
        

        $carts->save();

        
        return redirect()->route('carts.show', ['id' => $carts->id]);

        
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('carts.show', compact('post'));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        $cart->delete();

        return redirect()->route('carts.index');
    }
}
