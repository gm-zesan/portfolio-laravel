@extends('layout.app')

@section('title')
    Home
@endsection

@section('content')
    <main class="content">
        <!-- section home -->
        <section id="home" class="home d-flex light align-items-center"
            style="background-image: url({{ asset('images/light_bg.png') }});">
            <div class="container">
                <!-- intro -->
                <div class="intro">
                    <p>Hi There I'm</p>
                    <!-- info -->
                    <h1 class="mb-2 mt-2">G.M Zesan</h1>
                    <span>I'm a <span class="text-rotating">Full Stack Web Developer, PHP / Laravel Developer, MERN Developer</span></span>
                    <!-- social icons -->
                    <ul class="social-icons light list-inline mb-0 mt-4">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-behance"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                    </ul>
                </div>
                <!-- scroll down mouse wheel -->
                <div class="scroll-down">
                    <a href="#about" class="mouse-wrapper">
                        <span>Scroll Down</span>
                        <span class="mouse">
                            <span class="wheel"></span>
                        </span>
                    </a>
                </div>
            </div>
        </section>
        <!-- section about -->
        <section id="about">
            <div class="container">
                <!-- section title -->
                <h2 class="section-title wow fadeInUp">About Me</h2>
                <div class="spacer" data-height="60" style="height: 60px;"></div>
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="text-center text-md-left">
                            <!-- avatar image -->
                            <img src="{{ asset('images/avatar.jpg') }}" alt="zesan" style="border-radius: 50%" />
                        </div>
                        <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                    </div>
                    <div class="col-md-9 triangle-left-md triangle-top-sm">
                        <div class="rounded bg-white shadow-dark padding-30">
                            <!-- about text -->
                            <p>Welcome to my portfolio! I am G.M. Zesan, full-stack developer with expertise in the MERN stack (MongoDB, Express.js, React, and Node.js) and PHP with Laravel. I specialize in creating dynamic, scalable web applications and have a passion for building seamless user experiences. With a strong foundation in both frontend and backend technologies, I thrive on solving complex problems and bringing innovative ideas to life.</p>
                            <div class="mt-3">
                                <a href="https://drive.google.com/file/d/17etNidwuZPoLLoN7sEcD2qOZx9Vg941g/view?usp=sharing" target="_blank" class="btn btn-default">Download Resume</a>
                            </div>
                            <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                        </div>
                    </div>
                </div>
                <!-- row end -->
                <div class="spacer" data-height="70" style="height: 70px;"></div>
            </div>
        </section>
        <!-- section services -->
        <section id="services">
            <div class="container">
                <!-- section title -->
                <h2 class="section-title wow fadeInUp">Services</h2>
                <div class="spacer" data-height="60" style="height: 60px;"></div>
                <div class="row">
                    <div class="col-md-4">
                        <!-- service box -->
                        <div class="service-box rounded data-background padding-30 text-center black-box">
                            <img src="{{ asset('images/service-1.svg') }}" alt="UI/UX design" />
                            <h3 class="mb-3 mt-0">Web design</h3>
                            <p class="mb-0">My web design service combines creativity with functionality to craft visually stunning and user-friendly websites. Whether you're establishing a brand presence your current site, I ensure a seamless and engaging user experience.</p>
                        </div>
                        <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                    </div>
                    <div class="col-md-4">
                        <!-- service box -->
                        <div class="service-box rounded data-background padding-30 text-center black-box">
                            <img src="{{ asset('images/service-2.svg') }}" alt="UI/UX design" />
                            <h3 class="mb-3 mt-0">Front-end Development</h3>
                            <p class="mb-0">Transforming designs into interactive web interfaces is my specialty. Using Using cutting-edge technologies like HTML5, CSS3, Bootstrap and JavaScript, I create responsive and intuitive frontend solutions.</p>
                        </div>
                        <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                    </div>
                    <div class="col-md-4">
                        <!-- service box -->
                        <div class="service-box rounded data-background padding-30 text-center black-box">
                            <img src="{{ asset('images/price-3.svg') }}" alt="UI/UX design" />
                            <h3 class="mb-3 mt-0">Back-end Development</h3>
                            <p class="mb-0">Powering your website with robust backend solutions is crucial for seamless performance. My backend development service focuses on scalability, security, and efficiency frameworks like Express JS, and Laravel.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- section prices -->
        <section id="prices">
            <div class="container">
                <!-- section title -->
                <h2 class="section-title wow fadeIn">Pricing Plans</h2>
                <div class="spacer" data-height="60" style="height: 60px;"></div>
                <div class="row align-items-center">
                    <div class="col-md-4 mt-md-4">
                        <!-- price item -->
                        <div class="price-item bg-white rounded shadow-dark text-center">
                            <img src="{{ asset('images/price-1.svg') }}" alt="Regular" />
                            <h2 class="plan">Basic</h2>
                            <p>A Simple option but powerful to manage your business</p>
                            <p>Web Design support</p>
                            <h3 class="price"><em>$</em>9<span>Month</span></h3>
                        </div>
                    </div>
                    <div class="col-md-4 my-4">
                        <!-- price item recommended-->
                        <div class="price-item bg-white rounded shadow-dark text-center best">
                            <span class="badge">Recommended</span>
                            <img src="{{ asset('images/price-2.svg') }}" alt="Premium" />
                            <h2 class="plan">Premium</h2>
                            <p>Unlimited product including apps integrations and more features</p>
                            <p>Development Support</p>
                            <h3 class="price"><em>$</em>49<span>Month</span></h3>
                        </div>
                    </div>
                    <div class="col-md-4 mt-md-4">
                        <!-- price item -->
                        <div class="price-item bg-white rounded shadow-dark text-center">
                            <img src="{{ asset('images/price-3.svg') }}" alt="Ultimate" />
                            <h2 class="plan">Ultimate</h2>
                            <p>A wise option for large companies and individuals</p>
                            <p>24/7 All support</p>
                            <h3 class="price"><em>$</em>99<span>Month</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- section contact -->
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
