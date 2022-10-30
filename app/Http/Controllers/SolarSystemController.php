<?php
 
namespace App\Http\Controllers;
 
use App\Models\SolarSystem;
use App\Http\Resources\SolarSystemResource;
use App\Http\Requests\SolarSystemRequest;

class SolarSystemController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        return new SolarSystemResource(SolarSystem::findOrFail($id));
    }

    public function findAll()
    {   
        return SolarSystemResource::collection(SolarSystem::all());
    }


    public function create( $galaxyId, SolarSystemRequest $request)
    {
        
        $solarSystem = new SolarSystem();
        $solarSystem->name = $request->input("name");
        $solarSystem->dimension = $request->input("dimension");
        $solarSystem->number_of_planets = $request->input("number_of_planets");
        $solarSystem->main_star = $request->input("main_star");
        $solarSystem->galaxies_id = $galaxyId;
        $solarSystem->save();

        return new SolarSystemResource($solarSystem);
    }

    public function destroy($id){
        
        SolarSystem::where('id', '=', $id)->delete();
        return json_encode(['data'=>['status' => 200, 'success' => true]]);

    }

    public function update(SolarSystemRequest $request, $id){
        
        $solarSystem = SolarSystem::find($id);
        $solarSystem->name = $request->input("name");
        $solarSystem->dimension = $request->input("dimension");
        $solarSystem->number_of_planets = $request->input("number_of_planets");
        $solarSystem->main_star = $request->input("main_star");
        $solarSystem->save();
        
        return new SolarSystemResource($solarSystem);
    }
}