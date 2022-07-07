@extends('pages.layout.app')
@section('content')

    <section class="page-banner "  style="background-image:url('images/woman-at-home-e1547687859592-1252x700.jpg');" ">
    <div class="row">
        <div class="small-12 medium-10 medium-centered columns">
            <div class="page-banner-content"id="page-banner-content">
                <h1>Personal Banking</h1>


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
                    <p>Work with a dedicated private banking team to improve your banking experience. Confidently choose products and services that suit your needs.</p>
                </div>
            </div>
        </div>

    </section><a class="section-anchor" id="section-2"></a>
    <section class="section-bg accordion  light-gray " style="">
        <div class="row wow fadeIn">
            <div class="small-12 medium-10 medium-centered columns">
                <h2 class="section-heading">Personal Banking Services</h2>
            </div>
        </div>
        <div class="section-anchor link-2" id="link"></div>
        <div class="row">
            <div class="small-12 columns">
                <ul class="accordion wow fadeIn" data-accordion data-allow-all-closed="true" data-multi-expand="true">
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-2">
                            <img class="show-for-medium icon-image " src="images/icon_residential-lending.svg" alt="Residential Loans" />
                            <span>Residential Loans</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <p>Whether you are looking to purchase an existing property, renovate, or build something new, we specialize in determining the loan structure that is right for you, including one-time close construction-to-permanent and jumbo loans.<br />
                                <a class="button text-link" >Learn more about residential lending</a></p>
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-2">
                            <img class="show-for-medium icon-image " src="{{ asset('images/icon_personal-lending.svg') }}" alt="Personal Loans" />
                            <span>Personal Loans</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <p>Explore a range of flexible loan options that will meet your personal financing needs.</p>
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-2">
                            <img class="show-for-medium icon-image " src="{{ asset('images/icon_deposit-accounts-37.svg') }}" alt="Deposit Accounts" />
                            <span>Deposit Accounts</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <p>Our suite of checking, savings, money market, and CD accounts offer a range of options to suit your financial goals.</p>
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-2">
                            <img class="show-for-medium icon-image " src="{{ asset('images/icon_debit-card.svg') }}" alt="Debit Cards" />
                            <span>Debit Cards</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <p>Enjoy secure access to your funds 24/7. Ally international Commerce Bank Debit Cards work at ATMs and merchants around the world.</p>
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title title-2">
                            <img class="show-for-medium icon-image " src="{{ asset('images/icon_online-and-mobile-banking.svg') }}" alt="Online and Mobile Banking" />
                            <span>Online and Mobile Banking</span>
                        </a>
                        <div class="accordion-content" data-tab-content>
                            <p>At home or on-the-go, manage your accounts with the Ally international Commerce Bank online banking platform and mobile app.</p>
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
    <section class="section-bg additional_modules slider_module white " style="">
        <script src="{{ asset('images/jquery.pietimer.min.js') }}"></script>
        <section class="full-width-slider-wrap wow fadeIn">

            <section class="full-width-slider" >
                <div class="slider-item testimonial-slide" style="background-image:url('images/chriselliott-1920-800-min.jpg'); background-position:center 30%">

                    <div class="slider-content  wow fadeIn">
                        <div class="row">

                            <div class="small-12 medium-10 large-8 columns">
                                <p class="slider-text">If I had to describe Ally international Commerce Bank in three words, I’d use confidence, security, and consideration. They are always there for me.</p>
                                <p class="testimonial-slider-info"><strong>Chris Elliott</strong>                      </p>
                                <a href="/" class="button">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div  style="display:none;" >
                <div class="slider-nav-thumbnails">

                    <div class="slider-thumb">
                        <div class="pietimer"></div>
                        <img class="" src="{{ asset('images/chriselliott-thumbnail-150x150.jpg') }}" alt="ChrisElliott-thumbnail" />
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
