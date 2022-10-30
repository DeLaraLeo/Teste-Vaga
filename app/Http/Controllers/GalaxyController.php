<?php
 
namespace App\Http\Controllers;
 
use App\Models\Galaxy;
use App\Http\Resources\GalaxyResource;
use App\Http\Requests\GalaxyRequest;


class GalaxyController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        return new GalaxyResource(Galaxy::findOrFail($id));
        
    }


    public function findAll()
    {   
        return GalaxyResource::collection(Galaxy::all());
    }

    public function create(GalaxyRequest $request)
    {
        
        $galaxy = new Galaxy;
        $galaxy->name = $request->input("name");
        $galaxy->dimension = $request->input("dimension");
        $galaxy->number_of_solar_systems = $request->input("number_of_solar_systems");
        $galaxy->user_id= $request->input("userId");
        $galaxy->save();

        return new GalaxyResource($galaxy);
    }

    public function destroy($id){
        
        Galaxy::where('id', '=', $id)->delete();
        return json_encode(['data'=>['status' => 200, 'success' => true]]);
    }

    
    public function update(GalaxyRequest $request, $id){
        
        $galaxy = Galaxy::find($id);
        $galaxy->name = $request->input("name");
        $galaxy->dimension = $request->input("dimension");
        $galaxy->number_of_solar_systems = $request->input("number_of_solar_systems");
        $galaxy->save();

        return new GalaxyResource($galaxy);
    }
}