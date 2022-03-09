@extends('layouts.mainlayout')
@section('title', 'Edit')
@section('content')

<div class="relative  flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">

        <div class="text-center  text-gray-600 dark:text-gray-400 text-sm ">
            <h1> Edit Record </h1>
            <form action="/Employees" action="POST">
                @csrf
                <span> EmployeeNumber : </span><input type="text" name="EmployeeNumber" id="EmployeeNumber" value="{{$post['EmployeeNumber']}}" /> <br>
                <span> LastName : </span><input type="text" name="LastName" id="LastName"value="{{$post['LastName']}}" /> <br>
                <span> FirstName : </span> <input type="text" name="FirstName" id="FirstName"value="{{$post['FirstName']}}" /> <br>
                <span> Birthday : </span><input type="date" name="Birthday" id="Birthday" value="{{$post['Birthday']}}"/> <br>
                <span> Gender : </span> <input type="text" name="Gender" id="Gender" value="{{$post['Gender']}}"/> <br>
                <input type="submit" value="save" />
            </form>
        </div>
    </div>
</div>
@endsection