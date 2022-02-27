<!-- sidebar part here -->
<nav class="sidebar">
    <div class="logo d-flex justify-content-between">
        <a href="{{ route('admin.index') }}"><img src="{{ asset('img/logo/semech-systems-logo-1.png') }}" alt="image"></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="">
            <a  href="{{ route('admin.index') }}"  aria-expanded="false">
                <img src="{{ asset('admins/img/menu-icon/1.svg') }}" alt="images">
                <span>Dashboard</span>
            </a>
        </li>

        <li class="">
            <a   class="has-arrow" href="#" aria-expanded="false">
                <img src="{{ asset('admins/img/menu-icon/2.svg') }}" alt="">
                <span>Pages</span>
            </a>
            <ul>
                <li><a href="{{ route('admin.users.index') }}">Users</a></li>
                <li><a href="{{ route('admin.posts.index') }}">Posts</a></li>
                <li><a href="{{ route('admin.comments.index') }}">Comments</a></li>
                <li><a href="{{ route('admin.tags.index') }}">Tags</a></li>
                <li><a href="{{ route('admin.profile.index') }}">Profile</a></li>
                <li><a href="{{ route('admin.roles.index') }}">Roles</a></li>
                <li><a href="{{ route('admin.permissions.index') }}">Permissions</a></li>

            </ul>
        </li>

        <li class="">
            <a   class="has-arrow" href="#" aria-expanded="false">
                <img src="{{ asset('admins/img/menu-icon/3.svg') }}" alt="images">
                <span>Applications</span>
            </a>
            <ul>
                <li><a href="{{ route('admin.settings.index') }}">Settings</a></li>
            </ul>
        </li>

    </ul>

</nav>
<!-- sidebar part end -->
