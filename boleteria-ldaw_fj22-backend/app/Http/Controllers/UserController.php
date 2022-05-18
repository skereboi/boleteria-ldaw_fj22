<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**  GET ALL **/
    public function index()
    {
        $users = User::where('active', 1)->get()->toJson();
        return response($users, 200);
    }

     /**  GET ONE **/
    public function show($id)
    {
         $validate = ['active' => '1', 'id' => $id];
         $category = User::where($validate)->get()->toJson();
         return response($category, 200);
    }

    /** GET PREFERENCES */
    public function getPreferences($id)
    {
        if (!(User::find($id))) {
            return response()->json(['msg' => "Usuario no encontrado"], 400);
        }
        $preferences = User::find($id)->preferences()->get()->toJson();
        if ($preferences == "[]") {
            return response()->json(['msg' => "No existe la informacion solicitada"], 400);
         }
        return response($preferences, 200);
    }

     /** GET EVENTS */
     public function getEvents($id)
     {
         if (!(User::find($id))) {
             return response()->json(['msg' => "Usaurio no encontrado"], 400);
         }
         $preferences = User::find($id)->eventsOrganized()->get()->toJson();
         if ($preferences == "[]") {
             return response()->json(['msg' => "No existe la informacion solicitada"], 400);
          }
         return response($preferences, 200);
     }

     /** POST **/
    public function store(Request $request)
    {
        //Control
        $affected = 0;
        //Parsear request a JSON
        $json = json_encode($request->all(),true);
        //Parsear JSON a PHP_Object
        $users = json_decode($json,true);
        /** foreach OBJ -> Querybuilder **/
        foreach ($users as $user)  {
            foreach ($user as $key => $value) {
                $insertArr[str_slug($key,'_')] = $value;
            }
            //Contador de lineas afectadas
            $affected+=User::insert($insertArr);
        }
        // Response
        return response()
        ->json(['rows affected' => $affected], 201);
    }
    
    /** PUT - Update **/
    public function update(Request $request, $id)
    {
        //Parsear request a JSON
        $json = json_encode($request->all(),true);
        // JSON Array -> PHP OBJ 
        $data = json_decode($json,true);
        $storeData = User::find($id);
        if ($storeData == NULL) {
            return response()
            ->json(['msg' => "Usuario no disponible"], 400);
        }
        else {
            foreach ($data as $val)  {
                foreach ($val as $key => $value) {
                    $storeData[str_slug($key,'_')] = $value;
                }
            }
            if ($storeData->update()) {
                return response()
                ->json(['msg'  => "Usuario modificado"], 201);
            }
         }
        
    }
    public function destroy($id)
    {
        
        $validate = ['active' => '1', 'id' => $id];
        $status = User::where($validate)->update(['active' => 0]);
        if ($status) {
            return response()
            ->json(['msg' => "Usuario eliminado",
            'rows affected' => $status], 202);
        }
        return response()
        ->json(['msg' => "Usuario no encontrado",
        'rows affected' => $status], 400);
    }
    
     /**  CREATE VIEW -> POST **/
    public function create()
    {
    }

    /**  EDIT VIEW -> PUT **/
    public function edit($id)
    {
        //
    }
}
