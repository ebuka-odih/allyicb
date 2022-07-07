@extends('pages.layout.app')
@section('content')



    <section class="page-banner "  style="background-image:url('images/library-chairs-e1547675059127-1800x700.jpg');" ">
    <div class="row">
        <div class="small-12 medium-10 medium-centered columns">
            <div class="page-banner-content"id="page-banner-content">
                <h1>Careers</h1>


                <p><p>Join a world class private bank today.</p>
                </p>

                <div id="page-nav-stick"></div>
                <nav data-sticky-container >
                    <div data-sticky data-sticky-on="large" data-top-anchor="page-nav-stick" data-options="marginTop:7.09;" style="width:100%">
                        <ul class="page-sub-navigation">
                            <li>
                                <a href="#section-4" class="scroll-to">Our Expectations</a>
                            </li>
                            <li>
                                <a href="#section-5" class="scroll-to">Open Positions</a>
                            </li>
                        </ul>
                </nav>

                <script>
                    $(function() {
                        //Page Nav dropdown button close on clicking inner page links
                        $('.page-sub-navigation > a').click(function() {
                            $('.page-sub-navigation').removeClass('is-open');
                        });
                    });
                </script>

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
                    <p>We strongly believe in hiring people greater than ourselves. We recognize, reward, and develop those individuals who make an outsized impact to the business. Our combined passion, hard work, and proactive thinking allows us to simultaneously empower our clients and each other.</p>
                </div>
            </div>
        </div>

    </section><a class="section-anchor" id="section-2"></a>
    <section class="section-bg split_image_section  light-gray " style="">

        <div class="row align-middle">
            <div class="split-image-right align-middle">
                <div class="small-12 medium-6 columns">
                    <div class="split-content wow fadeInLeft">
                        <h3>Do You Have a Growth Mindset and a Desire to Learn?</h3>
                        <p><p>Every role at PFB is connected to our company strategy and can drive high impact.  As a result, we have assembled top talent from a diverse set of industries, including hospitality, technology, consulting, and financial services.</p>
                        <p>Our people have joined us from best-in-class companies such as Microsoft, BCG, RSM, Ritz Carlton, Marriott, Norwegian Cruise Lines, US Bank, UMB, Zions Bank, and Goldman Sachs.  In joining Project Finance Bank you will have the opportunity to both drive huge impact and partner with some of the incredible talent already on our private banking team.</p>
                        </p>
                    </div>
                </div>
                <div class="small-12 medium-5 medium-offset-1 columns">
                    <img class="split-image wow fadeInRight" src="images/denver.jpg" alt="" />
                </div>
            </div>
        </div>
    </section>


    </section><a class="section-anchor" id="section-3"></a>
    <section class="section-bg split_image_section  white " style="">

        <div class="row align-middle">
            <div class="split-image-left align-middle">
                <div class="small-12 medium-5 columns">
                    <img class="split-image wow fadeInLeft" src="images/693916570-min.jpg" alt="" />
                </div>
                <div class="small-12 medium-6 medium-offset-1 columns">
                    <div class="split-content wow fadeInRight">
                        <h3>How We Care for the PFB Team</h3>
                        <p><p>Our employees enjoy a wide range of benefits including </p>
                        <ul>
                            <li>100% paid medical insurance premiums for employees</li>
                            <li>Health, dental, and vision insurance</li>
                            <li>Life, AD&D, and disability insurance</li>
                            <li>FSA</li>
                            <li>401K</li>
                            <li>Paid time off</li>
                            <li>Paid sabbatical leave</li>
                            <li>Paid maternity and paternity leave</li>
                            <li>Tuition reimbursement</li>
                            <li>Parking, transportation and cell phone allowance </li>
                        </ul>
                        <p>Last but absolutely not least you get all (10) bank holidays off, a workplace environment that’s more like a tech company (in-office Golf & Badminton anyone?), and incredible people to work with.</p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    </section><a class="section-anchor" id="section-4"></a>
    <section class="section-bg values  light-gray " style="">
        <div class="row wow fadeIn">
            <div class="small-12 medium-10 medium-centered columns">
                <h2 class="section-heading">Our Expectations</h2>
                <div class="row">
                    <div class="small-12 medium-11 medium-centered">
                        <p class="section-intro-content">We believe employees should be empowered to drive impact through clearly stated competencies:</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="small-12 large-6 columns">
                <div class="value-item">
                    <div class="row">
                        <div class="small-12 medium-2 large-3 columns">
                            <img class="icon-image  wow fadeIn" data-wow-delay=".25s" src="images/icon_drive.svg" alt="Drive" />
                        </div>
                        <div class="small-12 medium-10 large-9 columns wow fadeIn">
                            <h6>Drive</h6>
                            <p><p>Strong personal results</p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="small-12 large-6 columns">
                <div class="value-item">
                    <div class="row">
                        <div class="small-12 medium-2 large-3 columns">
                            <img class="icon-image  wow fadeIn" data-wow-delay=".25s" src="images/icon_collaboration.svg" alt="Collaboration" />
                        </div>
                        <div class="small-12 medium-10 large-9 columns wow fadeIn">
                            <h6>Collaboration</h6>
                            <p><p>Supports others to help them deliver impact</p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="small-12 large-6 columns">
                <div class="value-item">
                    <div class="row">
                        <div class="small-12 medium-2 large-3 columns">
                            <img class="icon-image  wow fadeIn" data-wow-delay=".25s" src="images/icon_development-initiative.svg" alt="Development & Initiative" />
                        </div>
                        <div class="small-12 medium-10 large-9 columns wow fadeIn">
                            <h6>Development & Initiative</h6>
                            <p><p>Learns from others inside and outside of the company</p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="small-12 large-6 columns">
                <div class="value-item">
                    <div class="row">
                        <div class="small-12 medium-2 large-3 columns">
                            <img class="icon-image  wow fadeIn" data-wow-delay=".25s" src="images/icon_proactive-thinking.svg" alt="Proactive Thinking" />
                        </div>
                        <div class="small-12 medium-10 large-9 columns wow fadeIn">
                            <h6>Proactive Thinking</h6>
                            <p><p>Thinks ahead, anticipates opportunities, and acts to find/implement solutions</p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="small-12 large-6 columns">
                <div class="value-item">
                    <div class="row">
                        <div class="small-12 medium-2 large-3 columns">
                            <img class="icon-image  wow fadeIn" data-wow-delay=".25s" src="images/icon_commitment.svg" alt="Commitment" />
                        </div>
                        <div class="small-12 medium-10 large-9 columns wow fadeIn">
                            <h6>Commitment</h6>
                            <p><p>Unwavering faith in our company’s ability to achieve</p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="small-12 large-6 columns">
                <div class="value-item">
                    <div class="row">
                        <div class="small-12 medium-2 large-3 columns">
                            <img class="icon-image  wow fadeIn" data-wow-delay=".25s" src="images/icon_attitude.svg" alt="Attitude" />
                        </div>
                        <div class="small-12 medium-10 large-9 columns wow fadeIn">
                            <h6>Attitude</h6>
                            <p><p>Positive outlook and attempts to turn any negative situation into a positive one</p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="small-12 large-6 columns">
                <div class="value-item">
                    <div class="row">
                        <div class="small-12 medium-2 large-3 columns">
                            <img class="icon-image  wow fadeIn" data-wow-delay=".25s" src="images/icon_flexibility.svg" alt="Flexibility" />
                        </div>
                        <div class="small-12 medium-10 large-9 columns wow fadeIn">
                            <h6>Flexibility</h6>
                            <p><p>Gladly wears many hats and adapts to change with a smile</p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="small-12 large-6 columns">
                <div class="value-item">
                    <div class="row">
                        <div class="small-12 medium-2 large-3 columns">
                            <img class="icon-image  wow fadeIn" data-wow-delay=".25s" src="images/icon_desire-to-work.svg" alt="Desire To Work" />
                        </div>
                        <div class="small-12 medium-10 large-9 columns wow fadeIn">
                            <h6>Desire To Work</h6>
                            <p><p>Applies themselves to the best of their ability and works hard</p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="small-12 large-6 columns">
                <div class="value-item">
                    <div class="row">
                        <div class="small-12 medium-2 large-3 columns">
                            <img class="icon-image  wow fadeIn" data-wow-delay=".25s" src="images/icon_passion.svg" alt="Passion" />
                        </div>
                        <div class="small-12 medium-10 large-9 columns wow fadeIn">
                            <h6>Passion</h6>
                            <p><p>Displays true passion as part of the team, goes above and beyond to drive results</p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="small-12 large-6 columns">
                <div class="value-item">
                    <div class="row">
                        <div class="small-12 medium-2 large-3 columns">
                            <img class="icon-image  wow fadeIn" data-wow-delay=".25s" src="images/icon_accountability.svg" alt="Accountability" />
                        </div>
                        <div class="small-12 medium-10 large-9 columns wow fadeIn">
                            <h6>Accountability</h6>
                            <p><p>Doesn&#8217;t require continuous checking up on progress</p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="small-12 large-6 columns">
                <div class="value-item">
                    <div class="row">
                        <div class="small-12 medium-2 large-3 columns">
                            <img class="icon-image  wow fadeIn" data-wow-delay=".25s" src="images/icon_values.svg" alt="Values" />
                        </div>
                        <div class="small-12 medium-10 large-9 columns wow fadeIn">
                            <h6>Values</h6>
                            <p><p>Lives and breathes the company principles</p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section><a class="section-anchor" id="section-5"></a>
    <section class="section-bg content_section  white " style="">
        <div class="row wow fadeIn">
            <div class="small-12 medium-10 medium-centered columns">
                <h2 class="section-heading">Open Positions</h2>
            </div>
        </div>

        <section class="content-section wow fadeIn">
            <div class="row">


                </article>
        </section>

    </section><a class="section-anchor" id="section-6"></a>
    <section class="section-bg additional_modules slider_module white " style="">
        <script src="images/jquery.pietimer.min.js"></script>
        <section class="full-width-slider-wrap wow fadeIn">

            <section class="full-width-slider" >
                <div class="slider-item testimonial-slide" style="background-image:url('images/quinn-testimonial-min-1.jpg'); ">

                    <div class="slider-content  wow fadeIn">
                        <div class="row">

                            <div class="small-12 medium-10 large-8 columns">
                                <p class="slider-text">I love the entrepreneurial spirit here, it’s not your typical stuffy bank.</p>
                                <p class="testimonial-slider-info"><strong>Crystal Quinn</strong>, Project Finance Bank                      </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div  style="display:none;" >
                <div class="slider-nav-thumbnails">

                    <div class="slider-thumb">
                        <div class="pietimer"></div>
                        <img class="" src="images/quinn-testimonial-thumnail-150x150.jpg" alt="Quinn, Employee Testimonial" />
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
                <p x-ms-format-detection="none">Interested in career information? Call +1 332 205 6688 or +44 208 040 4435</p>
            </div>
            <a href="contact.html"  class="small-12 medium-5 columns consultation-cta-right"  data-equalizer-watch>
                <p>Contact Us</p>
            </a>
        </div>
    </section>

@endsection
