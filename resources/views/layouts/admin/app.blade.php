<!doctype html>
<html lang="en">
<head>
    @stack('styles')
    <x-partials.admin_head/>
    @livewireStyles
</head>
<body class="crm_body_bg">


<x-partials.admin_nav/>

<section class="main_content dashboard_part">

    <!-- menu  -->
    <div class="container-fluid no-gutters">
        <div class="row">
            <div class="col-lg-12 p-0">
                <div class="header_iner d-flex justify-content-between align-items-center">
                    <div class="sidebar_icon d-lg-none">
                        <i class="ti-menu"></i>
                    </div>
                    <div class="serach_field-area">
                        <!-- add other content here -->
                    </div>
                    <div class="header_right d-flex justify-content-between align-items-center">
                        <div class="header_notification_warp d-flex align-items-center">
                            <li>
                                <a href="#"> <img src="{{ asset('admins/img/icon/bell.svg') }}" alt="images"> </a>
                            </li>
                            <li>
                                <a href="#"> <img src="{{ asset('admins/img/icon/msg.svg') }}" alt="images"> </a>
                            </li>
                            <li>
                                <a href="{{ url('/') }}">Visit Site</a>
                            </li>
                        </div>
                        <div class="profile_info">
                            <img src="{{ asset('admins/img/client_img.png') }}" alt="#">
                            <div class="profile_info_iner">
                                <p>Welcome Admin!</p>
                                <h5>{{ authUser()->name }}</h5>
                                <div class="profile_info_details">
                                    <a href="{{ route('admin.profile.index') }}">My Profile <i class="ti-user"></i></a>
                                    <a href="{{ route('admin.settings.index') }}">Settings <i
                                            class="ti-settings"></i></a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    this.closest('form').submit();">Log Out <i class="ti-shift-left"></i></a>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--/ menu  -->

{{ $slot }}
<!-- footer part -->
    <div class="footer_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer_iner text-center">
                        <p>2022 © Semech - Designed by <a href="#"> <i class="ti-heart"></i> </a><a href="#"> Godwin</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

@include('sweetalert::alert')
@livewireScripts
<x-partials.admin_footer/>
@stack('scripts')

</body>
</html>
