@extends('pages.layout.app')
@section('content')



    <section class="page-banner "  style="background-image:url('images/tm-enjoyment-1800x700.jpg');" ">
    <div class="row">
        <div class="small-12 medium-10 medium-centered columns">
            <div class="page-banner-content"id="page-banner-content">
                <h1>Treasury Management</h1>


                <p></p>

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
                    <p>Manage your cash flow effortlessly and securely through our complete range of Treasury Management products.</p>
                </div>
            </div>
        </div>

    </section><a class="section-anchor" id="section-2"></a>
    <section class="section-bg content_section  light-gray " style="">
        <div class="row wow fadeIn">
            <div class="small-12 medium-10 medium-centered columns">
                <h2 class="section-heading">Treasury Management Products</h2>
                <div class="row">
                    <div class="small-12 medium-11 medium-centered">
                        <p class="section-intro-content">Our products span four core capabilities: Account Management, Receivables & Payables, Capital Management and Risk Prevention</p>
                    </div>
                </div>
            </div>
        </div>

        <section class="content-section wow fadeIn">
            <div class="row">

                <div class="small-12 columns medium-9 small-centered">
                    <p><img class="aligncenter size-full wp-image-735" src="images/512e776f9c5d43bbafffb97adb08b2be.png" alt="" width="782" height="779" srcset="images/512E776F9C5D43BBAFFFB97ADB08B2BE.png 782w, images/512E776F9C5D43BBAFFFB97ADB08B2BE-150x150.png 150w, images/512E776F9C5D43BBAFFFB97ADB08B2BE-300x300.png 300w, images/512E776F9C5D43BBAFFFB97ADB08B2BE-768x765.png 768w" sizes="(max-width: 782px) 100vw, 782px" /></p>
                </div>
                </article>
        </section>

    </section><a class="section-anchor" id="section-3"></a>
    <section class="section-bg accordion  white " style="">
        <div class="row wow fadeIn">
            <div class="small-12 medium-10 medium-centered columns">
                <h2 class="section-heading">Popular Treasury Management Services</h2>
            </div>
        </div>
        <div class="section-anchor link-3" id="link"></div>
        <div class="row">
            <div class="small-12 columns">
                <ul class="accordion wow fadeIn" data-accordion data-allow-all-closed="true" data-multi-expand="true">
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-3">
                            <img class="show-for-medium icon-image " src="images/icon_online-bill-pay.svg" alt="Online Bill Pay" />
                            <span>Online Bill Pay</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <p>A secure online system that is easy to set up and maintain for businesses accepting one-time or reoccurring payments.</p>
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-3">
                            <img class="show-for-medium icon-image " src="images/icon_ach.svg" alt="ACH Origination & ACH Filters" />
                            <span>ACH Origination & ACH Filters</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <p>ACH Origination: A network that is commonly used for automatic deposit or withdrawal by businesses with payables and receivables.</p>
                            <p>ACH Filters: A filter that allows clients to block or allow only specific payment parameters of any ACH debit or credit.</p>
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-3">
                            <img class="show-for-medium icon-image " src="images/icon_remote-deposit.svg" alt="Remote Deposit" />
                            <span>Remote Deposit</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <p>An at-home desktop scanner that quickly and effortlessly deposits checks for busy business owners.</p>
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-3">
                            <img class="show-for-medium icon-image " src="images/icon_online-wires.svg" alt="Online Wires" />
                            <span>Online Wires</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <p>Immediate one-time or reoccurring transfers that securely take place from a personal computer.</p>
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-3">
                            <img class="show-for-medium icon-image " src="images/icon_positive-pay.svg" alt="Positive Pay" />
                            <span>Positive Pay</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <p>A service that detects and prevents check fraud by comparing cleared transactions with the business&#8217; own records.</p>
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-3">
                            <img class="show-for-medium icon-image " src="images/icon_email-alerts.svg" alt="Email Alerts" />
                            <span>Email Alerts</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <p>Immediate and customizable updates related to account activity, events and personalized messages.</p>
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
                <p x-ms-format-detection="none">Interested in banking with us? Send us a mail <a href="mailto:support@allyicb.com">support@allyicb.com</a></p>
            </div>
            <a href="contact"  class="small-12 medium-5 columns consultation-cta-right"  data-equalizer-watch>
                <p>Request a Consultation</p>
            </a>
        </div>
    </section>


@endsection
