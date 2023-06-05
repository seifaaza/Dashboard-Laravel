<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Affectation;
use App\Models\Marchandise;
use App\Models\Porte;
use App\Models\Shift;



class MainController extends Controller
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
        $affectations = Affectation::all();
        return view('home', compact('affectations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $marchandises = Marchandise::all();
        $portes = Porte::all();
        $shifts = Shift::all();
        return view('add', compact('marchandises', 'portes', 'shifts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $affectation = new Affectation();
        $affectation -> navire = $request -> navire;
        $affectation -> n_visite = $request -> n_visite;
        $affectation -> shift_id = $request -> shift_id;
        $affectation -> porte_id = $request -> porte_id;
        $affectation -> marchandise_id = $request -> marchandise_id;
        $affectation -> grue = $request -> grue;
        $affectation -> tracteur = $request -> tracteur;
        $affectation -> chargeur = $request -> chargeur;
        $affectation -> elevateur = $request -> elevateur;
        $affectation -> save();
        return redirect('/');
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
