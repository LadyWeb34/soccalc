<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFormRequest;
use App\Models\Benefit;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoryController extends Controller
{
    public function index(){
        $category = Category::all();
        return view('admin.categories', compact('category'));
    }
    public function index2(){
        $category = Category::all();
        return view('admin2.categories2', compact('category'));
    }
    public function create(){
        return view('admin.add-category');
    }
    public function store(CategoryFormRequest $request){
        $data = $request->validated();

        $category = new Category();

        $category -> name = $data['name'];
        $category -> save();

        return redirect('admin/categories');
    }

    public function edit($category_id){
        $category = Category::find($category_id);
        return view('admin.category-edit', compact('category'));
    }
    public function edit2($category_id){
        $category = Category::find($category_id);
        return view('admin2.category-edit2', compact('category'));
    }

    public function update (CategoryFormRequest $request, $category_id){
        $data = $request->validated();

        $category = Category::find($category_id);
        $category -> name = $data['name'];
        $category -> update();

        return redirect('admin/categories');
    }
    public function update2 (CategoryFormRequest $request, $category_id){
        $data = $request->validated();
        $category = Category::find($category_id);
        $category -> name = $data['name'];
        $category -> update();

        return redirect('admin2/categories');
    }

    public function destroy($category_id){
        $category = Category::find($category_id);
        if($category){
            $category->ben()->delete();
            $category -> delete();
            return redirect('admin/categories');
        } else{
            return redirect('admin/categories');
        }

    }
}
