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

    /**
     * 
     */
    public function getBasic() {
        return view('pages.example1');
    }

    /**
     * 
     */
    public function getBasicData() {
        $users = User::select(['id', 'name', 'email', 'created_at', 'updated_at']);
        return Datatables::of($users)->make(); 
    }

    /**
     * 
     */
    public function getBasicObject() {
        return view('pages.example2');
    }

}
