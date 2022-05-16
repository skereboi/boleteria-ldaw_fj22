<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $events = Role::where('active', 1)->get()->toJson();
        return response($events, 200);
    }

     /**  GET ONE **/
    public function show($id)
    {
         $validate = ['active' => '1', 'id' => $id];
         $category = Role::where($validate)->get()->toJson();
         return response($category, 200);
    }

     /** POST **/
    public function store(Request $request)
    {
        //Control
        $affected = 0;
        //Parsear request a JSON
        $json = json_encode($request->all(),true);
        //Parsear JSON a PHP_Object
        $events = json_decode($json,true);
        /** foreach OBJ -> Querybuilder **/
        foreach ($events as $event)  {
            foreach ($event as $key => $value) {
                $insertArr[str_slug($key,'_')] = $value;
            }
            //Contador de lineas afectadas
            $affected+=Role::insert($insertArr);
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
        $storeData = Role::find($id);
        if ($storeData == NULL) {
            return response()
            ->json(['msg' => "Rol no disponible"], 400);
        }
        else {
            foreach ($data as $val)  {
                foreach ($val as $key => $value) {
                    $storeData[str_slug($key,'_')] = $value;
                }
            }
            if ($storeData->update()) {
                return response()
                ->json(['msg'  => "Rol modificado"], 201);
            }
         }
        
    }
    public function destroy($id)
    {
        
        $validate = ['active' => '1', 'id' => $id];
        $status = Role::where($validate)->update(['active' => 0]);
        if ($status) {
            return response()
            ->json(['msg' => "Rol eliminado",
            'rows affected' => $status], 202);
        }
        return response()
        ->json(['msg' => "Rol no encontrado",
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
