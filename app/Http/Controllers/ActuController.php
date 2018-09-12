<?php

namespace App\Http\Controllers;

use App\Actualite;
use App\Http\Controllers\ActuController;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Auth;



class ActuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $actualites = Actualite::orderBy('id', 'desc')->get();

        return view('actualites.index', ['actualites' => $actualites]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actualites.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'description' => 'required|string|min:30',
        ]);
        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        $actualite = new Actualite;

        $actualite->description = $request->description;
        $actualite->user_id = Auth::id();

        $actualite->save();

        return redirect()->route('actualites.show', [$actualite->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function show(Actualite $actualite)
    {
       return view('actualites.show', ['actualite'=> $actualite]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function edit(Actualite $actualite)
    {
       $this->authorize('updateAndDelete', $actualite);
       return view('actualites.edit', ['actualite' => $actualite]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actualite $actualite)
    {
        $this->authorize('updateAndDelete', $actualite);
        $actualite->actualite = $request->actualite;
        $actualite->save();
        return redirect()->route('actualites.show', $actualite->id)->withStatus('Actualité mise à jour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actualite $actualite)
    {
        $this->authorize('updateAndDelete', $actualite);

        $actualite->delete();

        return redirect()->route('actualites.index');
    }
}
