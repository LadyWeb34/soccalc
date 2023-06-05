<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Requests\OptionRequest;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $option = Option::all();
        return view('admin.option.index', compact('option'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $question = Question::all();
        return view('admin.option.create', compact('question'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OptionRequest $request)
    {
        Option::create($request->validated());

        return redirect()->route('option.index')->with([
            'message' => 'successfully created !',
            'alert-type' => 'success'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $question = Question::where('id', $id)->first();
        return view('admin.option.create', compact('question'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $option = Option::where('id', $id)->first();
        return view('admin.option.edit', compact('option'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OptionRequest $request, Option $option)
    {
        $option->update($request->validated());

        return redirect()->route('option.index')->with([
            'message' => 'successfully updated !',
            'alert-type' => 'info'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $option = Option::where('id', $id)->first();
        $option->delete();
        return redirect()->route('option.index');
    }
}
