<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use App\Http\Resources\UserResource;
use Users;

class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        return new UserResource(User::findOrFail($id));

    }
   
    public function findAll()
    {   
        return UserResource::collection(User::all());
    }

    public function create(CreateUserRequest $request)
    {
    
        $user = new User;
        $user->name = $request->input("name");
        $user->email = $request->input("email");
        $user->password = $request->input("password");
        $user->save(); 
       
        return new UserResource($user);
    }

    public function destroy($id){
        
        User::where('id', '=', $id)->delete();
        return json_encode(['data'=>['status' => 200, 'success' => true]]);

    }

    
    public function update(CreateUserRequest $request, $id){
        
        $user = User::find($id);
        $user->name = $request->input("name");
        $user->email = $request->input("email");
        $user->password = $request->input("password");
        $user->save();
        
        return new UserResource($user);
    }
}