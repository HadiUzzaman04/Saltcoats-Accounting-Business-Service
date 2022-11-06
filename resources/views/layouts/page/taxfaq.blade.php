@extends('layouts.master')
@section('content')

<section class="section section-bg" id="call-to-action" style="background-image: url({{asset('website/images/FAQ-Black.jpg')}})">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <br>
                    <br>
                    <h2>Tax FAQ</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<div id="accordion">
    <h4>Here are the fequently asked question about Tax</h4>
    <br>
    <div class="card">
        <div class="card-header" id="1">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseone" aria-expanded="false" aria-controls="collapseTwo">
                    What are zero-rated supplies?
                </button>
            </h5>
        </div>
        <div id="collapseone" class="collapse" aria-labelledby="1" data-parent="#accordion">
            <div class="card-body">
                <ul>
                    <li>Exports of goods and services.</li>
                    <br>
                    <li>International transport of goods and passengers.</li>
                    <br>
                    <li>Certain means of transport, such as trains, trams, vessels, airplanes.</li>
                    <br>
                    <li>First sale/rent of residential buildings.</li>
                    <br>
                    <li>Aircraft or vessels designated for rescue and assistance by air or sea.</li>
                    <br>
                    <li>Certain investment precious metals.</li>
                    <br>
                    <li>Certain healthcare services and related goods and services.</li>
                    <br>
                    <li>Certain educational services and related goods & services</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="3">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsethree" aria-expanded="false" aria-controls="collapseThree">
                    What are exempt supplies?
                </button>
            </h5>
        </div>
        <div id="collapsethree" class="collapse" aria-labelledby="3" data-parent="#accordion">
            <div class="card-body">
                <ul>
                    <li>Financial services including life insurance and reinsurance of life insurance as well as financial services that are not conducted for an explicit fee, discount, commission, rebate or similar type of consideration.</li>
                    <br>
                    <li>Residential buildings, other than the residential buildings which are specifically zero-rated.</li>
                    <br>
                    <li>Bare land.</li>
                    <br>
                    <li>Local passenger transport.</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="4">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
                    When should a business register for VAT?
                </button>
            </h5>
        </div>
        <div id="collapsefour" class="collapse" aria-labelledby="4" data-parent="#accordion">
            <div class="card-body">
                A business should mandatorily register for VAT within 30 days if the turnover of the company exceeds AED 375,000. Business should note that turnover includes local sales, exports, imports of goods and service. So even if you do not have any sales but is paying for services procured from outside Canada, it should apply for registration.A business can choose to register for VAT under a voluntary registration scheme if turnover exceed AED 187,500 </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="5">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapseThree">
                    When a business can claim credit on VAT paid on expenses?
                </button>
            </h5>
        </div>
        <div id="collapsefive" class="collapse" aria-labelledby="5" data-parent="#accordion">
            <div class="card-body">
                VAT on expenses that were incurred by a business can be deducted if the following conditions are satisfied
                <ul>
                    <li>The business must be a taxable person</li>
                    <br>
                    <li>There must be a valid taxable invoice for the supply</li>
                    <br>
                    <li>The goods or services acquired are used or intended to be used for making taxable supplies.</li>
                    <br>
                    <li>VAT input tax refund can be claimed only on the amount paid or intended to be paid before the expiration of 6 months after the agreed date for the payment of the supply.</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="6">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapseThree">
                    When should a company file the VAT return?
                </button>
            </h5>
        </div>
        <div id="collapsesix" class="collapse" aria-labelledby="6" data-parent="#accordion">
            <div class="card-body">
                VAT return must be filed quarterly, the quarters in which return has to be filed will be decided by the Federal Tax authority.
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="7">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseThree">
                        Should a business pay VAT on imports?
                    </button>
                </h5>
            </div>
            <div id="collapseseven" class="collapse" aria-labelledby="7" data-parent="#accordion">
                <div class="card-body">
                    This will depend on whether you are registered for VAT , He will owe VAT under the reverse charge mechanism, where business accounts for tax due under the reverse charge mechanism, and he can claim Input Tax Credit for this import.
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="8">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseThree">
                            Can a group of company under common management file a single return as a group?
                        </button>
                    </h5>
                </div>
                <div id="collapseeight" class="collapse" aria-labelledby="8" data-parent="#accordion">
                    <div class="card-body">
                        If a group of companies under a common management find it cumbersome to file individual return for all the companies , it can approach the tax authority for grouping. On approval of grouping request by the tax authorities, it can file a single return for the group for some businesses, VAT grouping will be a useful tool to simplify accounting for VAT. By registering under the Group VAT scheme, businesses will get a single VAT number and can file a single return. A VAT group allows people and entities that are closely linked financially, economically and organizationally to operate as a single VAT person.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="9">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsenine" aria-expanded="false" aria-controls="collapseThree">
                            What are the records to be maintained once you are registered for VAT?
                        </button>
                    </h5>
                </div>
                <div id="collapsenine" class="collapse" aria-labelledby="9" data-parent="#accordion">
                    <div class="card-body">
                        Businesses are required to keep records which will enable the Federal Tax Authority to identify the details of the business activities and review transactions. The books of accounts and the documentations evidencing supply of goods and services have to kept for period of five years.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="10">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseten" aria-expanded="false" aria-controls="collapseThree">
                            Should a nonresident register for VAT?
                        </button>
                    </h5>
                </div>
                <div id="collapseten" class="collapse" aria-labelledby="10" data-parent="#accordion">
                    <div class="card-body">
                        Non-residents that make taxable supplies in Canada will be required to register for VAT unless there is any other business in Canada responsible for accounting for VAT on these supplies. If you are selling goods/services to a non-registered business in UAE then you should apply for registration within 30 days of taxable supply. The threshold limit of AED 375,000 does not apply to a non-resident.
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="11">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseeleven" aria-expanded="false" aria-controls="collapseThree">
                            How can you cancel VAT registration?
                        </button>
                    </h5>
                </div>
                <div id="collapseeleven" class="collapse" aria-labelledby="11" data-parent="#accordion">
                    <div class="card-body">
                        A business must request for deregistration within 20 days if
                        <ul>
                            <li>It does not have a turnover exceeding AED 187,500 in the previous 12 months</li>
                            <br>
                            <li>The company has stopped its operation or the company has liquidated</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="12">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsetwelve" aria-expanded="false" aria-controls="collapseThree">
                            Can a Tourist get refund on the purchases made in UAE?
                        </button>
                    </h5>
                </div>
                <div id="collapsetwelve" class="collapse" aria-labelledby="12" data-parent="#accordion">
                    <div class="card-body">
                        Tourists can submit the required documents at the airport and make an application for refund of the tax. Tourists should do the following
                        <ul>
                            <li>Request for tax invoice when you make the purchase</li>
                            <br>
                            <li>Approach Planet payment self service kiosk at Canada international airport</li>
                            <br>
                            <li>Submit the tax invoice and your passport</li>
                        </ul>
                    </div>
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
                            <form id="contact" action="{{route('contactus.store')}}" method="post">
                                @csrf
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
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <input name="subject" type="text" id="subject" placeholder="Subject">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <input name="phone" type="text" id="phone" placeholder="Phone">
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