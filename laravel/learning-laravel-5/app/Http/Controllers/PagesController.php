<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{

    public function about() {

      $name = "Phedra Moerloos";

      //return view('pages.about')->with('name', $name);



      /*return view('pages.about')->with([

      //key wordt variabele naam --> $firstName
        "firstName"    =>   "Phedra",
        "lastName"     =>   "Moerloos"

      ]);*/


      $data = array('firstName' => "Phedra",
                    'lastName'  => "Moerloos");

      return view('pages.about', $data);


    }

}
