@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Categoria
@endsection

@section('content')
    <section class="content container-fluid mt-4">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Categoria</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('categorias.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('categoria.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
