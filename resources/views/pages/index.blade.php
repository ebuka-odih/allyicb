@extends('pages.layout.app')
@section('content')
<!-- End check that page is not home or front -->


<a class="section-anchor" id="section-1"></a>
<section class="section-bg additional_modules slider_module white " style="">
    <script src="images/jquery.pietimer.min.js"></script>
    <section class="full-width-slider-wrap wow fadeIn">

        <section class="full-width-slider" >
            <div class="slider-item " style="background-image:url('images/teamshake.jpg'); ">

                <div class="slider-content  wow fadeIn">
                    <div class="row">

                        <div class="small-12 medium-10 large-8 columns">
                            <h1>Empowering Individuals & Businesses to Achieve More</h1>
                            <a href="about.html" class="button" >About AllyiCB</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item " style="background-image:url('images/rawpixel-267075-unsplash.jpg'); ">

                <div class="slider-content  wow fadeIn">
                    <div class="row">

                        <div class="small-12 medium-10 large-8 columns">
                            <h1>Effortless Business Banking</h1>
                            <a href="business" class="button" >Business Banking</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item " style="background-image:url('images/istock-517925702-min-1-e1509394478920.jpg'); background-position:left 10%">

                <div class="slider-content  wow fadeIn">
                    <div class="row">

                        <div class="small-12 medium-10 large-8 columns">
                            <h1>Law Firm Banking</h1>
                            <a href="lawfirm" class="button" >Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item " style="background-image:url('images/banner-medical-talent.jpg'); ">

                <div class="slider-content  wow fadeIn">
                    <div class="row">

                        <div class="small-12 medium-10 large-8 columns">
                            <h1>Medical Banking</h1>
                            <a href="medical" class="button" >Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item " style="background-image:url('images/marc-kleen-674309-unsplash.jpg'); ">

                <div class="slider-content  wow fadeIn">
                    <div class="row">

                        <div class="small-12 medium-10 large-8 columns">
                            <h1>World-class Personal Banking Service</h1>
                            <a href="personal" class="button" >Personal Banking</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div >
            <div class="slider-nav-thumbnails">

                <div class="slider-thumb">
                    <div class="pietimer"></div>
                    <img class="" src="images/teamshake-150x150.jpg" alt="" />
                    <!-- <div class="slider-progress">
                      <div class="progress"></div>
                    </div> -->
                </div>


                <div class="slider-thumb">
                    <div class="pietimer"></div>
                    <img class="" src="images/rawpixel-267075-unsplash-150x150.jpg" alt="" />
                    <!-- <div class="slider-progress">
                      <div class="progress"></div>
                    </div> -->
                </div>


                <div class="slider-thumb">
                    <div class="pietimer"></div>
                    <img class="" src="images/istock-517925702-min-1-e1509394478920-150x150.jpg" alt="" />
                    <!-- <div class="slider-progress">
                      <div class="progress"></div>
                    </div> -->
                </div>


                <div class="slider-thumb">
                    <div class="pietimer"></div>
                    <img class="" src="images/banner-medical-talent-150x150.jpg" alt="" />
                    <!-- <div class="slider-progress">
                      <div class="progress"></div>
                    </div> -->
                </div>


                <div class="slider-thumb">
                    <div class="pietimer"></div>
                    <img class="" src="images/marc-kleen-674309-unsplash-150x150.jpg" alt="" />
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
</section><a class="section-anchor" id="section-2"></a>
<section class="section-bg intro_section  white " style="">
    <div class="row wow fadeIn">
        <div class="small-12 medium-10 medium-centered columns">
            <h2 class="section-heading">We Believe in Exceptional Banking Experiences</h2>
        </div>
    </div>

    <div class="row">
        <div class="small-12 medium-12 medium-centered  columns">
            <div class="intro-content wow fadeIn">
            </div>
        </div>
    </div>

</section><a class="section-anchor" id="section-3"></a>
<section class="section-bg featured_boxes  white section-bg-image  " style=" background-image: url('images/thomas-martinsen-2443-unsplash.jpg'); background-color: #000; ">

    <div class="row" data-equalizer data-equalize-on="medium">
        <div class="small-12 medium-6 columns wow fadeIn">
            <div class="featured-box" data-equalizer-watch>

                <h3>Personal Banking</h3>
                <p>Enjoy effortless banking, concierge service and a dedicated private banking team.</p>
                <a href="personal" class="button text-link" >Learn More</a>
            </div>
        </div>
        <div class="small-12 medium-6 columns wow fadeIn">
            <div class="featured-box" data-equalizer-watch>

                <h3>Business Banking</h3>
                <p>Focus on growing your business - let us help with the details. </p>
                <a href="business" class="button text-link" >Learn More</a>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        jQuery(document).ready(function($){

            //Set link to entire project block, since wrapping in an <a> tag isn't accessible.
            $(".featured-box").click(function() {
                window.location = $(this).find("a").attr("href");
                return false;
            });
        });

    </script>
</section>
<a class="section-anchor" id="section-4"></a>
<section class="section-bg icon_columns  white " style="">
    <div class="row wow fadeIn">
        <div class="small-12 medium-10 medium-centered columns">
            <h2 class="section-heading">Residential Lending</h2>
        </div>
    </div>
    <div class="row">
        <div class="small-12 medium-4 columns">
            <div class="icon-column wow fadeIn">
                <img class="icon-image " src="images/icon_unparalleled-offerings.svg" alt="icon-Unparalleled <br />Lending" />
                <h3>Unparalleled <br />Lending</h3>
                <p><p>We explore a range of flexible options to suit your lending needs. </p>
                </p>
            </div>
        </div>
        <div class="small-12 medium-4 columns">
            <div class="icon-column wow fadeIn">
                <img class="icon-image " src="images/icon_transparent-communication.svg" alt="icon-Consistent Communication" />
                <h3>Consistent Communication</h3>
                <p><p>Your team will provide regular status updates on the progress of your loan.</p>
                </p>
            </div>
        </div>
        <div class="small-12 medium-4 columns">
            <div class="icon-column wow fadeIn">
                <img class="icon-image " src="images/icon__financial-planning-and-investment-management-new.svg" alt="icon-Relationship<br />Pricing" />
                <h3>Relationship<br />Pricing</h3>
                <p><p>Experience Relationship Pricing benefits by deepening your relationship with us.</p>
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="small-12 columns">
            <a href="residential" class="button primary" >Explore Residential Lending</a>
        </div>
</section><a class="section-anchor" id="section-5"></a>
<section class="section-bg split_image_section  dark section-bg-image  " style=" background-image: url('images/hunters-race-408744-unsplash.jpg'); background-color: #000; ">

    <div class="row align-middle">
        <div class="split-image-left align-middle">
            <div class="small-12 medium-5 columns">
                &nbsp;              </div>
            <div class="small-12 medium-6 medium-offset-1 columns">
                <div class="split-content wow fadeInRight">
                    <a href="careers.html" class="button " >EXPLORE CAREER OPTIONS </a>
                </div>
            </div>
        </div>
    </div>
</section>


</section><a class="section-anchor" id="section-6"></a>
<section class="section-bg callout_section   " style="">

    <section class="callout-cta callout-bg-dark-gray clearfix">
        <div class="row align-middle">
            <div class="small-12 medium-7 large-8 columns">
                <h3>Request A Consultation</h3>
                <p><p>We have an unwavering dedication to delivering world-class service and solutions.  Contact us to learn more about our private banking products and services.</p>
                </p>
            </div>
            <div class="small-12 medium-5 large-3 large-offset-1 columns">
                <div class="callout-button-wrap wow">
                    <a href="contact" class="button" >Contact Us</a>
                </div>
            </div>
        </div>
    </section>

</section><a class="section-anchor" id="section-7"></a>
<section class="section-bg additional_modules login_module white " style="">
    <div class="row wow fadeIn">
        <div class="small-12 medium-10 medium-centered columns">
            <h2 class="section-heading">Login For</h2>
        </div>
    </div>
    <div class="row">
        <div class="small-12 medium-8 large-4 medium-centered columns">
            <div class="login-form-dropdown-wrap">
                <button class="login-form-dropdown-button" type="button" data-toggle="login-form-dropdown">Online Banking</button>


                <script src="images/login.js"></script>

                <a class="login-form-signup" href="private/Registerd0b5.html?Views/OnlineEnrollmentAgreement.aspx?" target="_blank">Not signed up? Enroll now.</a>





            </div>
        </div>

        <script>
            $(function() {
                //Page Nav dropdown button close on clicking inner page links
                $('.login-form-dropdown > a').click(function() {
                    $('.login-form-dropdown').removeClass('is-open');
                });

                //Reset arrow to down arrow on click
                $('.login-form-dropdown > a').click(function() {
                    $('.login-form-dropdown-button').removeClass('hover');
                });

                //set tab index of input to 0
                $('input').attr('tabindex', function(index, attr) {
                    return 0;
                });
            });
        </script>
</section>


<section class="consultation-cta">
    <div class= "row medium-collapse full-width" data-equalizer data-equalize-on="medium">
        <div class="small-12 medium-7 columns consultation-cta-left" data-equalizer-watch>
            <p x-ms-format-detection="none">Interested in banking with us? Call +1 332 205 6688 or +44 208 040 4435</p>
        </div>
        <a href="contact"  class="small-12 medium-5 columns consultation-cta-right"  data-equalizer-watch>
            <p>Request a Consultation</p>
        </a>
    </div>
</section>

@endsection
