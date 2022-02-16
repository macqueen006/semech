<x-admin-layout>
    <!-- main content -->
    <div class="main_content_iner ">
        <div class="container-fluid plr_30 body_white_bg pt_30">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="QA_section">
                        <div class="white_box_tittle list_header">
                            <h4>Users</h4>
                            <div class="box_right d-flex lms_block">
                                <div class="serach_field_2">
                                    <div class="search_inner">
                                        <form Active="#">
                                            <div class="search_field">
                                                <input type="text" placeholder="Search content here...">
                                            </div>
                                            <button type="submit"><i class="ti-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="add_button ml-10">
                                    <a href="{{ route('admin.users.create') }}" class="btn_1">Add New</a>
                                </div>
                            </div>
                        </div>

                        <div class="QA_table ">
                            <!-- table-responsive -->
                            <table class="table lms_table_active">
                                <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Roles</th>
                                    <th scope="col">Joined Date</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <th scope="row"><a href="#" >{{ $user->name }}</a></th>
                                        <td>{{ $user->email }}</td>
                                        @if($user->isAdmin())
                                            @foreach($user->getRoleNames() as $role)
                                                <td>
                                                    <a href="#" class="status_btn">{{ $role }}</a>
                                                </td>
                                            @endforeach
                                        @elseif(!$user->isAdmin())
                                            <td>User</td>
                                        @endif
                                        <td>{{ $user->joinedDate() }}</td>
                                        <td>
                                            <a href="" class="paginate_button bg-gray-100">Ban</a>,
                                            <a href="" class="paginate_button bg-gray-100">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            <div class="">
                                {{ $users->render() }}
                            </div>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end main content -->
</x-admin-layout>
