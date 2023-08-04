<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create()
    {
        return view('client.register');
    }

    /**
     * Display the list view.
     */
    public function list()
    {
        $clients = Client::get();
        return view('client.list', [
            'clients' => $clients,
        ]);
    }

    /**
     * Insert client's profile
     */
    public function store(Request $request)
    {
        Client::create($request->all());

        return redirect()->route('client.list')->with('msg', 'Cliente Cadastrado!');
    }

    /**
     * Display the client's edit form.
     */
    public function edit(Client $client)
    {
        return view('client.edit', [
            'client' => $client,
        ]);
    }

    /**
     * Update the client's information.
     */
    public function update(Request $request, Client $client)
    {
        $client->update($request->all());

        return redirect()->route('client.list')->with('msg', 'Cliente Atualizado!');
    }

    /**
     * Delete the client's account.
     */
    public function destroy(Client $client)
    {
        $client->delete();

        return redirect()->route('client.list')->with('msg', 'Cliente Deletado!');
    }
}
