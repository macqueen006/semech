<x-app-layout>

    <x-layouts.hero>
        <x-slot name="image">
            {{ asset('img/bg/bg-image-136.jpg') }}
        </x-slot>
        <x-slot name="title">The Language of Designs</x-slot>
    </x-layouts.hero>

    <!-- Page Conttent -->
    <main class="page-content">
        <!-- Start Portfolio Details -->
        <div class="brook-portfolio-details bg_color--1">
            <div class="container">
                <div class="row pt--100 pt_md--80 pt_sm--60 pb--80">

                    <!-- Portfolio Left -->
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="portfolio-left bk-portfolio-details wow move-up">
                            <div class="portfolio-main-info">
                                <h2 class="heading heading-h2 line-height-1-42">About the <br> project</h2>
                                <!-- Start Details List -->
                                <div class="portfolio-details-list mt--60">

                                    <div class="details-list">
                                        <label>Date</label>
                                        <span>28 Sep 2007</span>
                                    </div>

                                    <div class="details-list">
                                        <label>Client</label>
                                        <span>HighGrove Partners</span>
                                    </div>

                                    <div class="details-list">
                                        <label>Categories</label>
                                        <span><a href="portfolio-details.html#">Digital</a></span>
                                    </div>

                                    <div class="details-list">
                                        <label>Awards</label>
                                        <span>2015 Digital World Awards 2016 Finale Awards</span>
                                    </div>

                                </div>
                                <!-- End Details List -->
                                <!-- Start Portfolio Share -->
                                <div class="portfolio-share pt--70 pt_md--40 pt_sm--40">
                                    <h6 class="heading heading-h6">SHARE</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Portfolio Right -->
                    <div class="col-lg-7 col-md-6 offset-lg-1 col-12">
                        <div class="portfolio-left bk-portfolio-details mt_sm--30">
                            <div class="portfolio-main-info">
                                <div class="portfolio-content">
                                    <h6 class="heading heading-h6 wow move-up">ABOUT THE PROJECT</h6>

                                    <div class="desc mt--40">
                                        <div class="content mb--25 wow move-up">
                                            <p class="bk_pra">Digital marketing encompasses all marketing efforts
                                                that use an electronic device or the internet. Businesses leverage
                                                digital channels such as search engines, social media, email, and
                                                their websites to connect with current and prospective customers.</p>
                                        </div>
                                        <div class="content mb--25 wow move-up">
                                            <p class="bk_pra">It is. In fact, “constant” internet usage among
                                                adults increased by 5% in just the last three years, according to
                                                Pew Research. And although we say it a lot, the way people shop and
                                                buy really has changed along with it — meaning offline marketing
                                                isn’t as effective as it used to be.</p>
                                        </div>
                                        <div class="content mb--65 wow move-up">
                                            <p class="bk_pra">Marketing has always been about connecting with your
                                                audience in the right place and at the right time. Today, that
                                                means you need to meet them where they are already spending time:
                                                on the internet. (Source: blog.hubspot.com)</p>
                                        </div>

                                        <div class="portfolio-btn">
                                            <a class="brook-btn bk-btn-theme btn-sd-size btn-rounded space-between"
                                               href="portfolio-details.html#">Go to link</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start Thumbnail -->
            </div>

        </div>
        <!-- End Portfolio Details -->

        <!-- Start Video Popup Area -->
        <div class="brook-video-area ptb--150 ptb-md--80 ptb-sm--60 bg_color--1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="video-with-thumb text-center move-up wow">
                            <div class="thumb">
                                <img src="../../img/Marketing/portfolio-big-img-2.jpg" alt="video images">
                            </div>
                            <!-- Start Single Popup -->
                            <div class="video-btn position--center">
                                <a class="play__btn" href="https://www.youtube.com/watch?v=9No-FiEInLA">
                                    <div class="video-icon"></div>
                                </a>
                            </div>
                            <!-- End Single Popup -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Video Popup Area -->

        <div class="portfolio-pagination-btn">
            <div class="container bg_color--1">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Portfolio Nav List -->
                        <div class="portfolio-nav-list pb--150 pb_md--80 pb_sm--60 wow move-up">
                            <div class="portfolio-page prev">
                                <div class="inner">
                                    <a href="portfolio-details.html#">
                                        <p>Prev</p>
                                        <h3 class="heading heading-h3">Resize Image <br> Using Photoshop</h3>
                                    </a>
                                </div>
                            </div>
                            <div class="portfolio-page next mt_sm--30">
                                <div class="inner">
                                    <a href="portfolio-details.html#">
                                        <p>Next</p>
                                        <h3 class="heading heading-h3">Enchanting <br> Portrait Hacks</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio Nav List -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Call To Action -->
        <x-layouts.block />
        <!-- End Call To Action -->
    </main>

</x-app-layout>
