@extends('layouts.app')

@section('template_title')
    {{ $objeto->name ?? __('Show') . " " . __('Objeto') }}
@endsection

@section('content')
    <section class="content container-fluid mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Objeto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('objetos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $objeto->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Entorno:</strong>
                                    {{ $objeto->entorno->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Dimensiones:</strong>
                                    {{ $objeto->dimensiones }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Posicion:</strong>
                                    {{ $objeto->posicion }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Color:</strong>
                                    {{ $objeto->color }}
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
