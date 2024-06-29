@extends('layouts.app')

@section('template_title')
    Appointment
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Appointment') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('appointments.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                    <tr>
                                        <th>No</th>
                                        
										<th>First Name</th>
										<th>Last Name Father</th>
										<th>Last Name Mother</th>
										<th>Address</th>
										<th>Phone</th>
										<th>Family Phone</th>
										<th>Consultation Reason</th>
										<th>Age</th>
										<th>Consulting Room Id</th>
										<th>Service</th>
										<th>Doctor</th>
										<th>Appointment Date</th>
										<th>Appointment Time</th>
										<th>Sex</th>
										<th>Pathology</th>
										<th>Invoice</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($appointments as $appointment)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $appointment->first_name }}</td>
											<td>{{ $appointment->last_name_father }}</td>
											<td>{{ $appointment->last_name_mother }}</td>
											<td>{{ $appointment->address }}</td>
											<td>{{ $appointment->phone }}</td>
											<td>{{ $appointment->family_phone }}</td>
											<td>{{ $appointment->consultation_reason }}</td>
											<td>{{ $appointment->age }}</td>
											<td>{{ $appointment->consulting_room_id }}</td>
											<td>{{ $appointment->service }}</td>
											<td>{{ $appointment->doctor }}</td>
											<td>{{ $appointment->appointment_date }}</td>
											<td>{{ $appointment->appointment_time }}</td>
											<td>{{ $appointment->sex }}</td>
											<td>{{ $appointment->pathology }}</td>
											<td>{{ $appointment->invoice }}</td>

                                            <td>
                                                <form action="{{ route('appointments.destroy',$appointment->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('appointments.show',$appointment->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('appointments.edit',$appointment->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $appointments->links() !!}
            </div>
        </div>
    </div>
@endsection
