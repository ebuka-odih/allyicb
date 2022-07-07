@extends('pages.layout.app')
@section('content')



    <section class="third-tier-nav">
        <div class="row">
            <div class="small-12 columns">
                <ul>
                    <li class="page_item page-item-1264"><a href="attract-and-retain">Attract and Retain Talent</a></li>
                    <li class="page_item page-item-1265 current_page_item"><a href="grow-your-medical-practice" aria-current="page">Grow Your Medical Practice Faster</a></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="page-banner "  style="background-image:url('images/banner-medical-grow-1800x700.jpg');" ">
    <div class="row">
        <div class="small-12 medium-10 medium-centered columns">
            <div class="page-banner-content"id="page-banner-content">
                <h1>Grow Your Medical Practice Faster</h1>


                <p><p>Through flexible lines of credit to help better manage cash flow</p>
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
        <div class="row wow fadeIn">
            <div class="small-12 medium-10 medium-centered columns">
                <h2 class="section-heading"></h2>
                <div class="row">
                    <div class="small-12 medium-11 medium-centered">
                        <p class="section-intro-content">Your goal is to be the best in your field. Allow us to help you grow your practice using our customized solutions built specifically for who — and where — you are in your career. We tailor our offerings to every stage of a doctor’s career lifecycle.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="small-12 medium-12 medium-centered  columns">
                <div class="intro-content wow fadeIn">
                </div>
            </div>
        </div>

    </section><a class="section-anchor" id="section-2"></a>
    <section class="section-bg accordion  light-gray " style="">
        <div class="row wow fadeIn">
            <div class="small-12 medium-10 medium-centered columns">
                <h2 class="section-heading">Early Stage Needs</h2>
                <div class="row">
                    <div class="small-12 medium-11 medium-centered">
                        <p class="section-intro-content">Whether you’re graduating from medical school or finishing up your residency, PFB Bank has solutions that can help you buy a first home, relocate or purchase a car, home furnishings or other essentials.

                        <h4 style="text-align: center;">Offerings</h4></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-anchor link-2" id="link"></div>
        <div class="row">
            <div class="small-12 columns">
                <ul class="accordion wow fadeIn" data-accordion data-allow-all-closed="true" data-multi-expand="true">
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-2">
                            <img class="show-for-medium icon-image " src="images/icon_physician-loans_new-physician-loans.svg" alt="PFB Mortgage Medical Lending" />
                            <span>PFB Mortgage Medical Lending</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <ul>
                                <li>Close up to 60 days before start date</li>
                                <li>Allows for MDPC Physicians to purchase home before filing taxes</li>
                            </ul>
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-2">
                            <img class="show-for-medium icon-image " src="images/icon__get-loan-approval.svg" alt="ForMed Loan" />
                            <span>ForMed Loan</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <ul>
                                <li>$100,000 Unsecured Loan</li>
                                <li>Can be used for down payment when using a PFB Medical Mortgage Loan</li>
                                <li>First 2 years interest only</li>
                            </ul>
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
    <section class="section-bg accordion  white " style="">
        <div class="row wow fadeIn">
            <div class="small-12 medium-10 medium-centered columns">
                <h2 class="section-heading">Practice/Partner Needs</h2>
                <div class="row">
                    <div class="small-12 medium-11 medium-centered">
                        <p class="section-intro-content">At this stage, you’re a few years into your career and likely have evolving financial needs, like wanting to buy into your practice or needing a construction loan for a new home. PFB Bank has the right solutions to match your needs.

                        <h4 style="text-align: center;">Offerings</h4></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-anchor link-3" id="link"></div>
        <div class="row">
            <div class="small-12 columns">
                <ul class="accordion wow fadeIn" data-accordion data-allow-all-closed="true" data-multi-expand="true">
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-3">
                            <img class="show-for-medium icon-image " src="images/icon_practice-buy-in-loan.svg" alt="Practice Buy-in Loan" />
                            <span>Practice Buy-in Loan</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <ul>
                                <li>Finance 100% of Buy In</li>
                                <li>7-Year prepayment term</li>
                                <li>Great terms make repayment and work/life balance easy</li>
                            </ul>
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-3">
                            <img class="show-for-medium icon-image " src="images/icon_portfolio-jumbos.svg" alt="One-Time Close Construction and Jumbo Mortgage Lending" />
                            <span>One-Time Close Construction and Jumbo Mortgage Lending</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <ul>
                                <li>Easy process</li>
                                <li>Attractive rates and terms</li>
                                <li>Specialized for the medical community, higher loan to values for physicians and other professionals</li>
                            </ul>
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-3">
                            <img class="show-for-medium icon-image " src="images/icon_business-lines-of-credit.svg" alt="ForMed Line of Credit" />
                            <span>ForMed Line of Credit</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <ul>
                                <li>Flexible, interest only</li>
                                <li>Can be used for any purpose</li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <div id="accordion-toggle" class="button toggle-3 secondary wow fadeInUp" >View All Details</div>
            </div>
        </div>

        <script>

            $('#accordion-toggle.toggle-3').click(function() {

                if ( !$(this).hasClass('expanded') ) {

                    $(this).addClass('expanded');
                    $(this).text('View Fewer Details');
                    $('.accordion-title.title-3').each(function() {
                        if ( !$(this).parent().hasClass('is-active') ) {
                            $(this).click();
                        }


                    });
                }
                else {
                    $(this).removeClass('expanded');
                    $(this).text('View All Details');
                    $('.accordion-title.title-3').each(function() {
                        if ( $(this).parent().hasClass('is-active') ) {
                            $(this).click();
                        }

                    });
                }

            });

            $("#accordion-toggle.toggle-3").click(function() {
                $('html, body').animate({
                    scrollTop: $("#link.link-3").offset().top - 100
                }, 200);
            });


        </script>
    </section><a class="section-anchor" id="section-4"></a>
    <section class="section-bg accordion  light-gray " style="">
        <div class="row wow fadeIn">
            <div class="small-12 medium-10 medium-centered columns">
                <h2 class="section-heading">Established Doctor Needs</h2>
                <div class="row">
                    <div class="small-12 medium-11 medium-centered">
                        <p class="section-intro-content">If you’ve been in your practice for longer than three years, chances are your financial needs are a bit more complex. PFB Bank has you covered. Whether you’re looking for a mortgage for larger home, a line of credit for personal or business needs, wanting to finance practice or equipment upgrades, or need a commercial real estate loan, we can help.

                        <h4 style="text-align: center;">Offerings</h4></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-anchor link-4" id="link"></div>
        <div class="row">
            <div class="small-12 columns">
                <ul class="accordion wow fadeIn" data-accordion data-allow-all-closed="true" data-multi-expand="true">
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-4">
                            <img class="show-for-medium icon-image " src="images/icon_practice-financing.svg" alt="Practice/Equipment Finance" />
                            <span>Practice/Equipment Finance</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <ul>
                                <li>Finance 100% of equipment</li>
                                <li>7- to 10-year repayment term</li>
                            </ul>
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-4">
                            <img class="show-for-medium icon-image " src="images/icon_portfolio-jumbos.svg" alt="One Time Close Construction and Jumbo Mortgage Lending" />
                            <span>One Time Close Construction and Jumbo Mortgage Lending</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <ul>
                                <li>Easy process</li>
                                <li>Attractive rates and terms</li>
                                <li>Specialized for the medical community, higher loan to values for physicians and other professionals</li>
                            </ul>
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-4">
                            <img class="show-for-medium icon-image " src="images/icon_medical-commercial-real-estate.svg" alt="Commercial Real Estate" />
                            <span>Commercial Real Estate</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <ul>
                                <li>85% LTV</li>
                                <li>25-year amortization available</li>
                                <li>5- and 10-year terms</li>
                            </ul>
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-4">
                            <img class="show-for-medium icon-image " src="images/icon_business-lines-of-credit.svg" alt="ForMed Line of Credit" />
                            <span>ForMed Line of Credit</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <ul>
                                <li>Flexible, interest only</li>
                                <li>Can be used for any purpose</li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <div id="accordion-toggle" class="button toggle-4 secondary wow fadeInUp" >View All Details</div>
            </div>
        </div>

        <script>

            $('#accordion-toggle.toggle-4').click(function() {

                if ( !$(this).hasClass('expanded') ) {

                    $(this).addClass('expanded');
                    $(this).text('View Fewer Details');
                    $('.accordion-title.title-4').each(function() {
                        if ( !$(this).parent().hasClass('is-active') ) {
                            $(this).click();
                        }


                    });
                }
                else {
                    $(this).removeClass('expanded');
                    $(this).text('View All Details');
                    $('.accordion-title.title-4').each(function() {
                        if ( $(this).parent().hasClass('is-active') ) {
                            $(this).click();
                        }

                    });
                }

            });

            $("#accordion-toggle.toggle-4").click(function() {
                $('html, body').animate({
                    scrollTop: $("#link.link-4").offset().top - 100
                }, 200);
            });


        </script>
    </section>


    <section class="consultation-cta">
        <div class= "row medium-collapse full-width" data-equalizer data-equalize-on="medium">
            <div class="small-12 medium-7 columns consultation-cta-left" data-equalizer-watch>
                <p x-ms-format-detection="none">Interested in banking with us? Send us a mail <a href="mailto:support@allyicb.com">support@allyicb.com</a></p>
            </div>
            <a href="contact"  class="small-12 medium-5 columns consultation-cta-right"  data-equalizer-watch>
                <p>Request a Consultation</p>
            </a>
        </div>
    </section>

@endsection
