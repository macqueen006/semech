<x-app-layout>

    <x-layouts.hero>
        <x-slot name="image">
            {{ asset('img/bg/bg-image-136.jpg') }}
        </x-slot>
        <x-slot name="title">Our Team</x-slot>
    </x-layouts.hero>

    <!-- Page Content -->
    <main class="page-content">
        <!-- Start Team Area -->
        <div class="brook-team-area ptb--120 ptb-md--80 ptb-sm--60 bg_color--1 slick-arrow-hover">
            <div class="brook-element-carousel slick-arrow-center slick-arrow-triggle" data-slick-options='{
                    "spaceBetween": 30,
                    "slidesToShow": 5,
                    "slidesToScroll": 1,
                    "arrows": true,
                    "infinite": true,
                    "dots": false,
                    "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "ion ion-ios-arrow-back" },
                    "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "ion ion-ios-arrow-forward" }
                }'
                 data-slick-responsive='[
                {"breakpoint":1150, "settings": {"slidesToShow": 4}},
                {"breakpoint":890, "settings": {"slidesToShow": 3}},
                {"breakpoint":590, "settings": {"slidesToShow": 2}},
                {"breakpoint":480, "settings": {"slidesToShow": 1}}
                ]'>


                <!-- Start Single Team -->
                <div class="team team__style--3 move-up wow">
                    <div class="thumb">
                        <img src="../../img/architecture/team1.jpg" alt="team Images">
                        <div class="overlay" style="background-image: url(../../img/architecture/team1.jpg);"></div>
                        <ul class="social-icon icon-solid-rounded icon-size-medium text-center">
                            <li class="facebook"><a href="team.html#" class="link" aria-label="Facebook"><i class="fab fa-facebook"></i></a></li>
                            <li class="twitter"><a href="team.html#" class="link" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                            <li class="instagram"><a href="team.html#" class="link" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-info text-center">
                        <div class="info">
                            <h5>John Doe</h5>
                            <span>Founder</span>
                        </div>
                    </div>
                </div>
                <!-- End Single Team -->

                <!-- Start Single Team -->
                <div class="team team__style--3 move-up wow">
                    <div class="thumb">
                        <img src="../../img/architecture/team2.jpg" alt="team Images">
                        <div class="overlay" style="background-image: url(../../img/architecture/team2.jpg);"></div>
                        <ul class="social-icon icon-solid-rounded icon-size-medium text-center">
                            <li class="facebook"><a href="team.html#" class="link" aria-label="Facebook"><i class="fab fa-facebook"></i></a></li>
                            <li class="twitter"><a href="team.html#" class="link" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                            <li class="instagram"><a href="team.html#" class="link" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-info text-center">
                        <div class="info">
                            <h5>Kasahara May</h5>
                            <span>Project manager</span>
                        </div>
                    </div>
                </div>
                <!-- End Single Team -->

                <!-- Start Single Team -->
                <div class="team team__style--3 move-up wow">
                    <div class="thumb">
                        <img src="../../img/architecture/team3.jpg" alt="team Images">
                        <div class="overlay" style="background-image: url(../../img/architecture/team3.jpg);"></div>
                        <ul class="social-icon icon-solid-rounded icon-size-medium text-center">
                            <li class="facebook"><a href="team.html#" class="link" aria-label="Facebook"><i class="fab fa-facebook"></i></a></li>
                            <li class="twitter"><a href="team.html#" class="link" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                            <li class="instagram"><a href="team.html#" class="link" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-info text-center">
                        <div class="info">
                            <h5>Blake Hamilton</h5>
                            <span>Engineer</span>
                        </div>
                    </div>
                </div>
                <!-- End Single Team -->

                <!-- Start Single Team -->
                <div class="team team__style--3 move-up wow">
                    <div class="thumb">
                        <img src="../../img/architecture/team1.jpg" alt="team Images">
                        <div class="overlay" style="background-image: url(../../img/architecture/team1.jpg);"></div>
                        <ul class="social-icon icon-solid-rounded icon-size-medium text-center">
                            <li class="facebook"><a href="team.html#" class="link" aria-label="Facebook"><i class="fab fa-facebook"></i></a></li>
                            <li class="twitter"><a href="team.html#" class="link" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                            <li class="instagram"><a href="team.html#" class="link" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-info text-center">
                        <div class="info">
                            <h5>Sarah Vagan</h5>
                            <span>Marketing</span>
                        </div>
                    </div>
                </div>
                <!-- End Single Team -->

                <!-- Start Single Team -->
                <div class="team team__style--3 move-up wow">
                    <div class="thumb">
                        <img src="../../img/architecture/team2.jpg" alt="team Images">
                        <div class="overlay" style="background-image: url(../../img/architecture/team2.jpg);"></div>
                        <ul class="social-icon icon-solid-rounded icon-size-medium text-center">
                            <li class="facebook"><a href="team.html#" class="link" aria-label="Facebook"><i class="fab fa-facebook"></i></a></li>
                            <li class="twitter"><a href="team.html#" class="link" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                            <li class="instagram"><a href="team.html#" class="link" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-info text-center">
                        <div class="info">
                            <h5>John Doe</h5>
                            <span>Founder</span>
                        </div>
                    </div>
                </div>
                <!-- End Single Team -->

                <!-- Start Single Team -->
                <div class="team team__style--3 move-up wow">
                    <div class="thumb">
                        <img src="../../img/architecture/team3.jpg" alt="team Images">
                        <div class="overlay" style="background-image: url(../../img/architecture/team3.jpg);"></div>
                        <ul class="social-icon icon-solid-rounded icon-size-medium text-center">
                            <li class="facebook"><a href="team.html#" class="link" aria-label="Facebook"><i class="fab fa-facebook"></i></a></li>
                            <li class="twitter"><a href="team.html#" class="link" aria-label="Twitter"><i class="fab fa-twitter"></i></a></li>
                            <li class="instagram"><a href="team.html#" class="link" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-info text-center">
                        <div class="info">
                            <h5>John Doe</h5>
                            <span>Founder</span>
                        </div>
                    </div>
                </div>
                <!-- End Single Team -->

            </div>
        </div>
        <!-- End Team Area -->
        <x-layouts.block />

    </main>

</x-app-layout>
