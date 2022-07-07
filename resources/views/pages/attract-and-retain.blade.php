@extends('pages.layout.app')
@section('content')



    <section class="third-tier-nav">
        <div class="row">
            <div class="small-12 columns">
                <ul>
                    <li class="page_item page-item-1264 current_page_item"><a href="index-34.html" aria-current="page">Attract and Retain Talent</a></li>
                    <li class="page_item page-item-1265"><a href="index-33.html">Grow Your Medical Practice Faster</a></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="page-banner "  style="background-image:url('images/banner-medical-talent-1800x700.jpg');" ">
    <div class="row">
        <div class="small-12 medium-10 medium-centered columns">
            <div class="page-banner-content"id="page-banner-content">
                <h1>Attract and Retain Talent</h1>


                <p><p>A Better Banking Experience for Your Medical Practice</p>
                </p>

                <!-- End if page sub nav -->


                <!-- End if page builder -->


            </div>
        </div>
    </div>
    </section>
    <!-- End check that page is not home or front -->


    <a class="section-anchor" id="section-1"></a>
    <section class="section-bg accordion  white " style="">
        <div class="row wow fadeIn">
            <div class="small-12 medium-10 medium-centered columns">
                <h2 class="section-heading"></h2>
                <div class="row">
                    <div class="small-12 medium-11 medium-centered">
                        <p class="section-intro-content">People are the lifeblood of any successful venture. And it’s especially true for medical practices. AllyICB gives you an edge in recruiting with the tools you need to get the people you want.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-anchor link-1" id="link"></div>
        <div class="row">
            <div class="small-12 columns">
                <ul class="accordion wow fadeIn" data-accordion data-allow-all-closed="true" data-multi-expand="true">
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-1">
                            <img class="show-for-medium icon-image " src="images/icon_physician-loans_new-physician-loans.svg" alt="Practice Buy-In Loans" />
                            <span>Practice Buy-In Loans</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <ul>
                                <li>Keeps capital in the practice to grow and expand</li>
                                <li>Great terms makes repayment easy</li>
                                <li>Customized to fit your practice</li>
                            </ul>
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-1">
                            <img class="show-for-medium icon-image " src="images/icon_private-banking-benefits.svg" alt="Dedicated Private Banking Team" />
                            <span>Dedicated Private Banking Team</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <ul>
                                <li>Personalized, concierge service</li>
                            </ul>
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-1">
                            <img class="show-for-medium icon-image " src="images/icon_positive-pay.svg" alt="Workplace Banking Benefits" />
                            <span>Workplace Banking Benefits</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <ul>
                                <li>Interest-only mortgage loans</li>
                                <li>Below market mortgage rates</li>
                                <li>No-fee checking account that pays interest</li>
                                <li>ATM fees reimbursed nationwide</li>
                                <li>Complimentary checks</li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <div id="accordion-toggle" class="button toggle-1 secondary wow fadeInUp" >View All Details</div>
            </div>
        </div>

        <script>

            $('#accordion-toggle.toggle-1').click(function() {

                if ( !$(this).hasClass('expanded') ) {

                    $(this).addClass('expanded');
                    $(this).text('View Fewer Details');
                    $('.accordion-title.title-1').each(function() {
                        if ( !$(this).parent().hasClass('is-active') ) {
                            $(this).click();
                        }


                    });
                }
                else {
                    $(this).removeClass('expanded');
                    $(this).text('View All Details');
                    $('.accordion-title.title-1').each(function() {
                        if ( $(this).parent().hasClass('is-active') ) {
                            $(this).click();
                        }

                    });
                }

            });

            $("#accordion-toggle.toggle-1").click(function() {
                $('html, body').animate({
                    scrollTop: $("#link.link-1").offset().top - 100
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
