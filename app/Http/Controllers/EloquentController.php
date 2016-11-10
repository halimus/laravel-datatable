<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;
use App\User;

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
        return view('datatables.eloquent.example2');
    }

    /* ------------------------------------------------------------------------*
      example3 : Object Data Source
      ----------------------------------------------------------------------- */

    public function getExample3() {
        return view('datatables.eloquent.example3');
    }

    public function getDataExample3() {
        return view('datatables.eloquent.example3');
    }

    /* ------------------------------------------------------------------------*
      example4 : Row Details
      ----------------------------------------------------------------------- */

    public function getExample4() {
        return view('datatables.eloquent.example4');
    }

    public function getDataExample4() {
        return view('datatables.eloquent.example4');
    }

}
