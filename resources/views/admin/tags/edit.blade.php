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
                                        <h3 class="mb-0">EDIT TAG</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form method="post" action="{{ route('admin.tags.update', $tag) }}"  enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="white_box mb_30">
                            <div class="mb_20">
                                <input type="file" class="mb-2" name="image" id="image">
                                @error('image')
                                <span class="pl-1 text-danger">{{ $errors }}</span>
                                @enderror
                            </div>
                            <div class="input_wrap common_date_picker mb_20">
                                <label for="name">NAME</label>
                                <input type="text" class="form-control mb-2" name="name" id="name" placeholder="Name" value="{{ $tag->name }}" required autocomplete="off">
                                @error('name')
                                <span class="pl-1 text-danger">{{ $errors }}</span>
                                @enderror
                            </div>
                            <div class="input_wrap common_date_picker mb_20">
                                <label for="description">DESCRIPTION</label>
                                <textarea name="description" class="form-control" id="description" cols="30" rows="3">{{ $tag->description }}</textarea>
                                @error('description')
                                <span class="pl-1 text-danger">{{ $errors }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
