<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentsController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create(Request $request)
    {
        return view('students.create');
    }


    public function edit(Request $request)
    {
        $id = $request->query('id');
        $student = Student::find($id);
        return view('students.edit', ['student' => $student]); 
        return dd($student);
    }


    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required'
        ]);
        DB::table('students')
        ->where('id', $request->id)
        ->update([
            'name' => $request->input('name'),
            'phone' => $request->input('phone')
        ]);
        return redirect()->route('index')->with('success', 'Cập nhật thông tin học sinh thành công.');
    }

    

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required'
        ]);

        Student::create($request->all());

        return redirect()->route('index')->with('success', 'Thêm học sinh thành công.');
    }

    public function destroy(Request $request)
    {
        $id = $request->query('id');
        DB::table('students')->where('id', $request->id)->delete();
        return redirect()->route('index')->with('success', 'Xoá học sinh thành công.');
    }
}
