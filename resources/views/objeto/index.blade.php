@extends('layouts.app')

@section('template_title')
    Objetos
@endsection

@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-sm-12">
                <div class="card border-primary">
                    <div class="card-header bg-primary">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Objetos') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('objetos.create') }}" class="btn btn-outline-light btn-sm float-right"
                                    data-placement="left">
                                    {{ __('Create New') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="thead">
                                    <tr class="table-primary">
                                        <th>No</th>

                                        <th>Nombre</th>
                                        <th>Entorno</th>
                                        <th>Dimensiones</th>
                                        <th>Posicion</th>
                                        <th>Color</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($objetos as $objeto)
                                        <tr class="table-info">
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $objeto->nombre }}</td>
                                            <td>{{ $objeto->entorno->nombre }}</td>
                                            <td>{{ $objeto->dimensiones }}</td>
                                            <td>{{ $objeto->posicion }}</td>
                                            <td>{{ $objeto->color }}</td>

                                            <td>
                                                <form action="{{ route('objetos.destroy', $objeto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary "
                                                        href="{{ route('objetos.show', $objeto->id) }}"><i
                                                            class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('objetos.edit', $objeto->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i
                                                            class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $objetos->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
