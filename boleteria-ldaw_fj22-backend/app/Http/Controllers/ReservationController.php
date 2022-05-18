<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\User;
use App\Models\Event;

class ReservationController extends Controller
{
    /**  GET ALL **/
    public function index()
    {
        return response(Reservation::where('active', 1)->get()->toJson(), 200);
    }

     /**  GET ONE **/
     public function getReservation($event_id, $user_id)
     {
         $validate = ['active' => '1', 'event_id' => $event_id,  'user_id' => $user_id];
         $reservation = Reservation::where($validate)->get('qr_code')->toJson();
         if ($reservation == "[]") {
            return response()->json(['msg' => "No existe esta la reservacion solicitada"], 400);
         }
        return response($reservation,200);
         
     }
     /** POST **/
    public function store(Request $request)
    {
        
        //Control
        $affected = 0;
        //Parsear request a JSON
        $json = json_encode($request->all(),true);
        //Parsear JSON a PHP_Object
        $reservations = json_decode($json,true);
        /** foreach OBJ -> Querybuilder **/
        foreach ($reservations as $reservation)  {
            foreach ($reservation as $key => $value) {
                $insertArr[str_slug($key,'_')] = $value;
                
                if ($key=="event_id") {
                    if (!(Event::find($value))) {
                        return response()->json(['msg' => "Evento no encontrado"], 400);
                    }
                }
                if ($key=="user_id") { 
                    if (!(User::find($value))) {
                        return response()->json(['msg' => "Usuario no encontrado"], 400);
                    }
                }
            }
            //Contador de lineas afectadas
            $affected+=Reservation::insert($insertArr);
        }
        // Response
        return response()->json(['msg' => "Reservacion realizada",'rows affected' => $affected], 400);
    }
    
    /** PUT - Update **/
    public function editReservation(Request $request, $event_id, $user_id)
    {
        //Parsear request a JSON
        $json = json_encode($request->all(),true);
        // JSON Array -> PHP OBJ => $name
        $qr_code = json_decode($json,true)[0]["qr_code"];
        // Mini Schema
        $validate = ['active' => '1', 'event_id' => $event_id,  'user_id' => $user_id];
        $status = Reservation::where($validate)->update(['qr_code' => $qr_code]);
        if ($status) {
            return response()->json(['msg' => "Reservacion realizada",'rows affected' => $status], 202);
        }
        return response()
        ->json(['msg' => "Reservacion no encontrada"], 400);
        
    }
    public function destroyReservation($event_id, $user_id)
    {
        
        $validate = ['active' => '1', 'event_id' => $event_id,  'user_id' => $user_id];
        $status = Reservation::where($validate)->update(['active' => 0]);
        if ($status) {
            return response()
            ->json(['msg' => "Usuario Eliminado",
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
