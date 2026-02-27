@extends('user.layout.app')
@section('title', 'About Dipesh Mishra')
@section('content')

    <main>

        <!-- ----------- HERO SECTION ---------------- -->
        <div class="slider-area ">
            <div class="slider-height2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap">
                                <h2 data-aos="fade-up" >About me</h2>
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">About me</a></li> 
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ----------------------- ABOUT DIPESH MISHRA ---------------- -->
        <section class="about-area section-paddingt30" id="vision">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <img src="{{ asset('user/assets/img/dipesh_mishra_img.webp') }}" alt="Dipesh Mishra"
                            class="img-fluid mb-30" data-aos="fade-right">
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <h2>About Dipesh Mishra</h2>
                        <p>Dipesh Mishra is a youth-focused entrepreneur and institution builder committed to transforming
                            India's youth into confident, skilled, safe, and self-reliant leaders.</p>
                        <p>His work integrates enterprise development, skill enhancement, leadership building, adventure
                            training, and social safety awareness into one structured empowerment ecosystem.</p>
                        <p>He believes that youth are not just the future of India — they are the driving force of India’s
                            present growth story.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- PREMIUM MAGAZINE BIO -->
        <section class="about-area section-paddingt30 bg-light" style="padding: 5px;" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center mb-60">
                        <h2>Premium Magazine Bio</h2>
                        <p class="pera1">Dipesh Mishra represents a new generation of leadership rooted in purpose and
                            execution. As the founder of multiple youth-driven institutions, he is building platforms where
                            youth become skilled, confident, safe, and economically independent contributors to society. His
                            mission is to create a youth-powered ecosystem that strengthens families, communities, and the
                            nation.</p>
                    </div>
                    <div class="col-lg-12">
                        <h3>Long Version</h3>
                        <p>Dipesh Mishra is an emerging Indian entrepreneur and youth institution architect dedicated to
                            building a structured and sustainable youth empowerment ecosystem. As Founder & CEO of iYouth
                            Pvt. Ltd., he is developing youth-centric brands and enterprise models that generate employment
                            and promote self-employment. His approach integrates manufacturing, distribution networks, and
                            grassroots participation to build scalable economic opportunities.</p>
                        <p>As Founder & President of Chhattisgarh Youth Federation, he works toward organizing and
                            empowering youth through leadership programs, skill development initiatives, awareness
                            campaigns, and social responsibility platforms.</p>
                        <p>Through Chhattisgarh Adventure Sports Association, he promotes adventure sports as a powerful
                            medium for discipline, mental strength, resilience, and safety awareness — shaping youth into
                            confident and fearless individuals.</p>
                        <p>His broader vision connects enterprise, skill development, safety awareness, women-led
                            entrepreneurship, and youth leadership into one unified mission: building a self-reliant youth
                            and a stronger India.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ORGANIZATIONAL LEADERSHIP -->
        <section class="services-area section-padding3">
            <div class="container">
                <div class="section-tittle text-center mb-70">
                    <h2>Organizational Leadership</h2>
                </div>
                <div class="row">

                    <!-- iYouth -->
                    <div class="col-md-6 col-lg-4 mb-50">
                        <div class="single-cat p-4 shadow-sm bg-white">
                            <h4>iYouth Pvt. Ltd.</h4>
                            <p><strong>Vision:</strong> To build a youth-driven enterprise ecosystem that generates employment, promotes self-employment, and strengthens local manufacturing.</p>
                            <ul>
                                <li><strong>Mission</strong></li>
                                <li>Develop scalable youth-centric brands</li>
                                <li>Promote private-label and white-label manufacturing</li>
                                <li>Create district-level distribution networks</li>
                                <li>Enable women-led and youth-led enterprises</li>
                                <li>Generate sustainable livelihood opportunities</li>
                            </ul>
                        </div>
                    </div>

                    <!-- CYF -->
                    <div class="col-md-6 col-lg-4 mb-50">
                        <div class="single-cat p-4 shadow-sm bg-white">
                            <h4>Chhattisgarh Youth Federation</h4>
                            <p><strong>Vision:</strong> Skilled, Safe & Empowered Youth.</p>
                            <ul>
                                <li><strong>Mission</strong></li>
                                <li>Empowerment of youth through skill development</li>
                                <li>confidence building</li>
                                <li>leadership training, and proper motivation</li>
                                <li></li>
                            </ul>
                        </div>
                    </div>

                    <!-- CASA -->
                    <div class="col-md-6 col-lg-4 mb-50">
                        <div class="single-cat p-4 shadow-sm bg-white">
                            <h4>Chhattisgarh Adventure Sports Association</h4>
                            <p><strong>Vision:</strong> Confident, Fearless and Adventure-Ready Youth.</p>
                            <ul>
                                <li><strong>Mission</strong></li>
                                <li>Providing structured adventure facilities and safety-oriented training to develop resilience, discipline, and confidence among youth.</li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- YOUTH EMPOWERMENT MODEL -->
        <section class="about-area section-paddingt30 bg-light">
            <div class="container text-center">
                <h2>Unified Concept - The Youth Empowerment Model</h2>
                <p>All institutions operate under one integrated framework:</p>
                <h4 style="font-weight:600;">Youth + Skill + Safety + Enterprise + Leadership = Empowered Society</h4>
            </div>
        </section>

        <!-- CORE PILLARS -->
        <section class="services-area services-padding bg-light">
            <div class="container">
                <div class="section-tittle text-center mb-50">
                    <h2>Core Pillars</h2>
                </div>
                <div class="row text-center">

                    <div class="col-lg-3 col-md-6 mb-30">
                        <h5>Youth Skill Empowerment</h5>
                        <p>Skill Development Programs | Entrepreneurship Training | Leadership Workshops | Confidence
                            Building</p>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-30">
                        <h5>Youth Safety & Structured Growth</h5>
                        <p>Adventure Safety Protocols | Disaster Management Training | Community Safety Awareness |
                            Responsible Youth Engagement</p>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-30">
                        <h5>Enterprise & Employment Creation</h5>
                        <p>Youth-Led Business Models | Women-Led Enterprise Units | Micro Distribution Networks | Local
                            Manufacturing Promotion</p>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-30">
                        <h5>Women Empowerment</h5>
                        <p>Skill-Based Income Opportunities | Rural Women Business Participation | Financial Independence |
                            Leadership Development</p>
                    </div>

                </div>
            </div>
        </section>

        <!-- PARTNERSHIP -->
        <section class="wantToWork-area w-padding2" id="partnership">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-8">
                        <div class="wantToWork-caption">
                            <h2>Let's Build a Skilled, Safe & Self-Reliant India Together</h2>
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

        <!-- CONTACT SECTION -->
        <section class="contact-info-area section-padding" id="contact">
            <div class="container">
                <div class="section-tittle text-center mb-50">
                    <h2>Contact</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-5 mb-30">
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
