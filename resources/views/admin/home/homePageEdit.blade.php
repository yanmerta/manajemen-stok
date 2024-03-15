<!-- resources/views/admin/home/edit.blade.php -->

@extends('admin.general.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Edit Home Data - {{ $home->home_title }}</h1>
        </section>

        <section class="content">
            <form action="{{ route('admin.admin.home.update', $home->home_id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="home_title">Title:</label>
                    <input type="text" name="home_title" class="form-control" value="{{ $home->home_title }}" required>
                </div>

                <div class="form-group">
                    <label for="home_description">Description:</label>
                    <textarea name="home_description" class="form-control" rows="3" required>{{ $home->home_description }}</textarea>
                </div>

                <div class="form-group">
                    <label for="home_contactme">Contact:</label>
                    <input type="text" name="home_contactme" class="form-control" value="{{ $home->home_contactme }}"
                        required>
                </div>

                <div class="form-group">
                    <label for="home_video">Video:</label>
                    <input type="text" name="home_video" class="form-control" value="{{ $home->home_video }}" required>
                </div>

                <div class="form-group">
                    <label for="home_image">Image:</label>
                    <input type="file" name="home_image" class="form-control-file">
                    <img src="{{ asset($home->home_image) }}" width="50" alt="Current Image">
                </div>

                <div class="form-group">
                    <label for="home_advantage">Advantage:</label>
                    <input type="text" name="home_advantage" class="form-control" value="{{ $home->home_advantage }}"
                        required>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </section>
    </div>
@endsection
