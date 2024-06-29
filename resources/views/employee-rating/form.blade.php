<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="service_employee_id" class="form-label">{{ __('Service Employee Id') }}</label>
            <input type="text" name="service_employee_id" class="form-control @error('service_employee_id') is-invalid @enderror" value="{{ old('service_employee_id', $employeeRating?->service_employee_id) }}" id="service_employee_id" placeholder="Service Employee Id">
            {!! $errors->first('service_employee_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="counter_employee_id" class="form-label">{{ __('Counter Employee Id') }}</label>
            <input type="text" name="counter_employee_id" class="form-control @error('counter_employee_id') is-invalid @enderror" value="{{ old('counter_employee_id', $employeeRating?->counter_employee_id) }}" id="counter_employee_id" placeholder="Counter Employee Id">
            {!! $errors->first('counter_employee_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="customer_id" class="form-label">{{ __('Customer Id') }}</label>
            <input type="text" name="customer_id" class="form-control @error('customer_id') is-invalid @enderror" value="{{ old('customer_id', $employeeRating?->customer_id) }}" id="customer_id" placeholder="Customer Id">
            {!! $errors->first('customer_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="service_rating" class="form-label">{{ __('Service Rating') }}</label>
            <input type="text" name="service_rating" class="form-control @error('service_rating') is-invalid @enderror" value="{{ old('service_rating', $employeeRating?->service_rating) }}" id="service_rating" placeholder="Service Rating">
            {!! $errors->first('service_rating', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="counter_rating" class="form-label">{{ __('Counter Rating') }}</label>
            <input type="text" name="counter_rating" class="form-control @error('counter_rating') is-invalid @enderror" value="{{ old('counter_rating', $employeeRating?->counter_rating) }}" id="counter_rating" placeholder="Counter Rating">
            {!! $errors->first('counter_rating', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="service_feedback" class="form-label">{{ __('Service Feedback') }}</label>
            <input type="text" name="service_feedback" class="form-control @error('service_feedback') is-invalid @enderror" value="{{ old('service_feedback', $employeeRating?->service_feedback) }}" id="service_feedback" placeholder="Service Feedback">
            {!! $errors->first('service_feedback', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="counter_feedback" class="form-label">{{ __('Counter Feedback') }}</label>
            <input type="text" name="counter_feedback" class="form-control @error('counter_feedback') is-invalid @enderror" value="{{ old('counter_feedback', $employeeRating?->counter_feedback) }}" id="counter_feedback" placeholder="Counter Feedback">
            {!! $errors->first('counter_feedback', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>