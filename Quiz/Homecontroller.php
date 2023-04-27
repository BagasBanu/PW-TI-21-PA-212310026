<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index(){
        return view('home');
    }

    public function quiz2(){
        return 'fkashdfksj';
    }
    public function index2(){
        $data = array();
        $data['title'] = "Blade Directive";
        $data['npm'] = 212310025;
        $students[] = array("npm"=>212310026, "name"=>"Bagas Banu", "gender"=>"F", "alamat"=>"Bumi");
        $students[] = array("npm"=>212310015, "name"=>"Baban Kevin", "gender"=>"F", "alamat"=>"Bumi");
        $students[] = array("npm"=>212310004, "name"=>"Bagas aji", "gender"=>"F", "alamat"=>"Bumi");
        $students[] = array("npm"=>212310027, "name"=>"Teddy S", "gender"=>"M", "alamat"=>"Bumi");
        $students[] = array("npm"=>212310038, "name"=>"Haris Fbrn", "gender"=>"M", "alamat"=>"Bumi");
        $data['students'] = $students;
        return view('home')->with("data",$data);
    }
}
