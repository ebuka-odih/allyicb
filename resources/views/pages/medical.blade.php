@extends('pages.layout.app')
@section('content')

    <section class="page-banner "  style="background-image:url('images/x-ray-1800x700.jpg');" ">
    <div class="row">
        <div class="small-12 medium-10 medium-centered columns">
            <div class="page-banner-content"id="page-banner-content">
                <h1>Medical Banking</h1>


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
        <div class="row wow fadeIn">
            <div class="small-12 medium-10 medium-centered columns">
                <h2 class="section-heading"></h2>
                <div class="row">
                    <div class="small-12 medium-11 medium-centered">
                        <p class="section-intro-content">With a suite of products tailored to who you are, we meet the financial needs of your modern medical practice.
                        </p>
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
    <section class="section-bg featured_boxes  white section-bg-image  " style=" background-image: url('images/surgery-tools.jpg'); background-color: #000; ">

        <div class="row" data-equalizer data-equalize-on="medium">
            <div class="small-12 medium-6 columns wow fadeIn">
                <div class="featured-box" data-equalizer-watch>

                    <h3>Grow Faster</h3>
                    <p>Discover flexible lines of credit that can fund practice costs and short-term capital needs.</p>
                    <a href="grow-your-medical-practice" class="button text-link" >Learn More</a>
                </div>
            </div>
            <div class="small-12 medium-6 columns wow fadeIn">
                <div class="featured-box" data-equalizer-watch>

                    <h3>Attract & Retain Talent</h3>
                    <p>Find and retain the best talent for your practice with Ally international Commerce Bank Partner Capital Loans and Ally international Commerce Bank Workplace Benefits.</p>
                    <a href="attract-and-retain" class="button text-link" >Learn More</a>
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
