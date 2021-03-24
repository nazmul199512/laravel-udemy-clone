<?php

namespace App\Http\Controllers;

use Cart;
use Illuminate\Http\Request;

/**
 * Class CartController
 * @package App\Http\Controllers
 * @author MD. Nazmul Alam <nazmul199512@gmail.com>
 */
class CartController extends Controller
{
    public function carts()
    {
        $carts = Cart::getContent();

        return view('carts', compact('carts'));
    }

    public function add(Request $request)
    {
        //dd($request->all());
        Cart::add($request->course_id, $request->name, $request->price, $request->quantity, array());

        return back();
    }

    public function remove($id)
    {
        Cart::remove($id);

        return back();
    }
}
