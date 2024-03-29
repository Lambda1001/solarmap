<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use App\Models\Planet;
use App\Models\Star;

use function Laravel\Prompts\alert;

class PlanetController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        return view('solarsystem.solarsystem');
    }
    public function specifyPlanet($starId){
        $star = Star::find($starId);
        return view('solarsystem.specifyplanet', compact('star'));
    }
    public function showPlanet($planetId){
        $planet = Planet::select()->where('planetId', $planetId)->first();
        //dd($planet);
        return view('solarsystem.viewplanet', compact('planet'));
    }
    public function createPlanet($starId, Request $request){
        $planet = $request->validate([
            'planetName'=> 'required', 'string',
        ]);
        $planetName = $planet['planetName'];
        $data = [];
        // $API_response = Http::get('https://api.le-systeme-solaire.net/rest/bodies/'.$planetName);
        // if($API_response->successful()){
        //     $data = $API_response->json();
        //     //dd($data);
        // }
        // else{
        //     $data = [];
        // }
        return view('solarsystem.createplanet', compact('starId', 'data'));
    }
    public function storePlanet(Request $request, User $user){
        //dd($request->all());
        $data = $request->validate([
            'planetId'=>'required','string',
            'star_id'=>'required','numerical',
            'planetName'=>'required | string',
            'bodyType'=>'required | string',
            'planetSemimajorAxis'=>'required | numeric',
            'planetPerihelion'=>'required | numeric',
            'planetAphelion'=>'required | numeric',
            'planetMeanRadius'=>'required | numeric',
            'massValue'=>'required | numeric',
            'massExponent'=>'required | numeric',
            'planetGravity'=>'required | numeric',
            'planetDescription'=>'required | string',
            'planetImage'=>'required | image',
        ]);
        //dd($data);
        $imagePath = $data['planetImage']->store('uploads','public');
        //dd($imagePath);
        $planet = new Planet([
            'planetId'=>$data['planetId'],
            'star_id'=>$data['star_id'],
            'planetName'=>$data['planetName'],
            'bodyType'=>$data['bodyType'],
            'planetSemimajorAxis'=>$data['planetSemimajorAxis'],
            'planetPerihelion'=>$data['planetPerihelion'],
            'planetAphelion'=>$data['planetAphelion'],
            'planetMeanRadius'=>$data['planetMeanRadius'],
            'massValue'=>$data['massValue'],
            'massExponent'=>$data['massExponent'],
            'planetGravity'=>$data['planetGravity'],
            'planetDescription'=>$data['planetDescription'],
            'planetImage'=> $imagePath,
        ]);
        //dd($planet['planetImage']);
        auth()->$user->$planet->save();

        return redirect('solarsystem');
    }

    public function updatePlanet($planetId){
        $planet = Planet::select()->where('planetId', $planetId)->first();
        return view('solarsystem.updateplanet', compact('planet'));
    }

    public function editPlanet($id, Request $request,User $user){
        $planet = Planet::find($id);
        //dd($planet);
        $data = $request->validate([
            'planetId'=>'required','string',
            'star_id'=>'required','numerical',
            'planetName'=>'required | string',
            'bodyType'=>'required | string',
            'planetSemimajorAxis'=>'required | numeric',
            'planetPerihelion'=>'required | numeric',
            'planetAphelion'=>'required | numeric',
            'planetMeanRadius'=>'required | numeric',
            'massValue'=>'required | numeric',
            'massExponent'=>'required | numeric',
            'planetGravity'=>'required | numeric',
            'planetDescription'=>'required | string',
            'planetImage'=>'required | image ',
        ]);
        $planetImage = $data['planetImage']->store('uploads','public');
        //dd($data['planetImage'] ?? $planet['planetImage']);
        $planet->update([
            'planetId'=>$data['planetId'],
            'star_id'=>$data['star_id'],
            'planetName'=>$data['planetName'],
            'bodyType'=>$data['bodyType'],
            'planetSemimajorAxis'=>$data['planetSemimajorAxis'],
            'planetPerihelion'=>$data['planetPerihelion'],
            'planetAphelion'=>$data['planetAphelion'],
            'planetMeanRadius'=>$data['planetMeanRadius'],
            'massValue'=>$data['massValue'],
            'massExponent'=>$data['massExponent'],
            'planetGravity'=>$data['planetGravity'],
            'planetDescription'=>$data['planetDescription'],
            'planetImage'=> $planetImage,
        ]);

        return redirect('solarsystem')->with(alert('Planet Data updated successfully'));
    }
}