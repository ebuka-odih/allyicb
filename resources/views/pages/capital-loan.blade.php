@extends('pages.layout.app')
@section('content')



    <section class="third-tier-nav">
        <div class="row">
            <div class="small-12 columns">
                <ul>
                    <li class="page_item page-item-991"><a href="credit">Grow Your Law Firm Faster</a></li>
                    <li class="page_item page-item-993 current_page_item"><a href="capital-loan" aria-current="page">Attract and Retain Talent</a></li>
                    <li class="page_item page-item-992"><a href="efficiency">Improve Efficiency</a></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="page-banner "  style="background-image:url('images/banner-workplace-1.jpg');" ">
    <div class="row">
        <div class="small-12 medium-10 medium-centered columns">
            <div class="page-banner-content"id="page-banner-content">
                <h1>Attract and Retain Talent</h1>


                <p><p>Help great people grow your law firm</p>
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
                    <p>You’ve made a commitment to Ally international Commerce Bank, now let us help you retain the people who will be critical to the growth of your company. Introducing Ally international Commerce Bank Partner Capital Loans and Workplace Benefits.</p>
                </div>
            </div>
        </div>

    </section><a class="section-anchor" id="section-2"></a>
    <section class="section-bg split_image_section  light-gray " style="">

        <div class="row align-middle">
            <div class="split-image-right align-middle">
                <div class="small-12 medium-6 columns">
                    <div class="split-content wow fadeInLeft">
                        <h3>Partner Capital Loans</h3>
                        <p><p>Ally international Commerce Bank Partner Capital Loans offer a way for new partners to buy-in or existing partners to increase their stake in the company.  Benefits include:</p>
                        <ul>
                            <li>Reduced financial burden on your firm</li>
                            <li>Customized to fit your firm</li>
                            <li>Long-term financing at attractive rates</li>
                            <li> Great terms that help lower the partner’s financial burden</li>
                        </ul>
                        </p>
                    </div>
                </div>
                <div class="small-12 medium-5 medium-offset-1 columns">
                    <img class="split-image wow fadeInRight" src="images/employee-benfits.jpg" alt="offering partner capital loans" />
                </div>
            </div>
        </div>
    </section>


    </section><a class="section-anchor" id="section-3"></a>
    <section class="section-bg accordion  white " style="">
        <div class="row wow fadeIn">
            <div class="small-12 medium-10 medium-centered columns">
                <h2 class="section-heading">Workplace Banking</h2>
                <div class="row">
                    <div class="small-12 medium-11 medium-centered">
                        <p class="section-intro-content">Workplace Benefits provide special offers and discounts for employees of approved companies that have operating, trust or escrow accounts with Ally international Commerce Bank.  Your team will have access to:</p>
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
                            <img class="show-for-medium icon-image " src="images/icon_residential-lending-benefits.svg" alt="Residential Lending Benefits" />
                            <span>Residential Lending Benefits</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <ul>
                                <li>Interest Only loans at attractive rates.</li>
                                <li>All Residential Loans: Get a closing cost credit when you open PFB Checking and Savings Accounts and get the PFB debit card.</li>
                                <li>Portfolio Loans: Get an interest rate credit when you use Auto Pay and Direct Deposit from your PFB account.</li>
                            </ul>
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-3">
                            <img class="show-for-medium icon-image " src="images/icon_deposit-products-benefits.svg" alt="Deposit Product Benefits" />
                            <span>Deposit Product Benefits</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <ul>
                                <li>Platinum Checking account with preferential interest rates.</li>
                                <li>Platinum Savings or Money Market accounts with preferential interest rates.</li>
                                <li>All ATM fees waived nationwide. ††</li>
                                <li>No minimum balance.</li>
                                <li>Complimentary checks.</li>
                            </ul>
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-3">
                            <img class="show-for-medium icon-image " src="images/icon_private-banking-benefits.svg" alt="Private Banking Benefits" />
                            <span>Private Banking Benefits</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <ul>
                                <li>A dedicated private banking team for all of your personalized banking needs.</li>
                                <li>Direct access to your Private Banker.</li>
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
    <section class="fine-print">
        <p class="disclaimer-text">†† ATM fees are waived for both Ally international Commerce Bank and the owner of the ATM<br />
        </p>
    </section>


@endsection
