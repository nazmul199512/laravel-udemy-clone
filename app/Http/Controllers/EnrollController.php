<?php

namespace App\Http\Controllers;

use Cart;
use Illuminate\Http\Request;

/**
 * Class EnrollController
 * @package App\Http\Controllers
 * @author MD. Nazmul Alam <nazmul199512@gmail.com>
 */
class EnrollController extends Controller
{
    public function enroll(Request $request)
    {
        foreach (Cart::getContent() as $cart) {
            auth()->user()->enrolls()->create([
                'course_id' => $cart->id
            ]);
        }

        Cart::clear();

        return redirect()->route('home');
    }
}
