<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class searchController extends Controller
{
    public function search(Request $request)
    {
        $search = $request->input('search_string');

        $course = Course::query()
            ->where('title', 'LIKE', '%'.$search.'%')
            ->orWhere('short_description', 'LIKE', '%'.$search.'%')
            ->get();

        return view('search', compact('course'));

    }
}
