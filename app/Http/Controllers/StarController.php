<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Star;
use App\Models\Planet;

class StarController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    public function index(Star $stars){
        $stars = Star::all();
        return view('solarsystem.solarsystem', compact('stars'));
    }

    public function showPlanets($starId){
        $star = Star::find($starId);
        //dd($star);

        $planets = Planet::select('planetName', 'planetId')->where('star_id', $starId)->get();
        //dd($planets);

        return view('solarsystem.viewplanets', compact('star', 'planets'));
    }
    public function createStar(User $user){
        //auth()->user();
        return view("solarsystem.createstar");
    }

    public function storeStar(Request $request, User $user){
        //dd(request()->all());

        $data = $request->validate([
            'starId'=>['required','string',],
            'starName'=> ['required','string',],
            'bodyType'=>['required','string',],
            'starMeanRadius'=>['required','numeric',],
            'massValue'=>['required','numeric',],
            'massExponent'=>['required','numeric',],
            'starGravity'=>['required','numeric',],
        ]);
        //dd($data);
        $star = new Star([
            'starId'=>$data['starId'],
            'starName'=>$data['starName'],
            'bodyType'=>$data['bodyType'],
            'starMeanRadius'=>$data['starMeanRadius'],
            'massValue'=>$data['massValue'],
            'massExponent'=>$data['massExponent'],
            'starGravity'=>$data['starGravity'],
        ]);
        $star->save();

        return redirect('solarsystem');
    }
}
