@extends('layout.app')

@section('title')
    Projects
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
                                <h2 class="title">Projects</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb breadcrumb-link">
                                        <li class="breadcrumb-item">
                                            <a href="{{ route('home') }}">Home</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            Projects
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <!-- section works -->
         <section id="works">
            <div class="container">
                <!-- section title -->
                <h2 class="section-title wow fadeInUp">Recent works</h2>
                <div class="spacer" data-height="60" style="height: 60px;"></div>
                <!-- portfolio filter (desktop) -->
                <ul class="portfolio-filter list-inline wow fadeInUp">
                    <li class="current list-inline-item" data-filter="*">Everything</li>
                    @foreach($labels as $label)
                        <li class="list-inline-item" data-filter=".{{ $label['label'] }}">{{ $label['label'] }}</li>
                    @endforeach
                </ul>
                <!-- portfolio filter (mobile) -->
                <div class="pf-filter-wrapper">
                    <select class="portfolio-filter-mobile">
                        <option value="*">Everything</option>
                        @foreach($labels as $label)
                            <option value="{{ $label['label'] }}">{{ $label['label'] }}</option>
                        @endforeach
                    </select>
                </div>
                <!-- portolio wrapper -->
                <div class="row portfolio-wrapper">
                    @foreach($projects as $project)
                        <div class="col-md-4 col-sm-6 grid-item creative {{ $project['label'] }}">
                            <a href="{{ route('project.show',['id'=>$project['id']]) }}">
                                <div class="portfolio-item rounded shadow-dark">
                                    <div class="details">
                                        <span class="term">
                                            @foreach ($project['technologies'] as $technology)
                                                {{ $technology }} |
                                            @endforeach
                                        </span>
                                        <h4 class="title">{{ $project['title'] }}</h4>
                                        <span class="more-button"><i class="icon-link"></i></span>
                                    </div>
                                    <div class="thumb">
                                        <img src="{{ asset($project['image']) }}" alt="Project-title" />
                                        <div class="mask"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                
            </div>
        </section>

        <section id="contact">
            <div class="container">
                <!-- section title -->
                <h2 class="section-title wow fadeInUp">Get In Touch</h2>
                <div class="spacer" data-height="60" style="height: 60px;"></div>
                <div class="row">
                    <div class="col-md-4">
                        <!-- contact info -->
                        <div class="contact-info">
                            <h3 class="wow fadeInUp">Let's talk about everything!</h3>
                            <p class="wow fadeInUp">Don't like forms? Send me an <a
                                    href="mailto:name@example.com">email</a>.</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <!-- Contact Form -->
                        <div id="form-messages"></div>
                        <form id="contact-form" class="contact-form mt-6" method="post"
                            action="http://sagormia.xyz/html/zesan/php/mailer.php">
                            <div class="row">
                                <div class="column col-md-6">
                                    <!-- Name input -->
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Your name" required="required">
                                    </div>
                                </div>
                                <div class="column col-md-6">
                                    <!-- Email input -->
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Email address" required="required">
                                    </div>
                                </div>
                                <div class="column col-md-12">
                                    <!-- Message textarea -->
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-control" rows="5" placeholder="Message"
                                            required="required"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="submit" id="submit" class="btn btn-default">Send Message</button>
                        </form>
                        <!-- Contact Form end -->
                    </div>
                </div>
            </div>
        </section>
        <div class="spacer" data-height="96" style="height: 96px"></div>

    </main>
@endsection