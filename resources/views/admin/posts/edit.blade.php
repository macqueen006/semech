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
                                        <h3 class="mb-0">EDIT POST</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form method="post" action="{{ route('admin.posts.update', $post) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="white_box mb_30">
                            <div class="form-group input_wrap mb_20">
                                <label for="image" class="text-xs">COVER IMAGE</label>
                                <input type="file" class="mb-2" name="image" value="{{ old('image') }}" id="image"
                                       ><br>
                                @error('image')
                                <span class="pl-1 text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mb_20">
                                <label for="name">Title</label>
                                <input type="text" class="form-control mb-2" name="title" id="title" placeholder="Title"
                                       value="{{ $post->title }}" autocomplete="off">
                                @error('title')
                                <span class="pl-1 text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mb_20">
                                <label for="body">content</label>
                                <textarea id="summernote" name="body">{{ $post->body }}</textarea>
                                @error('body')
                                <span class="pl-1 text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mb_20">
                                <label for="body">Published At</label>
                                <input type="date" id="published_at" value="{{ $post->published_at }}"
                                       name="published_at"/><br>
                                @error('published_at')
                                <span class="pl-1 text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mb_20">
                                <label for="name">Type</label>
                                <select class="" name="type" id="type">
                                    <option value="standard" @if($post->type === 'standard') selected @endif>Standard
                                    </option>
                                    <option value="premium" @if($post->type === 'premium') selected @endif>Premium
                                    </option>
                                </select>
                            </div>

                            <div class="form-group mb_20">
                                <label for="tags">Tags</label>
                                <select class="my_select_box chosen-select form-control" name="tags[]" id="tags"
                                        multiple>
                                    @foreach($tags as $tag)
                                        <option value="{{ $tag->id }}"
                                                @if(in_array($tag->id(), $selectedTags)) selected @endif
                                        >
                                            {{ $tag->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mb_20">
                                <label for="photo_credit_text">Photo Credit Text</label>
                                <input type="text" class="form-control mb-2" name="photo_credit_text"
                                       id="photo_credit_text" placeholder="photo credit text"
                                       value="{{ $post->photo_credit_text }}" autocomplete="off">
                            </div>

                            <div class="form-group mb_20">
                                <label for="photo_credit_link">Photo Credit Link</label>
                                <input type="text" class="form-control mb-2" name="photo_credit_link"
                                       id="photo_credit_link" placeholder="photo credit link"
                                       value="{{ $post->photo_credit_link }}" autocomplete="off">
                            </div>


                            <div class="form-group cs_check_box">
                                <input type="checkbox" id="check_box" value="1" name="is_commentable"
                                       class="common_checkbox" @if($post->isCommentAble()) checked @endif>
                                <label for="check_box">
                                    Allow Comments
                                </label>
                            </div>

                        </div>

                        <button type="submit" class="btn btn-primary">
                            Update
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

