@extends('students.layout')

@section('content')
    @section('title')
    Update Student
    @endsection
    @section('header')
    Update Student
    @endsection

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <section class="max-w-4xl p-6 mx-auto bg-white rounded-xl shadow-md dark:bg-gray-800">
            <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Student info</h2>
            <form method="POST" action="{{ route('students.update', $student->id) }}">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                 
                    <div class="md:col-span-2">
                        <x-label for="name" value="{{ __('LRN') }}" />
                        <x-input id="student_lrn" class="" type="number" name="student_lrn"
                            value="{{ old('student_lrn', $student->student_lrn) }}" />
                        <x-input-error for="student_lrn" class="mt-1" />
                    </div>

                    <div>
                        <x-label for="first_name" value="{{ __('Firstname') }}" />
                        <x-input id="first_name" class="" type="text" name="first_name"
                            value="{{ old('first_name', $student->first_name) }}" />
                        <x-input-error for="first_name" class="mt-1" />
                    </div>

                    <div>
                        <x-label for="middle_name" value="{{ __('Middle Name') }}" />
                        <x-input id="middle_name" class="" type="text" name="middle_name"
                            value="{{ old('middle_name', $student->middle_name) }}" />
                        <x-input-error for="middle_name" class="mt-1" /> 
                    </div>

                    <div>
                        <x-label for="last_name" value="{{ __('Lastname') }}" />
                        <x-input id="last_name" class="" type="text" name="last_name"
                            value="{{ old('last_name', $student->last_name) }}" />
                        <x-input-error for="last_name" class="mt-1" />
                    </div>

                    <div>
                        <x-label for="age" value="{{ __('Age') }}" />
                        <x-input id="age" class="" type="number" name="age"
                            value="{{ old('age', $student->age) }}" />
                        <x-input-error for="age" class="mt-1" />
                    </div>
                                            
                    <div>
                        <x-label for="year_level" value="{{ __('Year Level') }}" />
                        <x-input id="year_level" class="" type="text" name="year_level"
                            value="{{ old('year_level', $student->year_level) }}" />
                        <x-input-error for="year_level" class="mt-1" />
                    </div>

                    <div>
                        <x-label for="section" value="{{ __('Section') }}" />
                        <x-input id="section" class="" type="text" name="section"
                            value="{{ old('section', $student->section) }}" />
                        <x-input-error for="section" class="mt-1" />
                    </div>   
                    
                </div>
                <div class="flex justify-end items-center mt-6">
                    <a href="{{ route('students.index') }}" class="text-sm">
                        <x-span data-e2e="bottom-sign-up" class="ml-2 text-sm">
                            Cancel
                        </x-span>
                    </a>
                    <x-button class="ml-5">
                        {{ __('Save') }}
                    </x-button>
                </div>
            </form>
            </section>
        </div>
    </div>
 
@endsection