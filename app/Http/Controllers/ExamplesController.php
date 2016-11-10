<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;
use App\User;

class ExamplesController extends Controller {
    /*
     * 
     */

    public function __construct() {
        
    }

    /**
     * 
     */
    public function example1() {
        return view('pages.example1');
    }

    /**
     * 
     */
    public function example1Data() {
        $users = User::select(['id', 'name', 'email', 'created_at', 'updated_at']);
        return Datatables::of($users)->make(); 
    }

    /**
     * 
     */
    public function example2() {
        return view('pages.example2');
    }

}
