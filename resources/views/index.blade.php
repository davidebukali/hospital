@extends('maindesign')


@section('index_page')
@include('hero')
<div class="page-section">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>

        @if($doctors->count() > 0)
        <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
            @foreach ($doctors as $doctor)
            <div class="item">
                <div class="card-doctor">
                    <div class="header">
                        <img src="{{ asset('doctor_images/'.$doctor->doctor_image) }}" alt="">
                        <div class="meta">
                            <a href="tel:{{ $doctor->doctor_phone }}"><span class="mai-call"></span></a>
                            <a href="#"><span class="mai-logo-whatsapp"></span></a>
                        </div>
                    </div>
                    <div class="body">
                        <p class="text-xl mb-0">{{ $doctor->doctor_name }}</p>
                        <span class="text-sm text-grey">{{ $doctor->doctor_speciality }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="text-center wow fadeInUp">
            <p class="text-grey">No doctors available at the moment. Please check back later.</p>
        </div>
        @endif
    </div>
</div>
@endsection