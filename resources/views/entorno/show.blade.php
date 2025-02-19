@extends('layouts.app')

@section('template_title')
    {{ $entorno->name ?? __('Show') . " " . __('Entorno') }}
@endsection

@section('content')
    <section class="content container-fluid mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Entorno</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('entornos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                                <div class="form-group mb-2 mb20">
                                    <strong>Categoria:</strong>
                                    {{ $entorno->categoria->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nombre:</strong>
                                    {{ $entorno->nombre }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Musica:</strong>
                                    {{ $entorno->musica }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
