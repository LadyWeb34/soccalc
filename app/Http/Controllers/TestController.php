<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTestRequest;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestRequest $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $subject = Subject::where('id', $id)->with(['categoryQuestions' => function ($query) {
            $query->with(['questionOptions' => function ($query) {
                $query->inRandomOrder();
                }]);
        }])
        ->whereHas('categoryQuestions')
        ->get();

        return view('test', compact('subject'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
