@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Objeto
@endsection

@section('content')
    <section class="content container-fluid mt-4">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Objeto</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('objetos.update', $objeto->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('objeto.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
