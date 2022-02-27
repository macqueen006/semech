<x-admin-layout>
    <div class="main_content_iner ">
        <div class="container-fluid plr_30 body_white_bg pt_30">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="white_box mb_30">
                                <div class="box_header ">
                                    <div class="main-title">
                                        <h3 class="mb-0">CREATE USER</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form method="post" action="{{ route('admin.users.store') }}" >
                        @csrf
                        <div class="white_box mb_30">
                            <div class="input_wrap common_date_picker mb_20">
                                <label for="name">NAME</label>
                                <input type="text" class="form-control mb-2" name="name" id="name" placeholder="Name" value="{{ old('name') }}" required autocomplete="off">
                                @error('name')
                                <span class="pl-1 text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input_wrap common_date_picker mb_20">
                                <label for="email">EMAIL</label>
                                <input type="text" class="form-control mb-2" name="email" id="email" placeholder="email" value="{{ old('email') }}" required autocomplete="off">
                                @error('email')
                                <span class="pl-1 text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input_wrap common_date_picker mb_20">
                                <label for="password">Password</label>
                                <input type="password" class="form-control mb-2" name="password" id="password" placeholder="password" value="{{ old('password') }}" required autocomplete="off">
                                @error('password')
                                <span class="pl-1 text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" name="is_admin" value="on" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">admin</label>
                            </div>

                            <button type="submit" class="btn btn-primary mt-5">
                                Create
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
