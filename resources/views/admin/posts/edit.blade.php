@push('styles')
    <link rel="stylesheet" href="{{ asset('admins/css/choices.css') }}">
    <link rel="stylesheet" href="{{ asset('admins/css/pickaday.css') }}">
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
                                <label for="name">Content</label>
                                <textarea id="open-source-plugins" name="body">{!! $post->body !!}</textarea>
                                @error('body')
                                <span class="pl-1 text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mb_20">
                                <label for="body">Published At</label><br>
                                <input type="text" id="datepicker" name="published_at"
                                       value="{{ $post->published_at }}" placeholder="YYYY MM DD" autocomplete="off">
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
                                <select class="" name="tags[]" id="tags" multiple x-data="{}" x-init="function() {
                                choices($el) }">
                                    @foreach($tags as $tag)
                                        <option value="{{ $tag->id }}"
                                                @if(in_array($tag->id, $selectedTags)) selected @endif>{{ $tag->name }}</option>
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
            <script src="{{ asset('admins/js/pickaday.js') }}"></script>
            <script>
                //pick a day
                let picker = new Pikaday(
                    {
                        field: document.getElementById('datepicker'),
                        format: 'D MMM YYYY',
                    });
            </script>
            <script src="{{ asset('admins/js/tinymce/tinymce.min.js') }}"></script>
            <script>
                var useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
                var editor_config = {
                    path_absolute: "/",
                    selector: 'textarea#open-source-plugins',
                    relative_urls: false,
                    plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap emoticons',
                    imagetools_cors_hosts: ['picsum.photos'],
                    toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
                    toolbar_sticky: true,
                    template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
                    template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
                    height: 500,
                    image_caption: true,
                    quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
                    noneditable_noneditable_class: 'mceNonEditable',
                    toolbar_mode: 'sliding',
                    contextmenu: 'link image imagetools table',
                    skin: useDarkMode ? 'oxide-dark' : 'oxide',
                    content_css: useDarkMode ? 'dark' : 'default',
                    content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
                    image_title: true,
                    automatic_uploads: true,

                    file_picker_callback: function (callback, value, meta) {
                        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                        var y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;

                        var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
                        if (meta.filetype === 'image') {
                            cmsURL = cmsURL + "&type=Images";
                        } else {
                            cmsURL = cmsURL + "&type=Files";
                        }

                        tinyMCE.activeEditor.windowManager.openUrl({
                            url: cmsURL,
                            title: 'Filemanager',
                            width: x * 0.8,
                            height: y * 0.8,
                            resizable: "yes",
                            close_previous: "no",
                            onMessage: (api, message) => {
                                callback(message.content);
                            }
                        });
                    }
                };

                tinymce.init(editor_config);

            </script>
            <script>
                // Get a reference to the file input element
                const inputElement = document.querySelector('input[id="image"]');

                // Create a FilePond instance
                const pond = FilePond.create(inputElement);
                FilePond.setOptions({
                    server: '/upload',
                });

            </script>
    @endpush

</x-admin-layout>

