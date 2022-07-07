@extends('pages.layout.app')
@section('content')


    <section class="page-banner "  style="background-image:url('images/valentin-farkasch-412019-unsplash-1800x700.jpg');" ">
    <div class="row">
        <div class="small-12 medium-10 medium-centered columns">
            <div class="page-banner-content"id="page-banner-content">
                <h1>Law Firm Banking</h1>


                <p><p>Exceptional banking experiences <br />for Law Firms & Attorneys</p>
                </p>
                <a href="offering" class="button" >Law Firm Offerings</a>

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
                    <p><strong>We believe in exceptional banking experiences for law firms and attorneys.</strong><br /> Our dedicated private banking teams can help you:</p>
                    <p><img class="aligncenter size-full wp-image-1064" src="images/legal-banking-graphic-02.svg" alt="legal banking graphic" /></p>
                </div>
            </div>
        </div>

    </section><a class="section-anchor" id="section-2"></a>
    <section class="section-bg featured_boxes  white section-bg-image  " style=" background-image: url('images/thomas-martinsen-2443-unsplash.jpg'); background-color: #000; ">

        <div class="row" data-equalizer data-equalize-on="medium">
            <div class="small-12 medium-4 columns wow fadeIn">
                <div class="featured-box" data-equalizer-watch>

                    <h3>Grow Faster</h3>
                    <p>Discover flexible lines of credit to fund practice costs and short-term capital needs.*</p>
                    <a href="credit" class="button text-link" >Learn More</a>
                </div>
            </div>
            <div class="small-12 medium-4 columns wow fadeIn">
                <div class="featured-box" data-equalizer-watch>

                    <h3>Attract & Retain Talent</h3>
                    <p>Our Partner Capital Loans and Workplace Banking Benefits can help attract and retain your top talent.</p>
                    <a href="capital-loan" class="button text-link" >Learn More</a>
                </div>
            </div>
            <div class="small-12 medium-4 columns wow fadeIn">
                <div class="featured-box" data-equalizer-watch>

                    <h3>Increase Efficiency</h3>
                    <p>We offer a suite of escrow options and treasury management products, designed to improve your banking experience and increase cash flow.</p>
                    <a href="efficiency" class="button text-link" >Learn More</a>
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
    </section><a class="section-anchor" id="section-3"></a>
    <section class="section-bg callout_section   " style="">

        <section class="callout-cta callout-bg-dark-gray clearfix">
            <div class="row align-middle">
                <div class="small-12 medium-7 large-8 columns">
                    <h3>Learn More </h3>
                    <p><p>Download our whitepaper for a comprehensive overview.</p>
                    </p>
                </div>
                <div class="small-12 medium-5 large-3 large-offset-1 columns">
                    <div class="callout-button-wrap wow">
                        <a href="offering" class="button" >Download Now</a>
                    </div>
                </div>
            </div>
        </section>

    </section>


    <section class="consultation-cta">
        <div class= "row medium-collapse full-width" data-equalizer data-equalize-on="medium">
            <div class="small-12 medium-7 columns consultation-cta-left" data-equalizer-watch>
                <p x-ms-format-detection="none">Learn more about credit options </p>
            </div>
            <a   class="small-12 medium-5 columns consultation-cta-right"  data-equalizer-watch>
                <p>Request A Private Banker Consultation </p>
            </a>
        </div>
    </section>
    <section class="fine-print">
        <p class="disclaimer-text">* Subject to approval of a line of credit.</p>
    </section>
@endsection
