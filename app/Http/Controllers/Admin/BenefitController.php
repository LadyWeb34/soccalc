<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BenefitFormRequest;
use App\Models\Benefit;
use App\Models\Category;
use App\Models\Subject;
use Illuminate\Http\Request;

class BenefitController extends Controller
{
    public function index(){
        $benefit = Benefit::all();
        return view('admin.benefits', compact('benefit'));
    }
    public function create(){
        $category = Category::all();
        $subject = Subject::all();
        return view('admin.add-benefit', compact('category','subject'));
    }

    public function store(BenefitFormRequest $request){
        $data = $request->validated();

        $benefit = new Benefit();
        $benefit ->category_id = $data['category_id'];
        $benefit -> name = $data['name'];
        $benefit -> type = $data['type'];
        $benefit -> frequency = $data['frequency'];
        $benefit -> estimated_amount = $data['estimated_amount'];
        $benefit -> level_of_regulation = $data['level_of_regulation'];
        $benefit -> footing = $data['footing'];
        $benefit -> condition = $data['condition'];
        $benefit -> subject_id = $data['subject_id'];
        $benefit -> save();

        return redirect('admin/main');
    }

    public function edit($benefit_id){
        $category = Category::all();
        $benefit = Benefit::find($benefit_id);
        $subject = Subject::all();
        return view('admin.benefit-edit', compact('benefit', 'category', 'subject'));
    }
    public function edit2($benefit_id){
        $category = Category::all();
        $benefit = Benefit::find($benefit_id);
        return view('admin2.benefit-edit2', compact('benefit', 'category'));
    }
    public function update(BenefitFormRequest $request, $benefit_id){
        $data = $request->validated();

        $benefit =  Benefit::find($benefit_id);
        $benefit ->category_id = $data['category_id'];
        $benefit -> name = $data['name'];
        $benefit -> type = $data['type'];
        $benefit -> frequency = $data['frequency'];
        $benefit -> estimated_amount = $data['estimated_amount'];
        $benefit -> level_of_regulation = $data['level_of_regulation'];
        $benefit -> footing = $data['footing'];
        $benefit -> condition = $data['condition'];
        $benefit -> subject_id = $data['subject_id'];
        $benefit -> update();

        return redirect('admin/main');
    }
    public function update2(BenefitFormRequest $request, $benefit_id){
        $data = $request->validated();

        $benefit =  Benefit::find($benefit_id);
        $benefit ->category_id = $data['category_id'];
        $benefit -> name = $data['name'];
        $benefit -> type = $data['type'];
        $benefit -> frequency = $data['frequency'];
        $benefit -> estimated_amount = $data['estimated_amount'];
        $benefit -> level_of_regulation = $data['level_of_regulation'];
        $benefit -> footing = $data['footing'];
        $benefit -> condition = $data['condition'];
        $benefit -> update();

        return redirect('admin2/main');
    }

    public function destroy($benefit_id){
        $benefit = Benefit::find($benefit_id);
       if($benefit){
           $benefit->delete();
           return redirect('admin/main');
       } else{
           return redirect('admin/main');
       }
    }
    public function viewing($benefit_id){
        $benefit = Benefit::find($benefit_id);
        return view('benefit-viewing', compact('benefit'));
    }
}
