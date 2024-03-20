@extends('admin.general.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Gallery Image</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/">Gallery Image</a>
                            </li>
                            <li class="breadcrumb-item active">dit Gallery Image</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('admin.gallery.image.update', $gallery->gallery_image_id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="gallery_active_status">Active Status:</label>
                                <select name="gallery_active_status" class="form-control" required>
                                    <option value="yes"
                                        {{ $gallery->gallery_active_status === 'yes' ? 'selected' : '' }}>Yes
                                    </option>
                                    <option value="no" {{ $gallery->gallery_active_status === 'no' ? 'selected' : '' }}>
                                        No
                                    </option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="gallery_image">gallery:</label>
                                <input type="file" name="gallery_image" class="form-control-file">
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
