@extends('layouts.master')
@section('content')

<div class="main-banner" id="top">
    <!-- <video autoplay muted loop id="bg-video">
        <source src="assets/images/video.mp4" type="video/mp4" />
    </video> -->

    <img src="{{url('website/images/mainbanner.jpg')}}" style="width: 100%; object-fit:cover; height:100%;" />

    <div class="video-overlay header-text">
        <div class="caption">
            <h3>Looking for a perfect outsourcing partner? Contact Us.</h3>
            <div class="main-button">
                <a href="{{route('contactus')}}">Contact Us</a>
            </div>
        </div>
    </div>
</div>

<section class="section" id="trainers">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2>Our <em>Services</em></h2>
                    <img src="assets/images/line-dec.png" alt="">
                    <p>Our experts at Saltcoats accounting & business service have been rendering auditing and accounting services to clients across the globe for years. With a systematic and well-defined approach, coupled with expert knowledge in the field, they ensure to offer quality and timely service delivery to the clients.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="trainer-item">
                    <div class="image-thumb">
                        <img style="width: 250px; height: 150px" src="{{asset('website/images/Accounting-BP.png')}}" alt="">
                    </div>
                    <div class="down-content">
                        <h4>Accounting Service</h4>
                        <p>Saltcoats accounting & business service is a seasoned firm that specializes in accounting, bookkeeping and advisory services including HR & payroll management, taxation and virtual CFO services...</p>
                        <ul class="main-button text-center">
                            <li><a href="{{route('accounting')}}">View More</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="trainer-item">
                    <div class="image-thumb">
                        <img style="width: 250px; height: 150px" src="{{asset('website/images/Taxation.png')}}" alt="">
                    </div>
                    <div class="down-content">
                        <h4>Taxation</h4>
                        <p>During the pandemic, the government made many substantial initiatives to convince the expatriates, who constitute the majority of the country.s population, to continue in the nation for the long term...</p>
                        <ul class="main-button text-center">
                            <li><a href="{{route('corporatetax')}}">View More</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="trainer-item">
                    <div class="image-thumb">
                        <img style="width: 250px; height: 150px" src="{{asset('website/images/Audit-service.png')}}" alt="">
                    </div>
                    <div class="down-content">
                        <h4>Audit Service</h4>
                        <p>The audit service Canada is evolving more quickly due to factors including changing and stricter legislation, technological innovations, competitors, and the desire to increase confidence in financial...</p>
                        <ul class="main-button text-center">
                            <li><a href="{{route('audit')}}">View More</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-bg" id="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <h2>Read <em>About Us</em></h2>
                    <p>Saltcoats accounting & business service, established few years ago, is one of the leading accounts & audit offshore firms in Canada. We have been providing offshore services to numerous leading companies for more than a decade. Our team comprises of around 100 well-qualified experts who ensure top-notch, highly professional services in accounting, auditing, payroll, taxation and HR solutions.</p>
                    <div class="main-button">
                        <a href="{{route('aboutus')}}">View More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<section class="section" id="trainers">
    <div class="container">
        <h4>Why Choose us?</h4>
        <p>By using Buchprufer as your full-service audit outsourcing provider, you will garner the following benefits:</p>
        <br>
        <div class="row">
            <div class="col-lg-4">
                <div class="trainer-item">
                    <div class="image-thumb">
                        <img src="{{asset('website/images/photo18.png')}}" alt="">
                    </div>
                    <div class="down-content">
                        <h4>Budget-friendly</h4>
                        <p>Very competitive rates, allowing for more flexibility of costs and budgets for your company.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="trainer-item">
                    <div class="image-thumb">
                        <img src="{{asset('website/images/photo19.png')}}" alt="">
                    </div>
                    <div class="down-content">
                        <h4>Regular communication</h4>
                        <p>Dedicated team of experts will be at your service offering regular and continuous communication with your team.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="trainer-item">
                    <div class="image-thumb">
                        <img src="{{asset('website/images/photo20.png')}}" alt="">
                    </div>
                    <div class="down-content">
                        <h4>Timely service</h4>
                        <p>With a team of professionally qualified and extensively experienced personnel, we ensure to offer quality & timely services.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-bg" id="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <h2>Send us a <em>message</em></h2>
                    <p>Do you have questions about how Our Company can help your company? Send us an email and we'll get in touch shortly.</p>
                    <div class="main-button">
                        <a href="{{route('contactus')}}">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section" id="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="section-heading">
                    <h2>Read our <em>Testimonials</em></h2>
                    <img src="{{asset('website/images/line-dec.png')}}" alt="waves">
                    <p>Here is the testimonials of our clients</p>
                </div>
            </div>
            <div class="col-lg-6">
                <ul class="features-items">
                    <li class="feature-item">
                        <div class="left-icon">
                            <img src="{{asset('website/images/features-first-icon.png')}}" alt="First One">
                        </div>
                        <div class="right-content">
                            <h4>Ray Morti</h4>
                            <p><em>"We have been very happy and satisfied with his highly professional service in preparing our monthly accounts."</em></p>
                        </div>
                    </li>
                    <li class="feature-item">
                        <div class="left-icon">
                            <img src="{{asset('website/images/features-first-icon.png')}}" alt="second one">
                        </div>
                        <div class="right-content">
                            <h4>Justine Burke</h4>
                            <p><em>"Depth of knowledge with both accounting and business operation has proven invaluable for my business."</em></p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <ul class="features-items">
                    <li class="feature-item">
                        <div class="left-icon">
                            <img src="{{asset('website/images/features-first-icon.png')}}" alt="fourth muscle">
                        </div>
                        <div class="right-content">
                            <h4>Damian Brown</h4>
                            <p><em>"Where their services have really hit the mark is with the level of financial insight that we now have into the business."</em></p>
                        </div>
                    </li>
                    <li class="feature-item">
                        <div class="left-icon">
                            <img src="{{asset('website/images/features-first-icon.png')}}" alt="training fifth">
                        </div>
                        <div class="right-content">
                            <h4>Jed Carey</h4>
                            <p><em>"We needed someone with a high level of skill,  accuracy and dependability and Darcy bookkeeping really delivered."</em></p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

@endsection