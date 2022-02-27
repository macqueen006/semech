<x-admin-layout>
    <!-- main content -->
    <div class="main_content_iner ">
        <div class="container-fluid plr_30 body_white_bg pt_30">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="QA_section">
                        <div class="white_box_tittle list_header">
                            <h4>Posts</h4>
                            <div class="box_right d-flex lms_block">
                                <div class="serach_field_2">
                                    <div class="search_inner">
                                        <form method="get">
                                            <div class="search_field">
                                                <input type="text" name="search" placeholder="Search content here...">
                                            </div>
                                            <button type="submit"> <i class="ti-search"></i> </button>
                                        </form>
                                    </div>
                                </div>
                                <div class="add_button ml-10">
                                    <a href="{{ route('admin.posts.create') }}" class="btn_1">Add New</a>
                                </div>
                            </div>
                        </div>

                        <div class="QA_table ">
                            <!-- table-responsive -->
                            <table class="table lms_table_active">
                                <thead>
                                <tr>
                                    <th scope="col">title</th>
                                    <th scope="col">Excerpt</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Published At</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $post)
                                <tr>
                                    <td> <a href="#">{{ $post->title }}</a></td>
                                    <td>{!! $post->excerpt(50) !!}</td>
                                    <td>{{ $post->author()->name }}</td>
                                    <td>{{ $post->created_at }}</td>
                                    <td>{{ $post->published_at }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('admin.posts.edit', $post) }}" class="mr-2">Edit</a>
                                        <form action="{{ route('admin.posts.destroy', $post ) }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <input type="submit" value="Delete">
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                                <div>
                                    {{ $posts->links() }}
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
