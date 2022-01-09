<?php

namespace App\Http\Controllers;

use App\Models\Membre;
use Illuminate\Http\Request;

class HomeController extends Controller
{
 public function index(){

    $membres = Membre::all();
    $hommes = Membre::where("genre",'Homme')->get();
    $femmes = Membre::where("genre",'Femme')->get();
    $homme_condition = Membre::whereBetween('age',[18,24])->where('genre','Homme')->get();
    $femmes_condition = Membre::whereBetween('age',[18,24])->where('genre','Femme')->get();
    $hors_condition = Membre::whereNotBetween("age",[18,24])->get();






return view("home",compact("membres",'hommes','femmes','homme_condition','femmes_condition','hors_condition'));

}

}
