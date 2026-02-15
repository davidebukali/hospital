@extends('admin.maindesign')
<base href="/">
@section('edit_doctor')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h4>Edit Doctor</h4>
            <p>Edit doctor's information</p>
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            <form action="{{ route('edit_doctor', $doctor->id) }}" method="post" enctype="multipart/form-data"
                class="forms-sample">
                @csrf
                <div class="form-group">
                    <label for="doctor_name">Doctor Name</label>
                    <input type="text" class="form-control" name="doctor_name" id="doctor_name"
                        value="{{ $doctor->doctor_name }}" required>
                </div>
                <div class="form-group">
                    <label for="doctor_phone">Doctor Phone</label>
                    <input type="text" class="form-control" name="doctor_phone" id="doctor_phone"
                        value="{{ $doctor->doctor_phone }}" required>
                </div>
                <div class="form-group">
                    <label for="doctor_speciality">Doctor Speciality</label>
                    <select class="form-control" name="doctor_speciality" id="doctor_speciality" required>
                        <option value="{{ $doctor->doctor_speciality }}">{{ $doctor->doctor_speciality }}
                        </option>
                        <option value="cardiology">Cardiology</option>
                        <option value="dermatology">Dermatology</option>
                        <option value="neurology">Neurology</option>
                        <option value="orthopedics">Orthopedics</option>
                        <option value="pediatrics">Pediatrics</option>
                        <option value="psychiatry">Psychiatry</option>
                        <option value="radiology">Radiology</option>
                        <option value="surgery">Surgery</option>
                        <option value="urology">Urology</option>
                        <option value="general">General Practice</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="room_number">Room Number</label>
                    <input type="text" class="form-control" name="room_number" id="room_number"
                        value="{{ $doctor->room_number }}" required>
                </div>
                <div class="form-group">
                    <label>Current Image</label>
                    <img height="100" width="100" src="doctor_images/{{ $doctor->doctor_image }}">
                </div>
                <div class="form-group">
                    <label for="doctor_image">Change Image</label>
                    <input type="file" class="form-control" name="doctor_image" id="doctor_image">
                </div>
                <button type="submit" class="btn btn-primary me-2">Update</button>
                <a href="{{ route('view_doctors') }}" class="btn btn-light">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection