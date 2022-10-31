@extends('layouts.master')
@section('content')

<section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <br>
                    <br>
                    <h2>Audit FAQ</h2>
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
                    How does the free trial work and will there be a charge?
                </button>
            </h5>
        </div>
        <div id="collapseone" class="collapse" aria-labelledby="1" data-parent="#accordion">
            <div class="card-body">
                When you request for a free consultation, a representative from Buchprufer will be in touch with you to understand your needs. An audit professional will be assigned to you, who will perform up to two to three audit support services based on your requirement. You will not be charged for the free trial. Only when you are satisfied with us, you may choose to commit to a contract. </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="4">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapseThree">
                    Is there a commitment after the free trial? </button>
            </h5>
        </div>
        <div id="collapsefour" class="collapse" aria-labelledby="4" data-parent="#accordion">
            <div class="card-body">
                No, there is no automatic commitment after the free trial period. You have full control over whether you want to commit to our services. We encourage availing free trials to understand how the process works and in testing out our audit support services before you want to commit to any contract. </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="5">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapseThree">
                    How much does the audit outsourcing cost? </button>
            </h5>
        </div>
        <div id="collapsefive" class="collapse" aria-labelledby="5" data-parent="#accordion">
            <div class="card-body">
                Audit outsourcing India is cost effective and is very competitively priced. Outsourced Audit Services in India are designed to help you reduce your overheads. The most important benefit is that audit outsourcing of work allows you to get the work done at a reasonably low cost and in a much more efficient way.
                <br>
                Buchprufer provides Tailor-made solutions to its customers for audit outsourcing. We will analyze your needs and suggest the best outsourcing services for you along with the most cost-effective pricing model. You can also start with a free trial, so you can evaluate us risk-free without investing anything from the start. Our audit outsourcing services packages help you grow your business with a standardized cost so that you know how much you can profit from each project.
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="3">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsethree" aria-expanded="false" aria-controls="collapseThree">
                    What are the benefits of Audit outsourcing to India? </button>
            </h5>
        </div>
        <div id="collapsethree" class="collapse" aria-labelledby="3" data-parent="#accordion">
            <div class="card-body">
                <ul>
                    <li>Reduce costs – Audit Outsourcing allows you to lower expenditures on fixed costs and control variable costs that can result in savings.</li>
                    <br>
                    <li>Time Management – By outsourcing the audit tasks, you can fully attend to business expansion. We will handle the time-consuming verification and documentation effectively using our skilled staff.</li>
                    <br>
                    <li>Quality Output – We offer a global knowledge base that delivers the same level of output, but with excellent quality.</li>
                    <br>
                    <li>Maximize Resources – Audit outsourcing provides you with flexibility and control, especially when there is a need for extra resources during peak seasons. At short notice, you have access to skilled and qualified professionals at your disposal.</li>
                    <br>
                    <li>Access to new markets – You will be able to gain access to new markets as you will be supported by our skilled resources.</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="6">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapseThree">
                    How do you ensure that my files and data are completely secure?
                </button>
            </h5>
        </div>
        <div id="collapsesix" class="collapse" aria-labelledby="6" data-parent="#accordion">
            <div class="card-body">
                We deploy a secured IT environment in compliance with ISMS 27001:2013, ACCA Platinum approved employer, ISO/IEC 27001:2013 and ISAE 3402. We employ modern security methods and technologies to keep your data safe, whether on your server, working in the cloud or when you upload work to our secure server. We sign Non-Disclosure Agreements before the free trials to ensure the confidentiality of data shared with us. </div>
        </div>
    </div>
    <br>
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