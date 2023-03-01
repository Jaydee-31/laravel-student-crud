{{-- ```php --}}
@extends('students.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Student CRUD</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('students.create') }}"> Create New Student</a>
            
        </div>
        
    </div>
</div>
<div class="pull-right">
    <form action="{{ route('students.index') }}" method="GET">
        
            <input type="text" name="search" id="search-input" class="form-control" placeholder="Search...">
    
            {{-- <button type="submit" class="btn btn-primary">Search<i class="fas fa-search"></i></button> --}}
     
    </form>
    
</div>

{{-- @if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif --}}

@if($students->isEmpty())
    <p>No students found.</p>
@else
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('students.show', $student->id) }}">Show</a>
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

    {{ $students->links() }}
@endif

@endsection