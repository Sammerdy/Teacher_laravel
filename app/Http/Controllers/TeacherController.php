<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('staffs.index', compact('teachers'));
    }

    public function create()
    {
        return view('staffs.create');
    }

    public function store(Request $request)
    {
        Teacher::create($request->all());
        return redirect()->route('staffs.index');
    }

    public function show($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('staffs.show', compact('teacher'));
    }

    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('staffs.edit', compact('teacher'));
    }

    public function update(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->update($request->all());
        return redirect()->route('staffs.index');
    }

    public function destroy($id)
    {
         Teacher::destroy($id);
    return redirect()->route('staffs.index')
                     ->with('success', 'Teacher deleted successfully');
    }
}


