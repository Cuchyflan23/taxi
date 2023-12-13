<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\User;
Use App\Models\Funcionario;
use Illuminate\Support\Facades\DB;

class CreaTicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
     public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function creaticket(){

        //$id = auth()->user()->usuario;
        //$user = User::find(2);
        //$funcionario = $user->funcionario;
        $funcionario = auth()->user()->funcionario;
        //$test = auth()->user()->funcionario();
        //$resultados = DB::select('SELECT departamento, nombres FROM funcionarios JOIN users ON funcionarios.usuario_id = users.usuario WHERE funcionarios.usuario_id = ?', [$id]);

        //return $funcionario;

        return view('ticket_taxi.taxi', compact('funcionario'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
