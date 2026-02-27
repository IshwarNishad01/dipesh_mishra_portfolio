@extends('user.layout.app')
@section('title', 'Dipesh Mishra | Youth Institution Builder')
@section('content')

    <main>

        <!-- HERO SECTION -->
        <div class="slider-area" data-aos="fade-up">
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-10">
                            <div class="hero__caption">
                                <span style="font-size: 26px;">Empowering Youth. Strengthening Society. <br> Building a
                                    Self-Reliant India.</span>
                                <h1>Dipesh Mishra</h1>
                                <p id="typewriter" style="font-size:25px;"></p>
                                {{-- <p>
                                    Visionary Entrepreneur | Youth Institution Builder <br>
                                    Founder & CEO – iYouth Pvt. Ltd. <br>
                                    Founder & President – Chhattisgarh Youth Federation <br>
                                    Founder & President – Chhattisgarh Adventure Sports Association
                                </p> --}}

                                <div class="hero__btn mt-4">
                                    <a href="#partnership" class="btn hero-btn" data-aos-delay="300"
                                        data-aos="fade-up">Partner With Us</a>
                                    <a href="#vision" class="btn border-btn ml-15" data-aos-delay="300"
                                        data-aos="fade-up">Explore Vision</a>
                                    <a href="#contact" class="btn border-btn ml-15" data-aos-delay="300"
                                        data-aos="fade-up">Contact Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ABOUT SECTION -->
        <div class="about-me pb-top">
            <div class="container">
                <div class="row justify-content-between align-items-center">

                    <div class="col-lg-6 col-md-6" data-aos="fade-right">
                        <div class="about-me-caption">
                            <h2>About Dipesh Mishra</h2>
                            <p class="pb-30">Dipesh Mishra is a youth-focused entrepreneur and institution builder
                                committed to transforming India’s youth into confident, skilled, safe, and self-reliant
                                leaders.</br>
                                His work integrates enterprise development, skill enhancement, leadership building,
                                adventure training, and social safety awareness into one structured empowerment ecosystem.
                            </p>
                            <h5>He believes that youth are not just the future of India — they are the driving force of
                                India’s present growth story.</h5>
                            <p>Dipesh Mishra represents a new generation of leadership rooted in purpose and execution. As
                                the founder of multiple youth-driven institutions, he is building platforms where youth
                                become skilled, confident, safe, and economically independent contributors to society.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="about-me-img mb-30">
                            <img src="{{ asset('user/assets/img/dipesh_mishra_img.webp') }}" alt="Dipesh Mishra"
                                class="img-fluid" style="height: 550px;" data-aos="fade-left">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ORGANIZATIONAL LEADERSHIP -->
        <section class="categories-area section-padding30" data-aos="fade-up">
            <div class="container">
                <div class="section-tittle mb-70">
                    <h2>Organizational Leadership</h2>
                </div>

                <div class="row">

                    <!-- iYouth -->
                    <div class="col-md-6 col-lg-4">
                        <div class="single-cat mb-50">
                            <h4>iYouth Pvt. Ltd.</h4>
                            <p><strong>Vision:</strong> Youth-driven enterprise ecosystem generating employment & promoting
                                self-employment.</p>
                            <ul>
                                <li>Scalable Youth-Centric Brands</li>
                                <li>Private & White Label Manufacturing</li>
                                <li>District Distribution Networks</li>
                                <li>Women & Youth Enterprises</li>
                            </ul>
                        </div>
                    </div>

                    <!-- CYF -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="single-cat mb-50">
                            <h4>Chhattisgarh Youth Federation</h4>
                            <p><strong>Vision:</strong> Skilled, Safe & Empowered Youth.</p>
                            <ul>
                                <li>Leadership Programs</li>
                                <li>Skill Development</li>
                                <li>Youth Awareness Campaigns</li>
                                <li>Grassroots Leadership Building</li>
                            </ul>
                        </div>
                    </div>

                    <!-- CASA -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="single-cat mb-50">
                            <h4>Chhattisgarh Adventure Sports Association</h4>
                            <p><strong>Vision:</strong> Confident, Fearless & Adventure-Ready Youth.</p>
                            <ul>
                                <li>Adventure Training</li>
                                <li>Disaster Management</li>
                                <li>Adventure Tourism Promotion</li>
                                <li>Professional Competitions</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- UNIFIED YOUTH EMPOWERMENT MODEL -->
        <section class="wantToWork-area w-padding2" id="partnership" data-aos="fade-up">
            <div class="container">

                <div class="section-tittle text-center mb-60" data-aos="fade-up">
                    <h2>UNIFIED CONCEPT – THE YOUTH EMPOWERMENT MODEL</h2>
                    <p>All institutions operate under one integrated framework:</p>
                    <h4 class="mt-3" style="font-weight:600;">
                        Youth + Skill + Safety + Enterprise + Leadership = Empowered Society
                    </h4>
                </div>

                <div class="row mt-5 ">

                    <!-- Ongoing Projects -->
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up">
                        <div class="single-cat p-4 shadow-sm bg-white">
                            <img src="{{ asset('user/assets/img/1768205612.webp') }}" alt="Dipesh Mishra"
                                class="img-fluid mb-30" data-aos="fade-left">
                            <h4>Ongoing Projects & Initiatives</h4>
                            <ul class="mt-3">
                                <li class="mt-3">
                                    <a href="https://www.iyouth.in" style="color:black; font-size:16px;">
                                        <strong>आत्मनिर्भर युवा-आत्मनिर्भर छत्तीसगढ़</strong>
                                    </a>
                                </li>
                                <li class="mt-2">
                                    <a href="https://www.iyouthjob.in" style="color:black; font-size:16px;">
                                        Employment
                                    </a>
                                </li>
                                <li class="mt-2">
                                    <a href="https://www.iyouthstore.in" style="color:black; font-size:16px;">
                                        Self-employment
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <!-- Upcoming Projects -->
                    <div class="col-12 col-md-6 col-lg-4 " data-aos="fade-up">
                        <div class="single-cat p-4 shadow-sm bg-white">
                            <img src="{{ asset('user/assets/img/1768206038.webp') }}" alt="Dipesh Mishra"
                                class="img-fluid mb-30" data-aos="fade-left">
                            <h4>Upcoming Projects & Initiatives</h4>
                            <ul class="mt-3">
                                <li>Restaurants – <a href="https://www.iyoutheats.in" target="_blank">iyoutheats.in</a></li>
                                <li>News & Media – <a href="https://www.iyouthnews.in" target="_blank">iyouthnews.in</a>
                                </li>
                                <li>Fitness – <a href="https://www.iyouthfitness.in" target="_blank">iyouthfitness.in</a>
                                </li>
                                <li>Skill – <a href="https://www.iyouthskill.in" target="_blank">iyouthskill.in</a></li>
                                <li>Education – <a href="https://www.iyouthsiksha.in" target="_blank">iyouthsiksha.in</a>
                                </li>
                                <li>Youth Awareness & Adventure – <a href="https://www.cgyouth.in"
                                        target="_blank">cgyouth.in</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <!-- CORE PILLARS -->
        <section class="client-comments section-paddingt30" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-70">
                            <h2>CORE PILLARS</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- latest-blog-area start -->
            <div class="latest-blog-area">
                <div class="container">
                    <div class="custom-row">
                        <div class="blog-active">
                            <!-- single-items -->
                            <div class="col-xl-4">
                                <div class="blog-wrapper">
                                    <div class="blog-inner">
                                        <div class="blog-top">
                                            <div class="person-img">
                                                {{-- <img src="{{asset('user/assets/img/gallery/blog1.png')}}" alt=""> --}}
                                            </div>
                                            <div class="comment-person">
                                                <h2>Youth Skill Empowerment</h2>
                                            </div>
                                        </div>
                                        <p>Skill Development Programs | Entrepreneurship Training | Leadership Workshops |
                                            Confidence Building </p>
                                    </div>
                                </div>
                            </div>
                            <!-- single-items -->
                            <div class="col-xl-4" data-aos="fade-up">
                                <div class="blog-wrapper">
                                    <div class="blog-inner">
                                        <div class="blog-top">
                                            <div class="person-img">
                                                {{-- <img src="{{asset('user/assets/img/gallery/blog2.png')}}" alt=""> --}}
                                            </div>
                                            <div class="comment-person">
                                                <h2>Youth Safety & Structured Growth</h2>

                                            </div>
                                        </div>
                                        <p>Adventure Safety Protocols | Disaster Management Training | Community Safety
                                            Awareness | Responsible Youth Engagement</p>
                                    </div>
                                </div>
                            </div>
                            <!-- single-items -->
                            <div class="col-xl-4" data-aos="fade-up">
                                <div class="blog-wrapper">
                                    <div class="blog-inner">
                                        <div class="blog-top">
                                            <div class="person-img">
                                                <img src="assets/img/gallery/blog3.png" alt="">
                                            </div>
                                            <div class="comment-person">
                                                <h2>Enterprise & Employment Creation</h2>

                                            </div>
                                        </div>
                                        <p>Youth-Led Business Models | Women-Led Enterprise Units | Micro Distribution
                                            Networks | Local Manufacturing Promotion</p>
                                    </div>
                                </div>
                            </div>
                            <!-- single-items -->
                            <div class="col-xl-4" data-aos="fade-up">
                                <div class="blog-wrapper">
                                    <div class="blog-inner">
                                        <div class="blog-top">
                                            <div class="person-img">
                                                {{-- <img src="assets/img/gallery/blog2.png" alt=""> --}}
                                            </div>
                                            <div class="comment-person">
                                                <h2>Women Empowerment</h2>

                                            </div>
                                        </div>
                                        <p>Skill-Based Income Opportunities | Rural Women Business Participation | Financial
                                            Independence | Leadership Development</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End latest-blog-area -->
        </section>


        {{-- PURPOSE --}}
        {{-- <section class="purpose-area purpose-padding bg-light" data-aos="fade-up">
            <div class="container">
                <div class="section-tittle mb-70">
                    <h2>THE BIGGER PURPOSE</h2>
                </div>

                <div class="row">

                    <div class="col-md-3 col-md-6">
                        <h5>India’s growth must be youth-driven.</h5>
                        <p>The goal is not only employment —
                            but employment creation.<br>
                            Not only empowerment —
                            but structured empowerment.<br>
                            Not only participation —
                            but leadership.
                        </p>
                    </div>

                    <div class="col-md-3 col-md-6">
                        <h5>The mission is to ensure:</h5>
                        <p>• Youth become skilled and confident<br>
                            • Society becomes safe and responsible<br>
                            • Women become economic leaders<br>
                            • Communities become self-reliant<br>
                            • India’s growth story is written by its youth
                        </p>
                    </div>

                </div>
            </div>
        </section> --}}

        <!-- VISION 2030 -->
        <section class="vision-roadmap section-padding">
            <div class="container">
                <div class="section-tittle text-center mb-70">
                    <h2>Vision 2030 Roadmap</h2>
                </div>

                <div class="roadmap">

                    <div class="roadmap-item left" data-aos="fade-right">
                        <div class="content">
                            <h4>Phase 1</h4>
                            <p>District-Level Skill & Youth Activation</p>
                        </div>
                    </div>

                    <div class="roadmap-item right" data-aos="fade-left">
                        <div class="content">
                            <h4>Phase 2</h4>
                            <p>Enterprise & Distribution Expansion (State Level)</p>
                        </div>
                    </div>

                    <div class="roadmap-item left" data-aos="fade-right">
                        <div class="content">
                            <h4>Phase 3</h4>
                            <p>National Youth Enterprise Network</p>
                        </div>
                    </div>

                    <div class="roadmap-item right" data-aos="fade-left">
                        <div class="content">
                            <h4>Phase 4</h4>
                            <p>Integrated Youth Economic & Leadership Ecosystem</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- PARTNERSHIP -->
        <section class="wantToWork-area w-padding2" id="partnership" data-aos="fade-up">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-8">
                        <div class="wantToWork-caption">
                            <h2>Let’s Build a Skilled, Safe & Self-Reliant India Together</h2>
                            <p>We invite collaboration with Government Institutions, NGOs, Manufacturers, Investors,
                                Educational Institutions & Youth Leaders.</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <a href="#contact" class="btn btn-black">Partner With Us</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTACT -->
        <section class="contact-info-area section-padding" id="contact" data-aos="fade-up">
            <div class="container">
                <div class="section-tittle mb-50">
                    <h2>Contact</h2>
                </div>

                <div class="row">
                    <div class="col-lg-5">
                        <h4>Dipesh Mishra</h4>
                        <p>Chhattisgarh, India</p>
                        <p>Email: demo@email.com</p>
                        <p>Phone: +91-1234567891</p>
                    </div>

                    <div class="col-lg-7">
                        <form action="#" method="POST" class="contact-wrapper">
                            @csrf
                            <input type="text" name="name" placeholder="Full Name" required>
                            <input type="email" name="email" placeholder="Email Address" required>
                            <input type="text" name="phone" placeholder="Phone Number">
                            <textarea name="message" placeholder="Your Message" required></textarea>
                            <button class="submit-btn2" type="submit">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        
    </main>

@endsection
