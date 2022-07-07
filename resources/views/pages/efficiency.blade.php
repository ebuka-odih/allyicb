@extends('pages.layout.app')
@section('content')



    <section class="third-tier-nav">
        <div class="row">
            <div class="small-12 columns">
                <ul>
                    <li class="page_item page-item-991"><a href="credit">Grow Your Law Firm Faster</a></li>
                    <li class="page_item page-item-993"><a href="capital-loan">Attract and Retain Talent</a></li>
                    <li class="page_item page-item-992 current_page_item"><a href="efficiency" aria-current="page">Improve Efficiency</a></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="page-banner "  style="background-image:url('images/banner-improve.jpg');" ">
    <div class="row">
        <div class="small-12 medium-10 medium-centered columns">
            <div class="page-banner-content"id="page-banner-content">
                <h1>Improve Efficiency</h1>


                <p><p>With Escrow and Treasury Management Products for Your Law Firm</p>
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
                    <p>We specialize in flexible escrow options and treasury management products designed to help improve your law firm’s cash flow.</p>
                </div>
            </div>
        </div>

    </section><a class="section-anchor" id="section-2"></a>
    <section class="section-bg accordion  light-gray " style="">
        <div class="row wow fadeIn">
            <div class="small-12 medium-10 medium-centered columns">
                <h2 class="section-heading">Escrow Products</h2>
                <div class="row">
                    <div class="small-12 medium-11 medium-centered">
                        <p class="section-intro-content">With the service expertise to act as a 3rd party agent, Ally international Commerce Bank offers escrow products for</p>
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
                            <img class="show-for-medium icon-image " src="images/icons_mergers-and-acuisitions.svg" alt="Mergers & Acquisitions" />
                            <span>Mergers & Acquisitions</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <p>We can help safeguard against potential losses and ensure distributions upon milestone completion.</p>
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-2">
                            <img class="show-for-medium icon-image " src="images/icons_indemnification.svg" alt="Indemnification" />
                            <span>Indemnification</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <p>We help ensure distribution that can reduce losses arising from a breach of indemnities.</p>
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-2">
                            <img class="show-for-medium icon-image " src="images/icons_litigation.svg" alt="Litigation" />
                            <span>Litigation</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <p>We help safeguard assets during the appeal and settlement processes</p>
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-2">
                            <img class="show-for-medium icon-image " src="images/icons_other-transactions.svg" alt="Other transactions" />
                            <span>Other transactions</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <p>Private placement, real estate &amp; more</p>
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
                <h2 class="section-heading">Treasury Management Products</h2>
                <div class="row">
                    <div class="small-12 medium-11 medium-centered">
                        <p class="section-intro-content">Product highlights and benefits include:</p>
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
                            <img class="show-for-medium icon-image " src="images/icon_attitude.svg" alt="Colorado Lawyer Trust Account Fund (COLTAF) Accounts and Interest on Lawyer Trust Accounts (IOLTA)" />
                            <span>Colorado Lawyer Trust Account Fund (COLTAF) Accounts and Interest on Lawyer Trust Accounts (IOLTA)</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <p>Ally international Commerce Bank has been certified as eligible to open COLTAF accounts in Colorado and IOLTA account sin Utah.  The accounts help fund nonprofit organizations that provide civil legal aid for low-income people.</p>
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-3">
                            <img class="show-for-medium icon-image " src="images/icon_deposit-accounts-37.svg" alt="Deposit Accounts" />
                            <span>Deposit Accounts</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <p>Our exclusive checking, savings, money market, and CD accounts offer a range of options to suit you—all delivered with our signature client service.</p>
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-3">
                            <img class="show-for-medium icon-image " src="images/icon_online-bill-pay.svg" alt="Online Bill Pay" />
                            <span>Online Bill Pay</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <p>Ally international Commerce Bank provides a secure online system that is easy to set up and maintain if your business is looking to accept one-time or reoccurring payments.</p>
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-3">
                            <img class="show-for-medium icon-image " src="images/icon_remote-deposit.svg" alt="Remote Deposit" />
                            <span>Remote Deposit</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <p>Ally international Commerce Bank delivers an at-home desktop scanner that quickly and effortlessly helps you deposits checks.</p>
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-3">
                            <img class="show-for-medium icon-image " src="images/icon_online-wires.svg" alt="Online Wires" />
                            <span>Online Wires</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <p>Ally international Commerce Bank provides immediate one-time or reoccurring transfers that securely take place from your personal computer.</p>
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-3">
                            <img class="show-for-medium icon-image " src="images/icon_positive-pay.svg" alt="Positive Pay" />
                            <span>Positive Pay</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <p>Ally international Commerce Bank offers a service that detects and prevents check fraud by comparing check transactions with your records before final payment by the bank.</p>
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-3">
                            <img class="show-for-medium icon-image " src="images/icon_email-alerts.svg" alt="Email Alerts" />
                            <span>Email Alerts</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <p>With Ally international Commerce Bank online banking, you can create customizable updates that immediately notify you of account activity and events.</p>
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
    </section>


    <section class="consultation-cta">
        <div class= "row medium-collapse full-width" data-equalizer data-equalize-on="medium">
            <div class="small-12 medium-7 columns consultation-cta-left" data-equalizer-watch>
                <p x-ms-format-detection="none">Interested in banking with us? Call +1 332 205 6688 or +44 208 040 4435</p>
            </div>
            <a href="index-32.html"  class="small-12 medium-5 columns consultation-cta-right"  data-equalizer-watch>
                <p>Request a consultation today</p>
            </a>
        </div>
    </section>

@endsection

