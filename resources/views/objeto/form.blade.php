<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror"
                value="{{ old('nombre', $objeto?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="entorno_id" class="form-label">{{ __('Entorno Id') }}</label>
            {{-- <input type="text" name="entorno_id" class="form-control @error('entorno_id') is-invalid @enderror" value="{{ old('entorno_id', $objeto?->entorno_id) }}" id="entorno_id" placeholder="Entorno Id">
            {!! $errors->first('entorno_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!} --}}
            {{ Form::select('entorno_id', $entorno, $objeto->entorno_id, ['class' => 'form-control' . ($errors->has('entorno_id') ? ' is-invalid' : ''), 'placeholder' => 'Entorno Id']) }}
            {!! $errors->first('entorno_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="dimensiones" class="form-label">{{ __('Dimensiones') }}</label>
            <input type="number" name="dimensiones" class="form-control @error('dimensiones') is-invalid @enderror"
                value="{{ old('dimensiones', $objeto?->dimensiones) }}" id="dimensiones" placeholder="Dimensiones" min="1" step="1">
            {!! $errors->first('dimensiones', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="posicion" class="form-label">{{ __('Posicion') }}</label>
            <input type="number" name="posicion" class="form-control @error('posicion') is-invalid @enderror"
                value="{{ old('posicion', $objeto?->posicion) }}" id="posicion" placeholder="Posicion" min="1" step="1">
            {!! $errors->first('posicion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="color" class="form-label">{{ __('Color') }}</label>
            <input type="text" name="color" class="form-control @error('color') is-invalid @enderror"
                value="{{ old('color', $objeto?->color) }}" id="color" placeholder="Color">
            {!! $errors->first('color', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
