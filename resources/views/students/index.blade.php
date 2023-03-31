@extends('students.layout')

@section('content')
<div class="container">
    <div class="row">
        <h1>Student CRUD</h1>
        <hr>
        <div class="row">
                <div class="pull-left">
                    <a class="btn btn-success" href="{{ route('students.create') }}"> Add New Student</a>
                </div>
        
                {{-- <div class="pull-right">
                    <form action="{{ route('students.index') }}" method="GET">
                            <input type="text" name="search" id="search-input" class="form-control" placeholder="Search...">
                            <button type="submit" class="btn btn-primary">Search<i class="fas fa-search"></i></button>
                    </form>        
                    <form action="{{ route('students.index') }}" method="GET">
                        <input type="text" name="search" placeholder="Search...">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>            
                </div> --}}
                <form action="{{ route('students.index') }}" method="GET">
                <div class="input-group mb-3">
                    <input type="text" name="search" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" type="submit">Search</button>
                    </div>
                    </div>
                </form>
        </div><br>
    </div>
    
    {{-- <div class="row">
        
    </div> --}}

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif
    
    @if ($message = Session::get('destroyed'))
        <div class="alert alert-warning" role="alert">
            {{ $message }}
        </div>
    @endif

    @if($students->isEmpty())
        <div class="alert alert-dark" role="alert">
            No students found.
        </div>
    @else
    <div class="table-responsive-xl">
            {{-- <table class="table table-bordered table-hover table-sm">
                <thead> --}}
            <table class="table align-middle mb-0 bg-white table-hover table-sm">
                <thead class="bg-light">
                    <tr>
                        <th>LRN</th>
                        <th>Firstname</th>
                        <th>Middlename</th>
                        <th>Lastname</th>
                        <th>Age</th>
                        <th>Year Level</th>
                        <th>Section</th>
                        <th width="220px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->student_lrn }}</td>
                            <td>{{ $student->first_name }}</td>
                            <td>{{ $student->middle_name }}</td>
                            <td>{{ $student->last_name }}</td>
                            <td>{{ $student->age }}</td>
                            <td>{{ $student->year_level }}</td>
                            <td>{{ $student->section }}</td>
                            <td>
                                <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                
                                    <a class="btn btn-outline-info" href="{{ route('students.show', $student->id) }}">Show</a>
                                    
                                    <a class="btn btn-primary" href="{{ route('students.edit', $student->id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>

            <div>
                {{ $students->links('pagination.custom') }}
            </div>
    @endif
</div>
@endsection