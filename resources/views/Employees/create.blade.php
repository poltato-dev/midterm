@extends('layouts.mainlayout')
@section('title', 'Create')
@section('content')
    <div class="relative  flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">

            <div class="text-center  text-gray-600 dark:text-gray-400 text-sm ">
                <h1> create new record </h1>
                <form action="/Employees" action="POST">
                    @csrf
                    <span> EmployeeNumber : </span><input type="text" name="EmployeeNumber" id="EmployeeNumber" /> <br>
                    <span> LastName : </span><input type="text" name="LastName" id="LastName" /> <br>
                    <span> FirstName : </span> <input type="text" name="FirstName" id="FirstName" /> <br>
                    <span> Birthday : </span><input type="date" name="Birthday" id="Birthday" /> <br>
                    <span> Gender : </span> <input type="text" name="Gender" id="Gender" /> <br>
                    <input type="submit" value="save" />
                </form>
            </div>
        </div>
    </div>
@endsection
