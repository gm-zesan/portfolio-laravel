@extends('layout.app')

@section('title')
    {{ $project['title'] }}
@endsection

@section('content')
    <main class="content">
        <section id="hero" class="breadcrumb-section section-bg">
            <div class="breadcrumb-shape-top-left"></div>
            <div class="breadcrumb-shape-bottom-right"></div>
            <div class="breadcrumb-box">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content text-center">
                                <h2 class="title">{{ $project['title'] }}</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb breadcrumb-link">
                                        <li class="breadcrumb-item">
                                            <a href="{{ route('home') }}">Home</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="{{ route('projects') }}">Projects</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            {{ $project['title'] }}
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Project Details Section -->
        <section>
            <div class="container">
                <h1 class="text-center mb-5">Project Details</h1>

                <div class="row">
                    <div class="col-md-4">
                        <div class="testimonial mx-auto">
                            <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab">
                            <h2>{{ $project['title'] }}</h2>
                            <h4>{{ $project['subtitle'] }}</h4>
                            <p style="color: #FFD15C; fontWeight: bold">
                                {{ $project['label'] }}
                            </p>
                            
                            <ul style="margin-left: 20px">
                                @foreach ($project['technologies'] as $technology)
                                    <li>{{ $technology }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="black-box mt-5 p-5">
                    <h2 class="mb-5 text-center sub-title-kn" style="">
                        All Details
                    </h2>
                    <p>{{ $project['description'] }}</p>
                    <div class="row justify-content-between align-items-center">
                        <div class="col-sm-6">
                            <h4>Feature of this project :</h4>
                            <ul style="margin-left: 20px">
                                @foreach ($project['features'] as $feature)
                                    <li>{{ $feature }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <h4>For this project I use :</h4>
                            <ul style="margin-left: 20px">
                                @foreach ($project['technologies'] as $technology)
                                    <li>{{ $technology }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="spacer"></div>
        </section>

        <div class="spacer" data-height="96" style="height: 96px;"></div>
    </main>
@endsection
