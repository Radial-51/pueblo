@extends('layouts.app')

@section('template_title')
    {{ $appointment->name ?? __('Show') . " " . __('Appointment') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Appointment</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('appointments.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>First Name:</strong>
                            {{ $appointment->first_name }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Last Name Father:</strong>
                            {{ $appointment->last_name_father }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Last Name Mother:</strong>
                            {{ $appointment->last_name_mother }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Address:</strong>
                            {{ $appointment->address }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Phone:</strong>
                            {{ $appointment->phone }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Family Phone:</strong>
                            {{ $appointment->family_phone }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Consultation Reason:</strong>
                            {{ $appointment->consultation_reason }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Age:</strong>
                            {{ $appointment->age }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Consulting Room Id:</strong>
                            {{ $appointment->consulting_room_id }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Service:</strong>
                            {{ $appointment->service }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Doctor:</strong>
                            {{ $appointment->doctor }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Appointment Date:</strong>
                            {{ $appointment->appointment_date }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Appointment Time:</strong>
                            {{ $appointment->appointment_time }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Sex:</strong>
                            {{ $appointment->sex }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Pathology:</strong>
                            {{ $appointment->pathology }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Invoice:</strong>
                            {{ $appointment->invoice }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
