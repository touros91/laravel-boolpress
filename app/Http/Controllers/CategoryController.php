<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function show($slug) 
    {
        $category = Category::where('slug', $slug)->first();
        
        return view("guests.categories.show", compact('category'));
    }
}
