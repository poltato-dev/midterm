@extends('layouts.mainlayout')
@section('title', 'Show')
@section('content')

    <div class="relative  flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">

            <div class="text-center  text-gray-600 dark:text-gray-400 text-sm ">
                <h1> Show Record </h1>

                <div>
                    <h3>EmployeeNumber : {{ $post['EmployeeNumber'] }} </h3>
                </div>
                <div>
                    <p>LastName :{{ $post['LastName'] }} </p>
                </div>
                <div>
                    <p>FirstName :{{ $post['FirstName'] }} </p>
                </div>
                <div>
                    <p>Birthday :{{ $post['Birthday'] }} </p>
                </div>
                <div>
                    <p>Gender :{{ $post['Gender'] }} </p>
                </div>



                <p>------</p>
                <a href="/Employees">Back to Records</a>
                <p>------</p>
            </div>
        </div>
    </div>
@endsection
