<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class _TestController extends Controller
{
    public function testConnect()
    {
        return response()
            ->json(['database_name' => DB::connection() -> getDatabaseName(),'csrf_token' =>  csrf_token()], 202);
    }   
}
