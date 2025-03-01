@extends('layouts.app')

@section('template_title')
    Entornos
@endsection

@section('content')
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-sm-12">
                <div class="card border-danger">
                    <div class="card-header bg-danger">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Entornos') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('entornos.create') }}" class="btn btn-outline-light btn-sm float-right"  data-placement="left">
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
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr class="table-danger border-3 border-dark">
                                        <th>No</th>

									<th >Categoria</th>
									<th >Nombre</th>
									<th >Musica</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($entornos as $entorno)
                                        <tr class="table-danger border-3 border-dark">
                                            <td>{{ ++$i }}</td>

										<td >{{ $entorno->categoria->nombre }}</td>
										<td >{{ $entorno->nombre }}</td>
										<td >{{ $entorno->musica }}</td>

                                            <td>
                                                <form action="{{ route('entornos.destroy', $entorno->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('entornos.show', $entorno->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('entornos.edit', $entorno->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $entornos->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
