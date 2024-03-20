<!-- resources/views/admin/home/edit.blade.php -->

@extends('admin.general.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Gallery</h1>
        </section>

        <section class="content">
            <form action="{{ route('admin.gallery.update', $gallery[0]->gallery_id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="home_title">Title:</label>
                    <input type="text" name="gallery_title" class="form-control" value="{{ $gallery[0]->gallery_title }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="home_title">Sub Title:</label>
                    <input type="text" name="gallery_subtitle" class="form-control"
                        value="{{ $gallery[0]->gallery_subtitle }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea name="gallery_description" class="form-control" rows="3" required>{{ $gallery[0]->gallery_description }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </section>
    </div>
@endsection
