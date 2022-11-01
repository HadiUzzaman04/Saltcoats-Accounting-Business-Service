@extends('layouts.master')
@section('content')

<section class="section section-bg" id="call-to-action" style="background-image: url({{asset('website/images/aboutus.jpg')}})">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <br>
                    <br>
                    <h2>About Us</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<section class="section" id="our-classes">
    <div class="container">
        <div class="row" id="tabs">
            <div class="col-lg-12">
                <section class='tabs-content'>
                    <article id='tabs-1'>
                        <img src="{{asset('website/images/about-image-1-940x460.jpg')}}" alt="">
                        <h4>About Our Company</h4>
                        <p>Buchprufer, established in the year 2007, is one of the leading accounts & audit offshore firms in India. We have been providing offshore services to numerous leading companies for more than a decade. Our team comprises of around 100 well-qualified experts who ensure top-notch, highly professional services in accounting, auditing, payroll, taxation, IT and HR solutions.</p>
                        <p>Our main office is located at UL Cyber Park, Calicut, India. Our client network spreads across the globe building everlasting relationships based on trust and satisfaction. With our customized outsourcing solutions, Buchprufer has been at the forefront by serving leading companies with our technical expertise and advanced IT solutions. Specialized in auditing, accounting/ bookkeeping, payroll and taxation services, we cater to all your business requirements.</p>
                    </article>
                </section>
            </div>
        </div>
    </div>
</section>



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
@endsection