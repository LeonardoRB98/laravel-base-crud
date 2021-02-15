<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beer;
class BeerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // predo tutti i dati della classe Beer 'all()' e li salvo su una variabile 
       $beers = Beer::all();
    //    dd($beers);
    //resurces->views->beers->index.blade.php
        return view('beers.index', ['beers'=>$beers]); // compose('beers')
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $validatedData = $request->validate([
            'nome' => 'required',
            'tipo' => 'required',
            'regione' => 'required',
            'gradazione_alcolica' => 'required',
            'descrizione' => 'required',
        ]);
        // dentro request ricevo i dati del form tramite metodo post
        $data=$request->all();
        // $data è un array tradizionale
        // dd($data);
        // creo una nuova instanza di Beer
        $beer = new Beer();
        // assegno all'atributo nome il valore di $data['nome'](stessivalori del dabase)
        $beer->nome=$data['nome'];
        $beer->tipo=$data['tipo'];
        $beer->paese=$data['paese'];
        $beer->regione=$data['regione'];
        $beer->gradazione_alcolica=$data['gradazione_alcolica'];
        $beer->descrizione=$data['descrizione'];
        
        // salva $beer nel database
        $beer->save();
        // accedo all'oggetto beer ordino per id in ordine discendente, 
        //predo il primo risultato
        $newBeer = Beer::orderBy('id', 'DESC')->first();
        //reindirizzo alla rotta beers/show passandogli come secondo paramaetro
        // l'ultimo oggetto inserito nel database
        return redirect()->route('beers.show', $newBeer);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //come primo argomento ho la classe e come secondo id 


    public function show(Beer $beer)
    {   
        //creo una variabile e gli assegno il primo id della classe Beer
        // $beer = Beer::find($id);
        // dd($beer);
        
        return view('beers.show', compact('beer'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Beer $beer)
    {
        return view('beers.edit', compact('beer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beer $beer)
    {   
        $data = $request->all();

        dd($data);
        // $data = $request->all();
        // dd($data);
        // $beer->update($data);
        // return redirect()->route('beers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beer $beer)
    {   
        dd($beer);
        $beer->delete();

        return redirect()->route('beers.index');
    }
}
