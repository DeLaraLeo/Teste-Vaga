<?php
 
namespace App\Http\Controllers;
 
use App\Models\Planet;
use App\Http\Resources\PlanetResource;
use App\Http\Requests\PlanetRequest;


class PlanetController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        return new PlanetResource(Planet::findOrFail($id));
    }

    public function findAll()
    {   
        return PlanetResource::collection(Planet::all());
    }

    public function create( $galaxyId, $solarSystemId, PlanetRequest $request)
    {
        
        $planet = new Planet();
        $planet->name = $request->input("name");
        $planet->dimension = $request->input("dimension");
        $planet->number_of_moons = $request->input("number_of_moons");
        $planet->light_years_from_the_main_star = $request->input("light_years_from_the_main_star");
        $planet->solar_system_id= $solarSystemId;
        $planet->save();

        return new PlanetResource($planet);
    }

    public function destroy($id){
        
        Planet::where('id', '=', $id)->delete();
        return json_encode(['data'=>['status' => 200, 'success' => true]]);
    }

    public function update( $id, PlanetRequest $request){
        
    
        $planet = Planet::find($id);
        $planet->name = $request->input('name');
        $planet->dimension = $request->input('dimension');
        $planet->number_of_moons = $request->input('number_of_moons');
        $planet->light_years_from_the_main_star = $request->input('light_years_from_the_main_star');
        $planet->save();

        return new PlanetResource($planet);
    }
}