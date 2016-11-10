<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function example2() {
        
        return view('pages.example2');
        
    }

}
