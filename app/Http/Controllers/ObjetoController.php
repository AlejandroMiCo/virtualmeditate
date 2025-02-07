<?php

namespace App\Http\Controllers;

use App\Models\Objeto;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ObjetoRequest;
use App\Models\Entorno;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ObjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $objetos = Objeto::paginate();

        return view('objeto.index', compact('objetos'))
            ->with('i', ($request->input('page', 1) - 1) * $objetos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $objeto = new Objeto();
        $entorno = Entorno::pluck('nombre', 'id');
        return view('objeto.create', compact('objeto', 'entorno'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ObjetoRequest $request): RedirectResponse
    {
        Objeto::create($request->validated());

        return Redirect::route('objetos.index')
            ->with('success', 'Objeto created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $objeto = Objeto::find($id);

        return view('objeto.show', compact('objeto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $objeto = Objeto::find($id);
        $entorno = Entorno::pluck('nombre', 'id');
        return view('objeto.edit', compact('objeto', 'entorno'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ObjetoRequest $request, Objeto $objeto): RedirectResponse
    {
        $objeto->update($request->validated());

        return Redirect::route('objetos.index')
            ->with('success', 'Objeto updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Objeto::find($id)->delete();

        return Redirect::route('objetos.index')
            ->with('success', 'Objeto deleted successfully');
    }
}
