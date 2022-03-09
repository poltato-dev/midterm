@extends('layouts.mainlayout')
@section('title', 'Index')
@section('content')
    <div class="relative  flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">

            <div class="text-center  text-gray-600 dark:text-gray-400 text-sm ">
                @forelse ($posts as $key => $post)
                    <div>
                        <h1>EmployeeID : {{ $key }} </h1>
                    </div>

                    <div><b>EmployeeNumber : </b>{{ $post['EmployeeNumber'] }} </div>
                    <div><b>LastName :</b>{{ $post['LastName'] }} </div>
                    <div><b>FirstName :</b>{{ $post['FirstName'] }} </div>
                    <div><b>Birthday :</b>{{ $post['Birthday'] }} </div>
                    <div><b>Gender :</b> {{ $post['Gender'] }} </div>
                    <hr />
                    <a href="/Employees/{{ $key }}">Show details</a>
                    <span>|</span>
                    <a href="/Employees/{{ $key }}/edit">Edit details</a>
                    <span>|</span>
                    <a href="/Employees/{{ $key }}/delete">Delete details</a>
                @empty
                    <h1>No records</h1>
                @endforelse

                <p>------</p>
                <a href="/Employees/create">Create Records</a>
                <p>------</p>

            </div>
        </div>
    </div>
@endsection
