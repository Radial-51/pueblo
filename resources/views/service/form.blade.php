<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="name" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $service?->name) }}" id="name" placeholder="Nombre del Servicio">
            {!! $errors->first('name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="description" class="form-label">{{ __('Descripción') }}</label>
            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('description', $service?->description) }}" id="description" placeholder="Descripción">
            {!! $errors->first('description', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="status" class="form-label">{{ __('Estado') }}</label>
            <input type="text" name="status" class="form-control @error('status') is-invalid @enderror" value="{{ old('status', $service?->status) }}" id="status" placeholder="Estado">
            {!! $errors->first('status', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="photo" class="form-label">{{ __('Foto') }}</label>
            <input type="text" name="photo" class="form-control @error('photo') is-invalid @enderror" value="{{ old('photo', $service?->photo) }}" id="photo" placeholder="Foto">
            {!! $errors->first('photo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="discount_percentage" class="form-label">{{ __('Discount Percentage') }}</label>
            <input type="text" name="discount_percentage" class="form-control @error('discount_percentage') is-invalid @enderror" value="{{ old('discount_percentage', $service?->discount_percentage) }}" id="discount_percentage" placeholder="Porcentaje de Descuento">
            {!! $errors->first('discount_percentage', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="date_one" class="form-label">{{ __('Inicio Dinámica') }}</label>
            <input type="text" name="date_one" class="form-control @error('date_one') is-invalid @enderror" value="{{ old('date_one', $service?->date_one) }}" id="date_one" placeholder="Inicio Dinámica">
            {!! $errors->first('date_one', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="date_two" class="form-label">{{ __('Fin Dinámica') }}</label>
            <input type="text" name="date_two" class="form-control @error('date_two') is-invalid @enderror" value="{{ old('date_two', $service?->date_two) }}" id="date_two" placeholder="Fin Dinámica">
            {!! $errors->first('date_two', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="reason" class="form-label">{{ __('Razón') }}</label>
            <input type="text" name="reason" class="form-control @error('reason') is-invalid @enderror" value="{{ old('reason', $service?->reason) }}" id="reason" placeholder="Razón">
            {!! $errors->first('reason', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="function" class="form-label">{{ __('Función') }}</label>
            <input type="text" name="function" class="form-control @error('function') is-invalid @enderror" value="{{ old('function', $service?->function) }}" id="function" placeholder="Función">
            {!! $errors->first('function', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="complement" class="form-label">{{ __('Complemento') }}</label>
            <input type="text" name="complement" class="form-control @error('complement') is-invalid @enderror" value="{{ old('complement', $service?->complement) }}" id="complement" placeholder="Complemento">
            {!! $errors->first('complement', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="effects" class="form-label">{{ __('Posibles Efectos') }}</label>
            <input type="text" name="effects" class="form-control @error('effects') is-invalid @enderror" value="{{ old('effects', $service?->effects) }}" id="effects" placeholder="Posibles efectos">
            {!! $errors->first('effects', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="procces" class="form-label">{{ __('Proceso') }}</label>
            <input type="text" name="procces" class="form-control @error('procces') is-invalid @enderror" value="{{ old('procces', $service?->procces) }}" id="procces" placeholder="Proceso">
            {!! $errors->first('procces', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="goal" class="form-label">{{ __('Objetivo') }}</label>
            <input type="text" name="goal" class="form-control @error('goal') is-invalid @enderror" value="{{ old('goal', $service?->goal) }}" id="goal" placeholder="Objetivo">
            {!! $errors->first('goal', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="duration" class="form-label">{{ __('Duración') }}</label>
            <input type="text" name="duration" class="form-control @error('duration') is-invalid @enderror" value="{{ old('duration', $service?->duration) }}" id="duration" placeholder="Duración">
            {!! $errors->first('duration', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
</div>