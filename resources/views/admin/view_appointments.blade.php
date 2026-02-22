@extends('admin.maindesign')
@section('view_appointments')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h4>Appointments</h4>
            <div class="table-responsive">
                <table class="table table-striped" style="color: white;">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Message</th>
                            <th>Speciality</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($appointments as $appointment)
                        <tr>
                            <td>{{ $appointment->id }}</td>
                            <td>{{ $appointment->full_name }}</td>
                            <td>{{ $appointment->email_address }}</td>
                            <td>{{ $appointment->number }}</td>
                            <td>{{ $appointment->message }}</td>
                            <td>{{ $appointment->speciality }}</td>
                            <td>{{ $appointment->submission_date }}</td>
                            <td>{{ $appointment->status }}</td>
                            <td>
                                yooo
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection