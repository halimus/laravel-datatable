<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;
use App\User;
use DB;

class EloquentController extends Controller {
    /*
     * 
     */

    public function __construct() {
        
    }

    /* ------------------------------------------------------------------------*
      example1 : Basic
      ----------------------------------------------------------------------- */

    public function getExample1() {
        return view('datatables.eloquent.example1');
    }

    public function getDataExample1() {
        $users = User::select(['id', 'name', 'email', 'created_at', 'updated_at']);
        return Datatables::of($users)->make();
    }

    /* ------------------------------------------------------------------------*
      example2 : Basic with Column Definition
      ----------------------------------------------------------------------- */

    public function getExample2() {
        return view('datatables.eloquent.example2');
    }

    public function getDataExample2() {
        $users = User::select(['id', 'name', 'email', 'created_at', 'updated_at']);
        return Datatables::of($users)->make();
    }

    /* ------------------------------------------------------------------------*
      example3 : Object Data Source
      ----------------------------------------------------------------------- */

    public function getExample3() {
        return view('datatables.eloquent.example3');
    }

    public function getDataExample3() {
        return Datatables::of(User::query())->make(true);
    }

    /* ------------------------------------------------------------------------*
      example4 : Add/Edit/Remove Column
      ----------------------------------------------------------------------- */

    public function getExample4() {
        return view('datatables.eloquent.example4');
    }

    public function getDataExample4() {
        $users = User::select(['id', 'name', 'email', 'password', 'created_at', 'updated_at']);

        return Datatables::of($users)
            ->addColumn('action', function ($user) {
                return '
                <a href="#edit-'.$user->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <a href="#delete-'.$user->id.'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-edit"></i> Delete</a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->removeColumn('password')
            ->make(true);
    }
    
        /* ------------------------------------------------------------------------*
      example4 :  DT Row Objects
      ----------------------------------------------------------------------- */

    public function getExample5() {
        return view('datatables.eloquent.example5');
    }

    public function getDataExample5() {
        $users = User::select(['id', 'name', 'email', 'password', 'created_at', 'updated_at']);

        return Datatables::of($users)
            ->addColumn('action', function ($user) {
                return '<a href="#edit-'.$user->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })
            ->editColumn('id', '{{$id}}')
            ->removeColumn('password')
            ->setRowId('id')
            ->setRowClass(function ($user) {
                //return $user->id % 2 == 0 ? 'alert-success' : 'alert-warning';
                //return $user->name == 'Sara' ? 'alert-danger' : 'alert-success';
                return $user->name == 'Sara' ? 'disactivated' : '';
            })
            ->setRowData([
                'id' => 'test',
            ])
            ->setRowAttr([
                'color' => 'red',
            ])
            ->make(true);
    }
    
    

}
