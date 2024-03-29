<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Star;
use App\Models\Planet;

class FrontEndController extends Controller
{
    public function index(){
        return view("solarmap.index");
    }
    public function planets(Star $star, Planet $planets){
        $sun = $star::find(1);
        $star_planets = $planets::select()->where("star_id", $sun->id)->get();
        //dd($star_planets);
        return view('solarmap.planets', compact('sun', 'star_planets'));
    }
    public function showPlanet($planetId){
        //dd($planetId);
        $planet = Planet::find($planetId);
        //dd($planet);
        return view('solarmap.planet', compact('planet'));
    }
    public function about(){
        return view('solarmap.about');
    }
}
