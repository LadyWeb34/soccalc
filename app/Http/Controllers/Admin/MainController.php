<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Benefit;
use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{



    public function index()
    {
        $benefit = Benefit::all();
        $category = Category::all();
        return view('admin.admin-main', compact('category', 'benefit'));
    }
    public function index2()
    {
        $benefit = Benefit::all();
        $category = Category::all();
        return view('admin2.admin2-main', compact('category', 'benefit'));
    }


}
