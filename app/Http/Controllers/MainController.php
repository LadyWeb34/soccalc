<?php

namespace App\Http\Controllers;

use App\Models\Benefit;
use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $benefit = Benefit::all();
        $category = Category::all();
        return view('main', compact('category', 'benefit'));
    }
}
