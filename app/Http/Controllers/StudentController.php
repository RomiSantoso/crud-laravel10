<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //get data siswa
        $students = Student::all();

        return view('student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $this->validate($request, [
            'nis' => 'required',
            'name' => 'required',
            'class' => 'required',
            'address' => 'required',
        ]);

        //insert ke database
        Student::create([
            'nis' => $request->nis,
            'name' => $request->name,
            'class' => $request->class,
            'address' => $request->address,
        ]);

        return redirect()->route('students.index')->with('success', 'Berhasil ditambahkan !.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::find($id);
        return view('student.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::find($id);
        return view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) : RedirectResponse
    {
        $this->validate($request, [
            'nis' => 'required',
            'name' => 'required',
            'class' => 'required',
            'address' => 'required',
        ]);

        Student::where('id', $id)
                ->update([
                    'nis' => $request->nis,
                    'name' => $request->name,
                    'class' => $request->class,
                    'address' => $request->address,
                ]);

        return redirect()->route('students.index')->with('success', 'Berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) : RedirectResponse
    {
        Student::where('id', $id)
                ->delete();
        return redirect()->route('students.index')->with('success', 'Berhasil Dihapus.');
    }
}
