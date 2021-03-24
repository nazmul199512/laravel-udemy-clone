@extends('layouts.app')

@section('content')

    <section class="course-carousel-area">
        <div class="container-lg">
            <div class="row">
                <div class="col">
                    <center><h2 class="course-carousel-title">Courses</h2></center>

                    <div class="course-carousel">
                        @foreach($course as $cor)
                            <a href="{{ route('course_detail', $cor) }}">
                            <div class="course-box-wrap">

                                    <div class="course-box">
                                        <div class="course-image">
                                            <img src="" alt="" class="img-fluid">
                                        </div>
                                        <div class="course-details">
                                            <h5 class="title">{{ $cor->title }}</h5>
                                            <div class="rating">
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star filled"></i>
                                                <i class="fas fa-star"></i>
                                                <span class="d-inline-block average-rating">5</span>
                                            </div>
                                            <p class="price text-right">
                                                <small>
                                                    $200
                                                </small>
                                                $100
                                            </p>
                                        </div>
                                    </div>

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
