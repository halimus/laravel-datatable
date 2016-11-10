<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Facades\Datatables;
use App\User;

use Illuminate\Support\Collection;
use Faker\Factory as Faker;
use  \Carbon\Carbon;

class CollectionController extends Controller {
    /*
     * 
     */

    public function __construct() {
        
    }
    /* ------------------------------------------------------------------------*
      example8 : Collection Demo using collection of array as data source
      ----------------------------------------------------------------------- */

    public function getExample8() {
        return view('datatables.collection.example8');
    }

    public function getDataExample8() {
        $users = new Collection;
        $faker = Faker::create();
        
        for ($i = 0; $i < 100; $i++) {
            $users->push([
                'id'         => $i + 1,
                'name'       => $faker->name,
                'email'      => $faker->email,
                'created_at' => Carbon::now()->format('m-d-Y'),
                'updated_at' => Carbon::now()->format('m-d-Y'),
            ]);
        }

        return Datatables::of($users)->make(true);
    }

 
    

}
