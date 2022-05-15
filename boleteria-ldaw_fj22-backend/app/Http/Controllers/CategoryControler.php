<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Http\Response;
//Importar el modelo de autores
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryControler extends Controller
{
    /**  GET ALL **/
    public function index()
    {
        $categories = Category::where('active', 1)->get()->toJson();
        return response($categories, 200);
    }

     /**  GET ONE **/
     public function show($id)
     {
         $validate = ['active' => '1', 'id' => $id];
         $category = Category::where($validate)->get()->toJson();
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
        $categories = json_decode($json,true);
        /** foreach OBJ -> Querybuilder **/
        foreach ($categories as $category)  {
            foreach ($category as $key => $value) {
                $insertArr[str_slug($key,'_')] = $value;
            }
            //Contador de lineas afectadas
            $affected+=Category::insert($insertArr);
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
        // JSON Array -> PHP OBJ => $name
        $name = json_decode($json,true)[0]["name"];
        // Mini Schema
        $validate = ['active' => '1', 'id' => $id];
        $status = Category::where($validate)->update(['name' => $name]);
        if ($status) {
            return response()
            ->json(['rows affected' => $status], 201);
        }
        return response()
        ->json(['msg' => "Usuario no encontrado"], 400);
        
    }
    public function destroy($id)
    {
        
        $validate = ['active' => '1', 'id' => $id];
        $status = Category::where($validate)->update(['active' => 0]);
        if ($status) {
            return response()
            ->json(['msg' => "Usuario Eliminado",
            'rows affected' => $status], 204);
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
