<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    private $posts = [
        2003001 => [
            'EmployeeNumber'    =>  '1',
            'FirstName'         =>  'Bob',
            'LastName'          =>  'Bobberson',
            'Birthday'          =>  '1999/01/25',
            'Gender'            =>  'male'
        ],
        2003002 => [
            'EmployeeNumber'    =>  '2',
            'FirstName'         =>  'Mike',
            'LastName'          =>  'Mikerson',
            'Birthday'          =>  '1997/01/25',
            'Gender'            =>  'male'
        ],
        2003003 => [
            'EmployeeNumber'    =>  '3',
            'FirstName'         =>  'Ana',
            'LastName'          =>  'Ananerson',
            'Birthday'          =>  '1939/01/25',
            'Gender'            =>  'female'
        ],
        2003004 => [
            'EmployeeNumber'    =>  '4',
            'FirstName'         =>  'Bill',
            'LastName'          =>  'Billerson',
            'Birthday'          =>  '1992/01/25',
            'Gender'            =>  'male'
        ],
        2003005 => [
            'EmployeeNumber'    =>  '5',
            'FirstName'         =>  'Fill',
            'LastName'          =>  'Fillerson',
            'Birthday'          =>  '1929/01/25',
            'Gender'            =>  'female'
        ],
    ];



    public function index()
    {
        return view('Employees.index',['posts'=>$this->posts ]);
    }

    
    public function create()
    {
        return view('Employees.create');
    }

  
    public function store(Request $request)
    {
        $EmployeeNumber      =   request()->input('EmployeeNumber');
        $FirstName    =   request()->input('FirstName');
        $LastName    =   request()->input('LastName');
        $Birthday    =   request()->input('Birthday');
        $Gender    =   request()->input('Gender');
        $post      =   ['EmployeeNumber'=>$EmployeeNumber, 'FirstName'=>$FirstName, 'LastName'=>$LastName, 'Birthday'=>$Birthday, 'Gender'=>$Gender,];
        return view('Employees.store',['post'=> $post ]);
    }

  
    public function show($id)
    {
        abort_if(!(isset($this->posts[$id])), 404);
        return view('Employees.show',['post'=>$this->posts[$id],$id]);
    }

    public function edit($id)
    {
        abort_if(!(isset($this->posts[$id])), 404);
        return view('Employees.edit',['post'=>$this->posts[$id] ]);
    }

  
    public function update(Request $request, $id)
    {
        $EmployeeNumber      =   request()->input('EmployeeNumber');
        $FirstName    =   request()->input('FirstName');
        $LastName    =   request()->input('LastName');
        $Birthday    =   request()->input('Birthday');
        $Gender    =   request()->input('Gender');
        $post      =   ['EmployeeNumber'=>$EmployeeNumber, 'FirstName'=>$FirstName, 'LastName'=>$LastName, 'Birthday'=>$Birthday, 'Gender'=>$Gender,];
        return view('Employees.store',['post'=> $post ]);
    }

 
    public function destroy($id)
    {
        $EmployeeNumber      =   request()->input(NULL);
        $FirstName    =   request()->input(NULL);
        $LastName    =   request()->input(NULL);
        $Birthday    =   request()->input(NULL);
        $Gender    =   request()->input(NULL);
        $post      =   ['EmployeeNumber'=>$EmployeeNumber, 'FirstName'=>$FirstName, 'LastName'=>$LastName, 'Birthday'=>$Birthday, 'Gender'=>$Gender,];
        return view('Employees.store',['post'=> $post ]);
    }
}
