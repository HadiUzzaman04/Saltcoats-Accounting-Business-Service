@extends('layouts.master')
@section('content')

<section class="section section-bg" id="call-to-action" style="background-image: url({{asset('website/images/FAQ-Black.jpg')}})">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <br>
                    <br>
                    <h2>Accounting FAQ</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<div id="accordion">
    <div class="card">
        <div class="card-header" id="1">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseone" aria-expanded="false" aria-controls="collapseTwo">
                    Which is better – outsourcing or in-house accountant?
                </button>
            </h5>
        </div>
        <div id="collapseone" class="collapse" aria-labelledby="1" data-parent="#accordion">
            <div class="card-body">
                Buchprufer has a highly professional team of qualified staff (CA/ ACCA/ CMA) to handle your books of accounts. We can handle the data entry, review and tax compliance of your books of accounts. Depending on the size of your organisation, in order to get a varied skill set (e.g. accounting, review, tax knowledge, etc.) you might have to employ many in-house resources. Outsourcing can get your job done at a much lower cost.
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="3">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsethree" aria-expanded="false" aria-controls="collapseThree">
                    What are the benefits of accounts outsourcing?
                </button>
            </h5>
        </div>
        <div id="collapsethree" class="collapse" aria-labelledby="3" data-parent="#accordion">
            <div class="card-body">
                <ul>
                    <li>Reduce costs – Buchprufer offers accounting services at affordable rates which will lower your staff cost considerably, thereby, increasing profits.</li>
                    <br>
                    <li>Save time – Our team of professional handle all the hassles that come with accounting, payroll and admin services. This reduces your involvement in trivial day to day activities, thereby, allowing you to focus on your business expansion needs.</li>
                    <br>
                    <li>Availability of team of experts – Highly professional team of qualified staff (CA/ ACCA/ CMA) to handle your books of accounts</li>
                    <br>
                    <li>Reduce technology hassles – Our team of IT experts handle all accounting software and IT glitches with ease.</li>
                    <br>
                    <li>Error free tax filing – Our team of experts and internal processes ensure error free accounting, thereby, reducing risk of misfiling your tax returns and missing tax deadlines.Before you choose the right fit for you, you need to evaluate certain factors such as the size of your company, industry domain of your organization, number of employees, yearly turnover and so on. Accordingly, you can choose the correct accounting outsourcing company for your needs and wave goodbye to all your tax return hassles.</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="4">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
                    Is it feasible for small companies and start ups to outsource their accounting tasks?
                </button>
            </h5>
        </div>
        <div id="collapsefour" class="collapse" aria-labelledby="4" data-parent="#accordion">
            <div class="card-body">
                Outsourcing can be highly beneficial for small organisations and start-ups. Buchprufer offers a varied skill set like accounting/ data entry, review/managerial roles, tax knowledge, etc.) at a much lower cost.
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="5">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapseThree">
                    How long has Buchprufer been providing outsourcing services to clients?
                </button>
            </h5>
        </div>
        <div id="collapsefive" class="collapse" aria-labelledby="5" data-parent="#accordion">
            <div class="card-body">
                We have been providing accounting, auditing, payroll and taxation services to global companies for over a decade.
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="6">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapseThree">
                    Does Buchprufer offer a free trial?
                </button>
            </h5>
        </div>
        <div id="collapsesix" class="collapse" aria-labelledby="6" data-parent="#accordion">
            <div class="card-body">
                Yes, we do! Depending on the nature of your requirement, we can provide you free customized trial packages so that you can evaluate our services. </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="7">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseThree">
                    How do you ensure that my files and data are completely secure?
                </button>
            </h5>
        </div>
        <div id="collapseseven" class="collapse" aria-labelledby="7" data-parent="#accordion">
            <div class="card-body">
                We deploy a secured IT environment in compliance with the latest regulations. We employ modern security methods and technologies to keep your data secure. </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="8">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseThree">
                    Which is more control effective from business owner’s point of view – outsourcing or in-house accountant?
                </button>
            </h5>
        </div>
        <div id="collapseeight" class="collapse" aria-labelledby="8" data-parent="#accordion">
            <div class="card-body">
                The business owners and signatories authorized by the business owners maintain 100% control over the business and decision-making on the financial statements and books of accounts. Our team of professional accountants can help you in decision-making by making accurate data available at the right time. </div>
        </div>
    </div>
</div>
<br>

<!-- ***** Contact Us Area Starts ***** -->
<section class="section" id="contact-us" style="margin-top: 0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <div class="contact-form section-bg">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <fieldset>
                                    <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <fieldset>
                                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email*" required="">
                                </fieldset>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="subject" type="text" id="subject" placeholder="Subject">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-button">Send Message</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection