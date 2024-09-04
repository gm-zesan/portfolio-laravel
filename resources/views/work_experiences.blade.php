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
                                <h2 class="title">My Experience</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb breadcrumb-link">
                                        <li class="breadcrumb-item">
                                            <a href="{{ route('home') }}">Home</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            Experience
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="myself">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5 col-lg-4">
                        <div class="card profile-card p-4">
                            <div class=" image d-flex flex-column justify-content-center align-items-center">
                                <img src="{{ asset('images/avatar.jpg') }}" height="100" width="100" class="wow fadeInUp" style="border-radius: 50%" />
                                <h4 class="mt-3 wow fadeInUp" data-wow-delay="0.2s">G.M. Zesan</h4>
                                <span class="wow fadeInUp" data-wow-delay="0.4s">Full Stack Developer</span>
                                <div class="gap-3 mt-4 icons d-flex wow fadeInUp justify-content-center" data-wow-delay="0.6s">
                                    <ul class="social-icons light list-inline mb-0">
                                        <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fab fa-behance"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fab fa-dribbble"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-8">
                        <div class="box-shadow padding-30">
                            <h2 class="section-title ml-0 wow fadeInUp">My-Self</h2>
                            <div class="spacer" style="height: 20px"></div>
                            <div class="row wow fadeInUp" data-wow-delay="0.2s">
                                <div class="col-lg-6">
                                    <ul>
                                        <li>
                                            <i class="bi bi-rounded-right"></i>
                                            <strong>Name:</strong> G.M. Zesan
                                        </li>
                                        <li>
                                            <i class="bi bi-rounded-right"></i>
                                            <strong>Phone:</strong>
                                            +8801770597767
                                        </li>
                                        <li>
                                            <i class="bi bi-rounded-right"></i>
                                            <strong>Address:</strong>
                                            Sector-11, Uttara, Dhaka,
                                            Bangladesh.
                                        </li>
                                        <li>
                                            <i class="bi bi-rounded-right"></i>
                                            <strong>Occupation:</strong> Student
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul>
                                        <li>
                                            <i class="bi bi-rounded-right"></i>
                                            <strong>Degree:</strong> Diploma
                                        </li>
                                        <li>
                                            <i class="bi bi-rounded-right"></i>
                                            <strong>Designation:</strong>
                                            full-stack Web Developer
                                        </li>
                                        <li>
                                            <i class="bi bi-rounded-right"></i>
                                            <strong>Email:</strong>
                                            gmzesan7767@gmail.com
                                        </li>
                                        <li>
                                            <i class="bi bi-rounded-right"></i>
                                            <strong>Institute:</strong> Green
                                            University of Bangladesh
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="skill">
            <div class="container">
                <h2 class="section-title wow fadeInUp">Skill</h2>
                <div class="spacer" data-height="60" style="height: 60px;"></div>
                <div class="row">
                    <div class="col-md-6 pe-md-5">
                        <div class="skill-item wow fadeInUp">
                            <div class="skill-info clearfix">
                                <h4 class="float-left mb-3 mt-0">HTML</h4>
                                <span class="float-right">85%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar data-background" role="progressbar" aria-valuemin="0"
                                    aria-valuemax="100" aria-valuenow="85" data-color="rgb(255, 209, 92)" style="background-color: rgb(255, 209, 92); width: 85%;">
                                </div>
                            </div>
                            <div class="spacer" data-height="20" style="height: 20px;"></div>
                        </div>
                        <div class="skill-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="skill-info clearfix">
                                <h4 class="float-left mb-3 mt-0">
                                    Bootstrap
                                </h4>
                                <span class="float-right">95%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar data-background" role="progressbar" aria-valuemin="0"
                                    aria-valuemax="100" aria-valuenow="95" data-color="#FF4C60" style="background-color: #FF4C60; width: 95%;">
                                </div>
                            </div>
                            <div class="spacer" data-height="20" style="height: 20px;"></div>
                        </div>
                        <div class="skill-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="skill-info clearfix">
                                <h4 class="float-left mb-3 mt-0">
                                    Express JS
                                </h4>
                                <span class="float-right">70%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar data-background" role="progressbar" aria-valuemin="0"
                                    aria-valuemax="100" aria-valuenow="70" data-color="#6C6CE5" style="background-color: #6C6CE5; width: 70%;">
                                </div>
                            </div>
                            <div class="spacer" data-height="20" style="height: 20px;"></div>
                        </div>
                        <div class="skill-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="skill-info clearfix">
                                <h4 class="float-left mb-3 mt-3">
                                    PHP(Laravel-MVC)
                                </h4>
                                <span class="float-right">40%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar data-background" role="progressbar" aria-valuemin="0"
                                    aria-valuemax="100" aria-valuenow="40" data-color="#FF4C60" style="background-color: #FF4C60; width: 40%;">
                                </div>
                            </div>
                            <div class="spacer" data-height="20" style="height: 20px;"></div>
                        </div>
                    </div>
                    <div class="col-md-6 ps-md-5">
                        <div class="skill-item wow fadeInUp">
                            <div class="skill-info clearfix">
                                <h4 class="float-left mb-3 mt-0">CSS</h4>
                                <span class="float-right">60%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar data-background" role="progressbar" aria-valuemin="0"
                                    aria-valuemax="100" aria-valuenow="60" data-color="#6C6CE5" style="background-color: #6C6CE5; width: 60%;">
                                </div>
                            </div>
                            <div class="spacer" data-height="20" style="height: 20px;"></div>
                        </div>
                        <div class="skill-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="skill-info clearfix">
                                <h4 class="float-left mb-3 mt-0">
                                    React JS
                                </h4>
                                <span class="float-right">50%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar data-background" role="progressbar" aria-valuemin="0"
                                    aria-valuemax="100" aria-valuenow="50" data-color="rgb(255, 209, 92)" style="background-color: rgb(255, 209, 92); width: 50%;">
                                </div>
                            </div>
                            <div class="spacer" data-height="20" style="height: 20px;"></div>
                        </div>
                        <div class="skill-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="skill-info clearfix">
                                <h4 class="float-left mb-3 mt-0">
                                    MongoDB
                                </h4>
                                <span class="float-right">55%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar data-background" role="progressbar" aria-valuemin="0"
                                    aria-valuemax="100" aria-valuenow="55" data-color="#FF4C60" style="background-color: #FF4C60; width: 55%;">
                                </div>
                            </div>
                            <div class="spacer" data-height="20" style="height: 20px;"></div>
                        </div>
                        <div class="skill-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="skill-info clearfix">
                                <h4 class="float-left mb-3 mt-3">
                                    MySQL
                                </h4>
                                <span class="float-right">60%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar data-background" role="progressbar" aria-valuemin="0"
                                    aria-valuemax="100" aria-valuenow="60" data-color="rgb(255, 209, 92)" style="background-color: rgb(255, 209, 92); width: 60%;">
                                </div>
                            </div>
                            <div class="spacer" data-height="20" style="height: 20px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="experience">
            <div class="container">
                <!-- section title -->
                <h2 class="section-title wow fadeInUp">Experience</h2>
                <div class="spacer" data-height="60" style="height: 60px;"></div>
                <div class="row">
                    <div class="col-md-6">
                        <!-- timeline wrapper -->
                        <div class="timeline edu bg-white rounded shadow-dark padding-30 overflow-hidden">
                            <!-- timeline item -->
                            <div class="timeline-container wow fadeInUp">
                                <div class="content">
                                    <span class="time">2021 - Present</span>
                                    <h3 class="title">Bachelor’s Degree</h3>
                                    <p>
                                        Bachelor is running(Second Year) in
                                        Green University of Bangladesh.
                                        Department is CSE.
                                    </p>
                                </div>
                            </div>
                            <!-- timeline item -->
                            <div class="timeline-container wow fadeInUp" data-wow-delay="0.2s">
                                <div class="content">
                                    <span class="time">2016 - 2020</span>
                                    <h3 class="title">Diploma</h3>
                                    <p>
                                        Diploma has completed from Faridpur
                                        Polytechnic Institute. CGPA : 3.69
                                    </p>
                                </div>
                            </div>
                            <!-- timeline item -->
                            <div class="timeline-container wow fadeInUp" data-wow-delay="0.4s">
                                <div class="content">
                                    <span class="time">2015 - 2016</span>
                                    <h3 class="title">SSC</h3>
                                    <p>
                                        I have done my SSC from Torkey Bandar
                                        Victory High School, Gouranadi, Barisal.
                                    </p>
                                </div>
                            </div>
                            <!-- main line -->
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- responsive spacer -->
                        <div class="spacer d-md-none d-lg-none" data-height="30"></div>
                        <!-- timeline wrapper -->
                        <div class="timeline exp bg-white rounded shadow-dark padding-30 overflow-hidden">
                            <!-- timeline item -->
                            <div class="timeline-container wow fadeInUp">
                                <div class="content">
                                    <span class="time">2022 - Running</span>
                                    <h3 class="title">React & Express</h3>
                                    <p>
                                        I am running to MERN stack Developer. I
                                        start my learning from Complete Web
                                        Development Course With Jhankar Mahbub.
                                    </p>
                                </div>
                            </div>
                            <!-- timeline item -->
                            <div class="timeline-container wow fadeInUp" data-wow-delay="0.2s">
                                <div class="content">
                                    <span class="time">
                                        2018 - 2019 & 2023 - Running
                                    </span>
                                    <h3 class="title">PHP(Laravel)</h3>
                                    <p>
                                        I had taken some ideas about PHP (OOP)
                                        from a course at Doel Campus. Then I was
                                        in polytechnic. But recently I have
                                        started development with PHP-Laravel
                                    </p>
                                </div>
                            </div>
                            <!-- timeline item -->
                            <div class="timeline-container wow fadeInUp" data-wow-delay="0.4s">
                                <div class="content">
                                    <span class="time">2017-2018</span>
                                    <h3 class="title">HTML & CSS</h3>
                                    <p>
                                        I learnt HTML & CSS from different
                                        resourses.
                                    </p>
                                </div>
                            </div>
                            <!-- main line -->
                            <span class="line"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="knowledge">
            <div class="container">
                <h2 class="section-title">Knowledge</h2>
                <div class="spacer" style="height: 60px"></div>
                <div class="black-box padding-30 shadow-dark">
                    <h2 class="sub-title-kn">Femilier At-(Working)</h2>
                    <div class="spacer-50" style="height: 50px"></div>
                    <div class="row align-items-center justify-content-center text-center">
                        <div class="col-12 col-md-4">
                            <img src="{{ asset('images/avatar.jpg') }}" height="auto" width="50%"  alt="zesan" style="border-radius: 50%"  />
                        </div>
                        <div class="col-12 col-md-4 anim-li">
                            <li>PHP(OOP)</li>
                            <li>Mysql</li>
                        </div>
                        <div class="col-12 col-md-4 anim-li">
                            <li>Laravel</li>
                            <li>GitHub</li>
                        </div>
                    </div>
                    <div class="spacer-20"></div>
                </div>
            </div>
            <div class="spacer"></div>
        </section>

        <div class="spacer" data-height="96" style="height: 96px"></div>
    </main>
@endsection
