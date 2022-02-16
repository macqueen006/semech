<x-admin-layout>
    <!-- main content -->
    <div class="main_content_iner ">
        <div class="container-fluid plr_30 body_white_bg pt_30">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="QA_section">
                        <div class="white_box_tittle list_header">
                            <h4>Tags</h4>
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
                                    <a href="{{ route('admin.tags.create') }}" class="btn_1">Add New</a>
                                </div>
                            </div>
                        </div>

                        <div class="QA_table ">
                            <!-- table-responsive -->
                            <table class="table lms_table_active">
                                <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Slug</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                   @foreach($tags as $tag)
                                <tr>
                                    <td>{{ $tag->name }}</td>
                                    <td>{{ $tag->slug }}</td>
                                    <td>{{ $tag->created_at }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('admin.tags.edit', $tag) }}" class="mr-3">Edit</a>
                                        <form action="{{ route('admin.tags.destroy', $tag ) }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <input type="submit" value="Delete">
                                        </form>
                                </tr>
                                    @endforeach
                                <div>
                                    {{ $tags->links() }}
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
