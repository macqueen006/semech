@push('styles')
    <link rel="stylesheet" href="{{ asset('admins/css/chosen.min.css') }}">
@endpush

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
                                        <h3 class="mb-0">CREATE POST</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form method="post" action="{{ route('admin.posts.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="white_box mb_30">
                            <div class="form-group input_wrap mb_20">
                                <label for="image" class="text-xs">COVER IMAGE</label>
                                <input type="file" class="mb-2" name="image" value="{{ old('image') }}" id="image" required><br>
                                @error('image')
                                <span class="pl-1 text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mb_20">
                                <label for="name">Title</label>
                                <input type="text" class="form-control mb-2" name="title" id="title" placeholder="Title" value="{{ old('title') }}" autocomplete="off">
                                @error('title')
                                <span class="pl-1 text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mb_20">
                                <label for="body">content</label>
                                <textarea id="summernote" name="body">{{ old('body') }}</textarea>
                                @error('body')
                                <span class="pl-1 text-danger">{{ $message }}</span>
                                @enderror
                            </div>

{{--                            <div class="input_wrap mb_20">--}}
{{--                                <label for="name">Tags</label>--}}
{{--                                <input type="text" value=""--}}
{{--                                       data-role="tagsinput" name="tags" id="tagsInputField"/>--}}
{{--                            </div>--}}

                            <div class="form-group mb_20">
                                <label for="body">Published At</label>
                                <input type="date" id="published_at" value="{{ old('published_at') }}" name="published_at" /><br>
                                @error('published_at')
                                <span class="pl-1 text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mb_20">
                                <label for="name">Type</label>
                                <select class="" name="type" id="type">
                                        <option value="standard">Standard</option>
                                        <option value="premium">Premium</option>
                                </select>
                            </div>

                            <div class="form-group mb_20">
                                <label for="tags">Tags</label>
                                <select class="my_select_box chosen-select form-control" name="tags[]" id="tags" multiple>
                                    @foreach($tags as $tag)
                                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mb_20">
                                <label for="photo_credit_text">Photo Credit Text</label>
                                <input type="text" class="form-control mb-2" name="photo_credit_text" id="photo_credit_text" placeholder="photo credit text" value="{{ old('photo_credit_text') }}" autocomplete="off">
                            </div>

                            <div class="form-group mb_20">
                                <label for="photo_credit_link">Photo Credit Link</label>
                                <input type="text" class="form-control mb-2" name="photo_credit_link" id="photo_credit_link" placeholder="photo credit link" value="{{ old('photo_credit_link') }}" autocomplete="off">
                            </div>


                                <div class="form-group cs_check_box">
                                    <input type="checkbox" id="check_box" value="1" name="is_commentable" class="common_checkbox">
                                    <label for="check_box">
                                       Allow Comments
                                    </label>
                                </div>

                        </div>

                        <button type="submit" class="btn btn-primary">
                            Create
                        </button>

                    </form>

                </div>
            </div>
        </div>

        @push('scripts')
            <script src="{{ asset('admins/js/chosen.jquery.min.js') }}"></script>
            <script>
                $(function () {
                    $(".my_select_box").chosen('chosen:updated');
                });
                // $('.my_select_box').trigger('chosen:updated');
            </script>
    @endpush
</x-admin-layout>

