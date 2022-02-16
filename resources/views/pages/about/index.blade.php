<x-app-layout>

    <x-layouts.hero>
        <x-slot name="image">
            {{ asset('img/semech/gdtography-911738.jpg') }}
        </x-slot>
        <x-slot name="title"></x-slot>
    </x-layouts.hero>
    <!-- Page Conttent -->

    <main class="page-content">

        <!-- Start About Area -->
        <div class="brook-about-area bg_color--1 ptb--120 ptb-md--80 ptb-sm--60">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-thumb text-center text-lg-end pr--100 pr_md--15 pr_sm--15">
                            <img src="{{ asset('img/architecture/about2.png') }}" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="about-inner authenthick-about mt_md--40 mt_sm--40">
                            <h6 class="heading headin-h6 body-color wow move-up">OUR STORY</h6>
                            <div class="bkseparator--30"></div>
                            <h3 class="heading heading-h3 line-height-1-25">We create functional, <br> beautiful interiors for our <br> clients since 1987. </h3>

                            <div class="bkseparator--40"></div>
                            <p class="bk_pra font-18">Lorem ipsum dolor, sit amet consecrator adipisicing elit. Nihil odit autem facilis laborum placeat sequi magni aut recusandae reprehenderit quas?</p>
                            <div class="bkseparator--65"></div>

                            <a class="moredetails-btn" href="about.html#"><span>More details</span> <i class="fa fa-arrow-right"></i></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Area -->

        <!-- Start Best Service -->
        <div class="brook-service-area bg_color--10 mb--100 mb_md--80 mb_sm--60">
            <div class="row row--0 align-items-center">
                <div class="col-lg-12 col-xl-6">
                    <div class="bext-service thumb">
                        <img src="{{ asset('img/architecture/perfection.jpg') }}" alt="images">
                    </div>
                </div>
                <div class="col-lg-12 col-xl-6">
                    <div class="bext-service plr--190 plr_lg--50 plr_lp--40 plr_md--50 plr_sm--30 mt_lg--40 mb_lg--40 mt_md--40 mb_md--40 mt_sm--40 mb_sm--40">
                        <div class="content">
                            <div class="brook-section-title text-start">
                                <h3 class="heading heading-h3 font-large">We Make Perfection</h3>
                            </div>
                            <div class="bkseparator--40"></div>
                            <h6 class="heading heading-h6 font-16 line-height-1-88 font-medium body-color">Sed ut perspiciatis unde omnis iste natus error sitvolu ptatem accusantium laudan tium totam rem aperiam eaque. Sed ut perspiciatis unde omnis iste natus error sitvolu ptatem accusantium</h6>
                            <div class="bkseparator--60 bkseparator_lg--30 bkseparator_md--20 bkseparator_sm--20"></div>
                            <div class="brook-btn">
                                <a class="brook-btn bk-btn-dark btn-sd-size btn-rounded space-between" href="about.html#">Learn
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Best Service -->

        <!-- Start Progress Charts Area -->
        <div class="brook-progress-charts-area bg_color--1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-12 pl--350 plr_lg--50 plr_md--50 plr_sm--50">
                        <div class="bk-progress-wrapper">
                            <h3 class="heading heading-h3">Our skills</h3>
                            <div class="bkseparator--30"></div>
                            <p class="bk_pra">Lorem ipsum dolor sit amet, consecrator advising elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <div class="bkseparator--60"></div>

                            <!-- Start Single Progress Charts -->
                            <div class="progress-charts">
                                <h6 class="heading heading-h6">Interior Design <span class="percent-label float-end">85%</span></h6>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft custom-color--2" data-wow-duration="0.5s"
                                         data-wow-delay=".3s" role="progressbar" style="width: 85%" aria-valuenow="85"
                                         aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!-- End Single Progress Charts -->

                            <!-- Start Single Progress Charts -->
                            <div class="progress-charts mt--45">
                                <h6 class="heading heading-h6">Exterior Design <span class="percent-label float-end">85%</span></h6>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft custom-color--3" data-wow-duration="0.7s"
                                         data-wow-delay=".5s" role="progressbar" style="width: 85%" aria-valuenow="85"
                                         aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!-- End Single Progress Charts -->

                            <!-- Start Single Progress Charts -->
                            <div class="progress-charts mt--45">
                                <h6 class="heading heading-h6">Living room <span class="percent-label float-end">70%</span></h6>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft custom-color--4" data-wow-duration="0.8s"
                                         data-wow-delay=".6s" role="progressbar" style="width: 70%" aria-valuenow="70"
                                         aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!-- End Single Progress Charts -->

                            <!-- Start Single Progress Charts -->
                            <div class="progress-charts mt--45">
                                <h6 class="heading heading-h6">Decoration <span class="percent-label float-end">90%</span></h6>
                                <div class="progress">
                                    <div class="progress-bar wow fadeInLeft" data-wow-duration="0.6s"
                                         data-wow-delay=".7s" role="progressbar" style="width: 90%" aria-valuenow="90"
                                         aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!-- End Single Progress Charts -->
                        </div>

                    </div>
                    <div class="col-lg-6 col-md-12 col-12 pl--100 plr_lg--10 plr_md--50 plr_sm--50 mt_md--40 mt_sm--40">
                        <div class="thumb">
                            <img src="{{ asset('img/architecture/skills.jpg') }}" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Progress Charts Area -->

        <!-- Start Accordion Area -->
        <div class="bk-accordion-area about-accordion ptb--120 ptb-md--80 ptb-sm--60 bg_color--1">
            <div class="container">
                <div class="row">

                    <!-- Start Single Accordion -->
                    <div class="col-lg-6 col-12">
                        <div class="thumb text-lg-left text-center pr--60 pr_md--5 pr_sm--5">
                            <img src="{{ asset('img/architecture/challenge.jpg') }}" alt="images">
                        </div>
                    </div>
                    <!-- End Single Accordion -->

                    <!-- Start Single Accordion -->
                    <div class="col-lg-6 col-12 mt_md--40 mt_sm--40">
                        <div class="brook-section-title mb--50 mb_sm--20 mb_md--20">
                            <h3 class="heading heading-h3">We're always ready for challenges.</h3>
                        </div>
                        <div class="bk-accordion-style--2" id="accordionExampl3">

                            <div class="card">
                                <div class="card-header" id="headingsix">
                                    <h5 class="mb-0">
                                        <a href="{{ route('about') }}" class="acc-btn" data-bs-toggle="collapse" data-bs-target="#collapsesix"
                                           aria-expanded="false" aria-controls="collapsesix">
                                            Perfect Design
                                        </a>
                                    </h5>
                                </div>

                                <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-bs-parent="#accordionExampl3">
                                    <div class="card-body">We learn from landing page's best practices and great
                                        landing pages in order to create a clear, crisp design that suits all your
                                        needs for a responsive landing site.
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingseven">
                                    <h5 class="mb-0">
                                        <a href="{{ route('about') }}" class="acc-btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapseseven"
                                           aria-expanded="false" aria-controls="collapseseven">
                                            Carefully Planned
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-bs-parent="#accordionExampl3">
                                    <div class="card-body">Brook presents your services with flexible, convenient
                                        and multipurpose layouts. You can select your favorite layouts & elements
                                        for particular projects with unlimited customization possibilities.
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="headingeight">
                                    <h5 class="mb-0">
                                        <a href="{{ route('about') }}" class="acc-btn collapsed" data-bs-toggle="collapse" data-bs-target="#collapeight"
                                           aria-expanded="false" aria-controls="collapeight">
                                            Smartly Execute
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapeight" class="collapse" aria-labelledby="headingeight" data-bs-parent="#accordionExampl3">
                                    <div class="card-body">Pixel-perfect replication of the designers is intended
                                        for both front-end & back-end developers to build their pages with greater
                                        comfort thanks to the higher custom ability, adaptability as well as
                                        flexibility.
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <!-- End Single Accordion -->


                </div>
            </div>
        </div>
        <!-- End Accordion Area -->

      <x-layouts.testimonial />

       <x-layouts.news />

        <x-layouts.block />
    </main>
    <!--// Page Conttent -->


</x-app-layout>
