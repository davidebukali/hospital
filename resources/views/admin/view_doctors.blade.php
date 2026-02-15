@extends('admin.maindesign')
@section('view_doctors')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h4>Doctors List</h4>
            <div class="table-responsive">
                <table class="table table-striped" style="color: white;">
                    <thead>
                        <tr>
                            <th> Doctor Name </th>
                            <th> Doctor Phone </th>
                            <th> Doctor Speciality </th>
                            <th> Room Number </th>
                            <th> Doctor Image </th>
                            <th> Action </th>
                        </tr>
                    </thead>
                    <tbody style="color: white;">
                        @foreach($doctors as $doctor)
                        <tr>
                            <td> {{ $doctor->doctor_name }} </td>
                            <td> {{ $doctor->doctor_phone }} </td>
                            <td> {{ $doctor->doctor_speciality }} </td>
                            <td> {{ $doctor->room_number }} </td>
                            <td> <img src="{{ asset('doctor_images/' . $doctor->doctor_image) }}" alt="">
                            </td>
                            <td>
                                <a href="{{ route('edit_doctor', $doctor->id) }}" class="btn btn-primary">Edit</a>
                                <a href="{{ route('delete_doctor', $doctor->id) }}" class="btn btn-danger"
                                    onclick="return confirm('Are you sure?')">Delete</a>
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