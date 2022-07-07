@extends('pages.layout.app')
@section('content')


    <section class="page-banner "  style="background-image:url('images/banner-improve.jpg');" ">
    <div class="row">
        <div class="small-12 medium-10 medium-centered columns">
            <div class="page-banner-content"id="page-banner-content">
                <h1>Workplace Banking</h1>


                <p><p>Improve employee satisfaction with exclusive employee benefits.</p>
                </p>

                <!-- End if page sub nav -->


                <!-- End if page builder -->


            </div>
        </div>
    </div>
    </section>
    <!-- End check that page is not home or front -->


    <a class="section-anchor" id="section-1"></a>
    <section class="section-bg intro_section  white " style="">

        <div class="row">
            <div class="small-12 medium-12 medium-centered  columns">
                <div class="intro-content wow fadeIn">
                    <p>Workplace Banking provides special offers and discounts for employees of approved companies that have operating, trust or escrow accounts with Ally international Commerce Bank.</p>
                </div>
            </div>
        </div>

    </section><a class="section-anchor" id="section-2"></a>
    <section class="section-bg accordion  light-gray " style="">
        <div class="row wow fadeIn">
            <div class="small-12 medium-10 medium-centered columns">
                <h2 class="section-heading">Benefits For Your Employees</h2>
            </div>
        </div>
        <div class="section-anchor link-2" id="link"></div>
        <div class="row">
            <div class="small-12 columns">
                <ul class="accordion wow fadeIn" data-accordion data-allow-all-closed="true" data-multi-expand="true">
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-2">
                            <img class="show-for-medium icon-image " src="images/icon_private-banking-benefits.svg" alt="Private Banking Benefits" />
                            <span>Private Banking Benefits</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <p>All employees that bank with us will experience world-class service provided by our Concierge Team.</p>
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-2">
                            <img class="show-for-medium icon-image " src="images/icon_deposit-products-benefits.svg" alt="Deposit Product Benefits" />
                            <span>Deposit Product Benefits</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <p>Our Workplace Banking program offers preferred rates on Platinum Checking, Savings or Money Market accounts, with no minimum balance requirements, complimentary checks, and waived ATM fees nationwide.†</p>
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-2">
                            <img class="show-for-medium icon-image " src="images/icon_residential-lending-benefits.svg" alt="Residential Loan Benefits" />
                            <span>Residential Loan Benefits</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <p>Workplace Banking also comes with Residential Loan benefits. Employees that bank with us can receive closing cost credit when they open a Ally international Commerce Bank Checking account and receive a debit card. On our Portfolio Loans employees can obtain interest rate credit for establishing Auto Pay (from their Ally international Commerce Bank Checking account to their Ally international Commerce Bank Loan) and Direct Deposit.</p>
                        </div>
                    </li>
                </ul>
                <div id="accordion-toggle" class="button toggle-2 secondary wow fadeInUp" >View All Details</div>
            </div>
        </div>

        <script>

            $('#accordion-toggle.toggle-2').click(function() {

                if ( !$(this).hasClass('expanded') ) {

                    $(this).addClass('expanded');
                    $(this).text('View Fewer Details');
                    $('.accordion-title.title-2').each(function() {
                        if ( !$(this).parent().hasClass('is-active') ) {
                            $(this).click();
                        }


                    });
                }
                else {
                    $(this).removeClass('expanded');
                    $(this).text('View All Details');
                    $('.accordion-title.title-2').each(function() {
                        if ( $(this).parent().hasClass('is-active') ) {
                            $(this).click();
                        }

                    });
                }

            });

            $("#accordion-toggle.toggle-2").click(function() {
                $('html, body').animate({
                    scrollTop: $("#link.link-2").offset().top - 100
                }, 200);
            });


        </script>
    </section><a class="section-anchor" id="section-3"></a>
    <section class="section-bg values  white " style="">
        <div class="row wow fadeIn">
            <div class="small-12 medium-10 medium-centered columns">
                <h2 class="section-heading">Employer Benefits</h2>
                <div class="row">
                    <div class="small-12 medium-11 medium-centered">
                        <p class="section-intro-content">We understand that employee privacy is important to you, so we’ve developed resources to help you communicate employee benefits through your existing HR systems and processes.  When you launch Ally international Commerce Bank Workplace Banking, we can help you with the following resources:</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="small-12 large-4 columns">
                <div class="value-item">
                    <div class="row">
                        <div class="small-12 medium-2 large-3 columns">
                            <img class="icon-image  wow fadeIn" data-wow-delay=".25s" src="images/icon_lunch-learn.svg" alt="Lunch and Learn" />
                        </div>
                        <div class="small-12 medium-10 large-9 columns wow fadeIn">
                            <h6>Lunch and Learn</h6>
                            <p><p>We have a passion for educating and equipping our clients. Contact us to hear more about Lunch &amp; Learns offered to clients and their employees &#8211; on your time table, at your office.</p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="small-12 large-4 columns">
                <div class="value-item">
                    <div class="row">
                        <div class="small-12 medium-2 large-3 columns">
                            <img class="icon-image  wow fadeIn" data-wow-delay=".25s" src="images/icon_email-web-resources.svg" alt="Email and Web Resources" />
                        </div>
                        <div class="small-12 medium-10 large-9 columns wow fadeIn">
                            <h6>Email and Web Resources</h6>
                            <p><p>Employees will have direct access to our Concierge Team and Online Banking once they bank with us.</p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="small-12 large-4 columns">
                <div class="value-item">
                    <div class="row">
                        <div class="small-12 medium-2 large-3 columns">
                            <img class="icon-image  wow fadeIn" data-wow-delay=".25s" src="images/icon_new-employee-support.svg" alt="New Employee Orientation Support" />
                        </div>
                        <div class="small-12 medium-10 large-9 columns wow fadeIn">
                            <h6>New Employee Orientation Support</h6>
                            <p><p>Inquire and we&#8217;ll send you a datasheet introducing Ally international Commerce Bank and our Workplace Banking program. We find this is a useful tool in New Employee Orientation packets.</p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>


    <section class="consultation-cta">
        <div class= "row medium-collapse full-width" data-equalizer data-equalize-on="medium">
            <div class="small-12 medium-7 columns consultation-cta-left" data-equalizer-watch>
                <p x-ms-format-detection="none">Get started with Workplace Banking today! Call +1 917 396 5014 or +44 208 040 4435</p>
            </div>
            <a href="contact.html"  class="small-12 medium-5 columns consultation-cta-right"  data-equalizer-watch>
                <p>Request a Consultation</p>
            </a>
        </div>
    </section>
    <section class="fine-print">
        <p class="disclaimer-text">† ATM fees are waived for both Ally international Commerce Bank and the owner of the ATM<br />
        </p>
    </section>

@endsection
