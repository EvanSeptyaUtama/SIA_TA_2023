<?php

namespace App\Http\Controllers\Coba;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    public function index_student(Student $student)
    {

        $student =  DB::table('students')

            ->get();
        return view('admin.coba.query_builder.student', compact('student'));
    }
    public function store_student(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'city' => 'required',
            'marks' => 'required',
        ]);

        Student::create([
            'name' => $request->name,
            'city' => $request->city,
            'marks' => $request->marks,
        ]);
        return Redirect::route('index_student')->with('status', 'Berhasil tambah data');
    }

    public function edit_student(Student $student)
    {
        return view('admin.coba.query_builder.student_edit', compact('student'));
    }
    public function update_student(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'city' => 'required',
            'marks' => 'required',
        ]);

        $student->update([
            'name' => $request->name,
            'city' => $request->city,
            'marks' => $request->marks,
        ]);
        return Redirect::route('index_student')->with('status', 'Berhasil ubah data');
    }

    public function hapus_student(Student $student)
    {
        $student->delete();
        return Redirect::route('index_student')->with('status', 'berhasil hapus data!!', $student->id);
    }
}
