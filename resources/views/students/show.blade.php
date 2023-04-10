@extends('students.layout')

@section('content')
    @section('title')
   {{ $student->first_name }} {{ $student->last_name }}
    @endsection
    @section('header')
    {{ $student->last_name }}'s Information
    @endsection

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid mb-8">
                <div class="col-span-full mb-8">
                    <x-button-link href="{{ route('students.index') }}" class="">
                        {{ __('Back') }}
                    </x-button-link>   
                </div>
               
                <div class="col-span-full">
                
                            <div class="shadow overflow-hidden border-b border-gray-200 dark:border-gray-900 rounded-xl">
                            
                                <table class="min-w-full w-full">
                                <tr class="">
                                    <th scope="col" class="px-6 py-3 bg-white dark:bg-gray-800 dark:bg-opacity-50 text-right text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                        LRN
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100 bg-gray-200 dark:bg-slate-400 dark:bg-opacity-50">
                                        {{ $student->student_lrn }}
                                    </td>
                                </tr>
                                <tr class="">
                                    <th scope="col" class="px-6 py-3 bg-white dark:bg-gray-800 dark:bg-opacity-50 text-right text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                        Fullname
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100 bg-gray-200 dark:bg-slate-400 dark:bg-opacity-50">
                                        {{ $student->last_name }}, {{ $student->first_name }} {{ $student->middle_name }}
                                    </td>
                                </tr>
                                <tr class="">
                                    <th scope="col" class="px-6 py-3 bg-white dark:bg-gray-800 dark:bg-opacity-50 text-right text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                        Age
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100 bg-gray-200 dark:bg-slate-400 dark:bg-opacity-50">
                                        {{ $student->age }}
                                    </td>
                                </tr>
                                <tr class="">
                                    <th scope="col" class="px-6 py-3 bg-white dark:bg-gray-800 dark:bg-opacity-50 text-right text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                        Year Level
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100 bg-gray-200 dark:bg-slate-400 dark:bg-opacity-50">
                                        {{ $student->year_level }}
                                    </td>
                                </tr>
                                <tr class="">
                                    <th scope="col" class="px-6 py-3 bg-white dark:bg-gray-800 dark:bg-opacity-50 text-right text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                        Section
                                    </th>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100 bg-gray-200 dark:bg-slate-400 dark:bg-opacity-50">
                                        {{ $student->section }}
                                    </td>
                                </tr>
                            </table>
                  
                </div>
            </div>
        </div>
    </div>
@endsection
