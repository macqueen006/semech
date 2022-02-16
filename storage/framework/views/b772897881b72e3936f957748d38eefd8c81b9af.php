<!-- sidebar part here -->
<nav class="sidebar">
    <div class="logo d-flex justify-content-between">
        <a href="<?php echo e(route('admin.index')); ?>"><img src="<?php echo e(asset('admins/img/logo.png')); ?>" alt="image"></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="">
            <a  href="<?php echo e(route('admin.index')); ?>"  aria-expanded="false">
                <img src="<?php echo e(asset('admins/img/menu-icon/1.svg')); ?>" alt="images">
                <span>Dashboard</span>
            </a>
        </li>

        <li class="">
            <a   class="has-arrow" href="#" aria-expanded="false">
                <img src="<?php echo e(asset('admins/img/menu-icon/2.svg')); ?>" alt="">
                <span>Pages</span>
            </a>
            <ul>
                <li><a href="<?php echo e(route('admin.users.index')); ?>">Users</a></li>
                <li><a href="<?php echo e(route('admin.posts.index')); ?>">Posts</a></li>
                <li><a href="<?php echo e(route('admin.comments.index')); ?>">Comments</a></li>
                <li><a href="<?php echo e(route('admin.tags.index')); ?>">Tags</a></li>
                <li><a href="<?php echo e(route('admin.profile.index')); ?>">Profile</a></li>
                <li><a href="<?php echo e(route('admin.roles.index')); ?>">Roles</a></li>
                <li><a href="<?php echo e(route('admin.permissions.index')); ?>">Permissions</a></li>

            </ul>
        </li>

        <li class="">
            <a   class="has-arrow" href="#" aria-expanded="false">
                <img src="<?php echo e(asset('admins/img/menu-icon/3.svg')); ?>" alt="images">
                <span>Applications</span>
            </a>
            <ul>
                <li><a href="<?php echo e(route('admin.settings.index')); ?>">Settings</a></li>
                <li><a href="mail_box.html">Mail Box</a></li>
                <li><a href="chat.html">Chat</a></li>
                <li><a href="faq.html">FAQ</a></li>
            </ul>
        </li>

        <li class="">
            <a   class="has-arrow" href="#" aria-expanded="false">
                <img src="<?php echo e(asset('admins/img/menu-icon/4.svg')); ?>" alt="images">
                <span>UI Component</span>
            </a>
            <ul>
                <li><a href="#">Elements</a>
                    <ul>
                        <li><a href="buttons.html">Buttons</a></li>
                        <li><a href="dropdown.html">Dropdowns</a></li>
                        <li><a href="Badges.html">Badges</a></li>
                        <li><a href="Loading_Indicators.html">Loading Indicators</a></li>
                    </ul>
                </li>
                <li><a href="#">Components</a>
                    <ul>
                        <li><a href="notification.html">Notifications</a></li>
                        <li><a href="progress.html">Progress Bar</a></li>
                        <li><a href="carousel.html">Carousel</a></li>
                        <li><a href="cards.html">cards</a></li>
                        <li><a href="Pagination.html">Pagination</a></li>
                    </ul>
                </li>
            </ul>
        </li>

        <li class="">
            <a   class="has-arrow" href="#" aria-expanded="false">
                <img src="<?php echo e(asset('admins/img/menu-icon/5.svg')); ?>" alt="images">
                <span>Widgets</span>
            </a>
            <ul>
                <li><a href="chart_box_1.html">Chart Boxes 1</a></li>
                <li><a href="profilebox.html">Profile Box</a></li>
            </ul>
        </li>

        <li class="">
            <a   class="has-arrow" href="#" aria-expanded="false">
                <img src="<?php echo e(asset('admins/img/menu-icon/6.svg')); ?>" alt="images">
                <span>Forms</span>
            </a>
            <ul>
                <li><a href="#">Elements</a>
                    <ul>
                        <li><a href="data_table.html">Data Tables</a></li>
                        <li><a href="bootstrap_table.html">Grid Tables</a></li>
                        <li><a href="datepicker.html">Date Picker</a></li>
                    </ul>
                </li>
                <li><a href="#">Widgets</a>
                    <ul>
                        <li><a href="Input_Selects.html">Input Selects</a></li>
                        <li><a href="Input_Mask.html">Input Mask</a></li>
                    </ul>
                </li>
            </ul>
        </li>

        <li class="">
            <a   class="has-arrow" href="#" aria-expanded="false">
                <img src="<?php echo e(asset('admins/img/menu-icon/7.svg')); ?>" alt="images">
                <span>Charts</span>
            </a>
            <ul>
                <li><a href="chartjs.html">ChartJS</a></li>
                <li><a href="apex_chart.html">Apex Charts</a></li>
                <li><a href="chart_sparkline.html">chart sparkline</a></li>
            </ul>
        </li>

    </ul>

</nav>
<!-- sidebar part end -->
<?php /**PATH C:\xampp\htdocs\freeze\breeze\resources\views/components/partials/admin_nav.blade.php ENDPATH**/ ?>