@extends('admin.maindesign')

@section('add_doctors')
<div class="container">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
</div>
    <div class="row">
        <div class="col-md-8 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Add New Doctor</h4>
                    <p class="card-description">Fill in the doctor's information</p>
                    <form action="{{ route('post_doctors') }}" method="post" enctype="multipart/form-data" class="forms-sample">
                        @csrf
                        <div class="form-group">
                            <label for="doctor_name">Doctor Name</label>
                            <input type="text" class="form-control" name="doctor_name" id="doctor_name" placeholder="Enter doctor's full name" required>
                        </div>
                        <div class="form-group">
                            <label for="doctor_phone">Doctor Phone</label>
                            <input type="text" class="form-control" name="doctor_phone" id="doctor_phone" placeholder="Enter phone number" required>
                        </div>
                        <div class="form-group">
                            <label for="doctor_speciality">Doctor Speciality</label>
                            <select class="form-control" name="doctor_speciality" id="doctor_speciality" required>
                                <option value="">Select Speciality</option>
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
                            <input type="text" class="form-control" name="room_number" id="room_number" placeholder="Enter room number" required>
                        </div>
                        <div class="form-group">
                            <label for="doctor_image">Doctor Image</label>
                            <input type="file" class="form-control" name="doctor_image" id="doctor_image" accept="image/*">
                            <small class="form-text text-muted">Upload a professional photo of the doctor</small>
                        </div>
                        <button type="submit" class="btn btn-primary me-2">Add Doctor</button>
                        <button type="reset" class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection