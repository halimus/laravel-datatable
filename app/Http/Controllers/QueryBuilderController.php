<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;
use App\User;
use DB;

class QueryBuilderController extends Controller {
    /*
     * 
     */

    public function __construct() {
        
    }

    /* ------------------------------------------------------------------------*
      
      ----------------------------------------------------------------------- */

    public function getExample6() {
        return view('datatables.querybuilder.example6');
    }

    public function getDataExample6() {
        $users = DB::table('users')->select(['id', 'name', 'email', 'created_at', 'updated_at']);
        return Datatables::of($users)->make();
    }

    /* ------------------------------------------------------------------------*
      example7 : Add|Edit|Remove Column
      ----------------------------------------------------------------------- */

    public function getExample7() {
        return view('datatables.querybuilder.example7');
    }

    public function getDataExample7() {
        $users = DB::table('users')->select(['id', 'name', 'email', 'password', 'created_at', 'updated_at']);

        return Datatables::of($users)
            ->addColumn('action', function ($user) {
                return '<a href="#edit-'.$user->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->removeColumn('password')
            ->make(true);
    }

}
