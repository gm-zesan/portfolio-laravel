@extends('layout.app')

@section('title')
    Experiences
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
                                <h2 class="title">Contact</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb breadcrumb-link">
                                        <li class="breadcrumb-item">
                                            <a href="{{ route('home') }}">Home</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            Contact
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="me">
            <div class="row">
                <div class="col-12 col-md-4 col-sm-6 mx-auto">
                    <div>
                        <img src="{{ asset('images/avatar.jpg') }}" alt="zesan" style="height: 150px; border-radius: 50%" />
                    </div>
                    <h2 class="mt-3">G.M. Zesan</h2>
                    <h5>gmzesan7767@gmail.com</h5>
                    <div class="gap-5 mt-3 icons cont-icon w-lg-75 d-flex">
                        <a class="card-icon" href="https://www.facebook.com/Zesan.xyz/" target="_blank" rel="noreferrer">
                            <FacebookRoundedIcon />
                        </a>
                        <a class="card-icon" href="https://www.linkedin.com/in/gm-zesan-5a2a16184/" target="_blank"
                            rel="noreferrer">
                            <LinkedInIcon />
                        </a>
                        <a class="card-icon" href="/">
                            <WhatsAppIcon />
                        </a>
                        <a class="card-icon" href="https://github.com/GM-Zesan" target="_blank" rel="noreferrer">
                            <GitHubIcon />
                        </a>
                    </div>
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
