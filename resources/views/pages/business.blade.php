@extends('pages.layout.app')
@section('content')


    <section class="page-banner "  style="background-image:url('images/contact-1800x700.jpg');" ">
    <div class="row">
        <div class="small-12 medium-10 medium-centered columns">
            <div class="page-banner-content"id="page-banner-content">
                <h1>Business Banking</h1>


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
                    <p>Focus on growing your business - let us help with the details. We offer a suite of treasury management products for effortless business banking. Enjoy working and banking remotely with Ally international Commerce Bank online banking, remote scanner deposit, mobile deposit, and more.</p>
                </div>
            </div>
        </div>

    </section><a class="section-anchor" id="section-2"></a>
    <section class="section-bg accordion  light-gray " style="">
        <div class="row wow fadeIn">
            <div class="small-12 medium-10 medium-centered columns">
                <h2 class="section-heading">Business Banking Services</h2>
            </div>
        </div>
        <div class="section-anchor link-2" id="link"></div>
        <div class="row">
            <div class="small-12 columns">
                <ul class="accordion wow fadeIn" data-accordion data-allow-all-closed="true" data-multi-expand="true">
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-2">
                            <img class="show-for-medium icon-image " src="{{ asset('images/icon_legal-banking.svg') }}" alt="Law Firm Banking" />
                            <span>Law Firm Banking</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <p>Our industry experts can help you with our suite of products and world class services designed to meet the financial needs of your modern law firm.</p>
                            <p><a class="button text-link" href="lawfirm">Learn More About Law Firm Banking</a></p>
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-2">
                            <img class="show-for-medium icon-image " src="images/icon-workplace-banking_workplace-banking.svg" alt="Workplace Banking" />
                            <span>Workplace Banking</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <p><span style="font-weight: 400;">Benefits for employees of approved companies that have operating, trust or escrow accounts with Ally international Commerce Bank.</span></p>
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-2">
                            <img class="show-for-medium icon-image " src="images/icon_deposit-accounts-24.svg" alt="Deposit Accounts" />
                            <span>Deposit Accounts</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <p>Your dedicated private banking team will work with you to determine which checking, savings, and money market accounts fit best with your company’s financial plan and vision for growth.</p>
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-2">
                            <img class="show-for-medium icon-image " src="images/icon_treasury-management.svg" alt="Treasury Management" />
                            <span>Treasury Management</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <p>Manage your cash flow effectively, efficiently, easily and securely through the complete range of Treasury Management and escrow services from Ally international Commerce Bank.</p>
                            <p><a class="button text-link" href="http://fortisprivateb.staging.wpengine.com/business/treasury-management/">Learn more about Treasury Management</a></p>
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-2">
                            <img class="show-for-medium icon-image " src="images/icon_corporate-online-and-mobile-banking.svg" alt="Corporate Online and Mobile Banking" />
                            <span>Corporate Online and Mobile Banking</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <p>Secure mobile access to your business accounts via computer or mobile devices allows you to manage company cash flow anytime, from anywhere.</p>
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-2">
                            <img class="show-for-medium icon-image " src="images/icon_business-lines-of-credit.svg" alt="Business Lines of Credit and Loans" />
                            <span>Business Lines of Credit and Loans</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <p><span style="font-weight: 400;">Your Ally international Commerce Bank team can assist you with short and long-term financing solutions.  Whether you’re funding working capital for your business, a partner buy-in, or financing the acquisition of a competitor, Ally international Commerce Bank has the expertise to help you achieve your goals.</span></p>
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-2">
                            <img class="show-for-medium icon-image " src="images/icon_commercial-real-estate-loans.svg" alt="Commercial Real Estate Loans" />
                            <span>Commercial Real Estate Loans</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <p><span style="font-weight: 400;">Use our extensive expertise in commercial property finance and innovative lending solutions to help you lock in long-term fixed interest rates.</span></p>
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
    <section class="section-bg callout_section   " style="">

        <section class="callout-cta callout-bg-dark-gray clearfix">
            <div class="row align-middle">
                <div class="small-12 medium-7 large-8 columns">
                    <h3>Law Firm Banking</h3>
                    <p><p> Find out how our industry experts can help you with our suite of products and world class services for your modern law firm.</p>
                    </p>
                </div>
                <div class="small-12 medium-5 large-3 large-offset-1 columns">
                    <div class="callout-button-wrap wow">
                        <a href="lawfirm.html" class="button" >Learn More</a>
                    </div>
                </div>
            </div>
        </section>

    </section><a class="section-anchor" id="section-4"></a>
    <section class="section-bg additional_modules slider_module white " style="">
        <script src="images/jquery.pietimer.min.js"></script>
        <section class="full-width-slider-wrap wow fadeIn">

            <section class="full-width-slider" >
                <div class="slider-item testimonial-slide" style="background-image:url('images/alanshafner-testimonial-min.jpg'); background-position:70% 30%">

                    <div class="slider-content  wow fadeIn">
                        <div class="row">

                            <div class="small-12 medium-10 large-8 columns">
                                <p class="slider-text"><span style="letter-spacing: -1.5px;">With Ally international Commerce Bank, it’s not like I'm working with a bank, they're my friends and they’re looking out for me.</span></p>
                                <p class="testimonial-slider-info"><strong>Alan Shafner</strong>                      </p>
                                <a href="our-ceo" class="button">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div  style="display:none;" >
                <div class="slider-nav-thumbnails">

                    <div class="slider-thumb">
                        <div class="pietimer"></div>
                        <img class="" src="{{ asset('images/alanshafner-testimonial-thumb-min-150x150.jpg') }}" alt="Alan Shafner Headshot" />
                        <!-- <div class="slider-progress">
                          <div class="progress"></div>
                        </div> -->
                    </div>

                </div>
            </div>

        </section>

        <script>
            $(document).ready(function(){






                var $slider_full_width = $(".full-width-slider").slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                    fade: true,
                    infinite: true,
                    autoplay: true,
                    autoplaySpeed: 5000,
                    lazyLoad: 'ondemand',
                    accessibility: 'true',
                    asNavFor: '.slider-nav-thumbnails',
                })



                    .on('afterChange', function( e, slick, currentSlide ) {

                        $('.slick-slide canvas').remove();
                        $('.slick-current .pietimer').pietimer({
                            seconds: 5,
                            color: 'rgba(0, 0, 0, 0.4)',
                            height: 170,
                            width: 170
                        });
                        $('.slick-current .pietimer').pietimer('start');
                    });



                $('.slider-nav-thumbnails').slick({
                    slidesToShow: 5,
                    slidesToScroll: 1,
                    asNavFor: '.full-width-slider',
                    dots: true,
                    infinite: true,
                    lazyLoad: 'ondemand',
                    focusOnSelect: true,
                    accessibility: 'true',
                    autoplaySpeed: 5000,
                });

                // Remove active class from all thumbnail slides
                $('.slider-nav-thumbnails .slick-slide').removeClass('slick-active');

                // Set active class to first thumbnail slides
                $('.slider-nav-thumbnails .slick-slide').eq(0).addClass('slick-active');

                // On before slide change match active thumbnail to current slide
                $('.full-width-slider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
                    var mySlideNumber = nextSlide;
                    $('.slider-nav-thumbnails .slick-slide').removeClass('slick-active');
                    $('.slider-nav-thumbnails .slick-slide').eq(mySlideNumber).addClass('slick-active');
                });

                $('.slick-current .pietimer').pietimer({
                    seconds: 5,
                    color: 'rgba(0, 0, 0, 0.4)',
                    height: 170,
                    width: 170
                });
                $('.slick-current .pietimer').pietimer('start');


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
