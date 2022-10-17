<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'NIS' => 3103120207,
            'Nama' => 'Sarahil Anha',
            'Phone' => '089526399207',
            'Class' => 'XII RPL 6'
        ];
    }
}
