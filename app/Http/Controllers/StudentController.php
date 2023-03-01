<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $students = Student::query();

        // If a search query is present, filter the results
        if ($request->input('search')) {
            $searchQuery = $request->input('search');
            $students->where('name', 'LIKE', "%{$searchQuery}%")
                ->orWhere('email', 'LIKE', "%{$searchQuery}%")
                ->orWhere('phone', 'LIKE', "%{$searchQuery}%");
        }

        $students = $students->paginate(10);

        return view('students.index', compact('students'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students',
            'phone' => 'required'
        ]);
    
        Student::create($request->all());
    
        return redirect()->route('students.create')
            ->with('success','Student created successfully.');
    }

    /**
     * Display the specified resource.
     */
        public function show(Student $student)
    {
        return view('students.show',compact('student'));
    }

    public function edit(Student $student)
    {
        return view('students.edit',compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students,email,'.$student->id,
            'phone' => 'required'
        ]);

        $student->update($request->all());

        return redirect()->route('students.index')
            ->with('success','Student updated successfully');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')
            ->with('success','Student deleted successfully');

    }
}
