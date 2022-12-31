<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ClientController extends Controller
{
    public function index()
    {
        return view('client');
    }

    public function getClients()
    {
        $clients = Client::all();
        return response()->json([
            'clients' => $clients,
        ]);
    }
}
