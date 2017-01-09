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


      /*$data = array('firstName' => "Phedra",
                    'lastName'  => "Moerloos");

       een associatieve array zoals deze wilt hij wel doorgeven door gewoon, $data bij view() te zetten
       maar een gewone array doet hij enkel via compact()*/

      $people = ['Thessa', 'Sarah', 'Luna', 'Demi', 'Lukas'];

      return view('pages.about', compact('people'));


    }

    public function contact() {

      return view('pages.contact');

    }

}
