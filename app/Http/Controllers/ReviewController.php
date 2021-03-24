<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

/**
 * Class ReviewController
 * @package App\Http\Controllers
 * @author MD. Nazmul Alam <nazmul199512@gmail.com>
 */
class ReviewController extends Controller
{
    public function review(Request $request)
    {
        //dd($request->all());
        Review::updateOrCreate([
            'user_id' => auth()->user()->id,
            'course_id' => $request->course_id
        ], [
            'rating' => $request->rating,
            'review' => $request->review,
        ]);

        return back();
    }
}
