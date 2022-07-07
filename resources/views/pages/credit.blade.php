@extends('pages.layout.app')
@section('content')


    <section class="third-tier-nav">
        <div class="row">
            <div class="small-12 columns">
                <ul>
                    <li class="page_item page-item-991 current_page_item"><a href="credit" aria-current="page">Grow Your Law Firm Faster</a></li>
                    <li class="page_item page-item-993"><a href="capital-loan">Attract and Retain Talent</a></li>
                    <li class="page_item page-item-992"><a href="efficiency">Improve Efficiency</a></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="page-banner "  style="background-image:url('images/banner-easy-credit-1800x700.jpg');" ">
    <div class="row">
        <div class="small-12 medium-10 medium-centered columns">
            <div class="page-banner-content"id="page-banner-content">
                <h1>Grow Your Law Firm Faster</h1>


                <p><p>Through flexible lines of credit to help better manage cash flow</p>
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
        <div class="row wow fadeIn">
            <div class="small-12 medium-10 medium-centered columns">
                <h2 class="section-heading"></h2>
                <div class="row">
                    <div class="small-12 medium-11 medium-centered">
                        <p class="section-intro-content">With low interest rates, credit is a viable alternative to capitalize your business and help drive growth.  For contingency-based law firms, Project Finance Bank provides funding for litigation costs before settlement.  For all law firms, your Project Finance banking team can work with you to provide a working line of credit to help you better manage your cash flow and grow faster.</p>
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
    <section class="section-bg split_image_section  light-gray " style="">

        <div class="row align-middle">
            <div class="split-image-right align-middle">
                <div class="small-12 medium-6 columns">
                    <div class="split-content wow fadeInLeft">
                        <h3>Case Finance</h3>
                        <p><p>Case finance is an easy-to-use credit line for contingency-based law firms which helps finance your case costs until settlement.  Case finance provides you with the capital to grow and expand your business. It provides three core benefits:</p>
                        <ul>
                            <li>You can grow your caseload by expanding your capital sources</li>
                            <li>You only pay interest on credit you use</li>
                            <li>We provide exclusive, easy to use, free software that lets you track costs and interest charges on every individual case at virtually any time</lI>
                        </ul>
                        <p>This program is good for firms with cases that take anywhere from 1 month to 2 years to settle.  <a href="index-32.html">Contact a Project Finance Banker</a> to learn more about supported case sizes and other details.</p>
                        </p>
                    </div>
                </div>
                <div class="small-12 medium-5 medium-offset-1 columns">
                    <img class="split-image wow fadeInRight" src="{{ asset('images/easy-credit-case-finance.jpg') }}" alt="finance your firm's case costs until settlement" />
                </div>
            </div>
        </div>
    </section>


    </section><a class="section-anchor" id="section-3"></a>
    <section class="section-bg content_section  white " style="">

        <section class="content-section wow fadeIn">
            <div class="row">

                <div class="small-12 columns medium-6 ">
                    <div class="subheader-wrapper">
                        <h3 class="text-left">
                            Case Finance System  </h3>
                    </div>
                    <p><span style="font-weight: 400;">Learn how you can use the Project Finance Bank Case Finance System to help manage your credit.</span></p>
                </div>

                <div class="small-12 columns medium-6 ">

                    <div class="video-holder play-video" onclick="thevid=document.getElementById('thevideo'); thevid.style.display='block'; this.style.display='none'">
                        <img src="images/case-finance-video-thumb.png" style="cursor:pointer" />    <img class="video-play-icon" img src="images/icon-video-play.svg" />
                    </div>
                    <div id="thevideo" style="display:none">

                        <iframe id="video" width="560" height="315" src="https://www.youtube.com/embed/aikTOFzdxk4?rel=0&amp;controls=1&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>

                    </div>

                    <script>
                        $(document).ready(function() {
                            $('.play-video').on('click', function(ev) {

                                $("#video")[0].src += "&autoplay=1";
                                ev.preventDefault();

                            });
                        });
                    </script></div>
                </article>
        </section>

    </section><a class="section-anchor" id="section-4"></a>
    <section class="section-bg split_image_section  light-gray " style="">

        <div class="row align-middle">
            <div class="split-image-left align-middle">
                <div class="small-12 medium-5 columns">
                    <img class="split-image wow fadeInLeft" src="images/easy-credit-working-line-of-credit.jpg" alt="Finance short-term capital and business growth needs" />
                </div>
                <div class="small-12 medium-6 medium-offset-1 columns">
                    <div class="split-content wow fadeInRight">
                        <h3>Working Line of Credit</h3>
                        <p><p>To finance short-term capital and business growth needs, Project Finance Bank provides a traditional working capital line of credit that delivers liquidity on demand to help you manage your cash flow more effectively. How it works:</p>
                        <ul>
                            <li>We provide qualified borrowers with a revolving line of credit</li>
                            <li>You get immediate access to credit as you need it</li>
                            <li>You can use the credit for almost any purpose</lI>
                            <li>You only pay interest on the credit that you use</li>
                        </ul>
                        </p>
                    </div>
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
            <a href="indexda26da26.html?interested_in=legal-banking"  class="small-12 medium-5 columns consultation-cta-right"  data-equalizer-watch>
                <p>Request a consultation today</p>
            </a>
        </div>
    </section>


@endsection

