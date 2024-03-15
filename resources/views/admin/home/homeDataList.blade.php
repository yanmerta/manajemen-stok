<!-- resources/views/admin/home/edit.blade.php -->

@extends('admin.general.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Home Page - {{ $homes[0]->home_title }}</h1>
        </section>

        <section class="content">
            <form action="{{ route('admin.admin.home.update', $homes[0]->home_id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="home_title">Title:</label>
                    <input type="text" name="home_title" class="form-control" value="{{ $homes[0]->home_title }}" required>
                </div>
                <div class="form-group">
                    <label for="home_title">Sub Title:</label>
                    <input type="text" name="home_subtitle" class="form-control" value="{{ $homes[0]->home_subtitle }}"
                        required>
                </div>

                <div class="form-group">
                    <label for="home_description">Description:</label>
                    <textarea name="home_description" class="form-control" rows="3" required>{{ $homes[0]->home_description }}</textarea>
                </div>

                <div class="form-group">
                    <label for="home_contactme">Contact:</label>
                    <input type="text" name="home_contactme" class="form-control" value="{{ $homes[0]->home_contactme }}"
                        required>
                </div>

                <div class="form-group">
                    <label for="home_video">Video:</label>
                    <input type="text" name="home_video" class="form-control" value="{{ $homes[0]->home_video }}"
                        required>
                </div>

                <div class="form-group">
                    <label for="home_image">Image: {{ $homes[0]->home_image }}</label>
                    <input type="file" name="home_image" class="form-control-file">
                    <img src="{{ asset('/storage/public/' . $homes[0]->home_image) }}" width="50" alt="Current Image">
                    {{-- <img src="/storage/public/" width="50" alt="Current Image"> --}}
                </div>

                <div class="form-group">
                    <label for="home_advantage">Advantage 1:</label>
                    <input type="text" name="home_advantage_1" class="form-control"
                        value="{{ $homes[0]->home_advantage_1 }}" required>
                </div>
                <div class="form-group">
                    <label for="home_advantage">Advantage 2:</label>
                    <input type="text" name="home_advantage_2" class="form-control"
                        value="{{ $homes[0]->home_advantage_2 }}" required>
                </div>
                <div class="form-group">
                    <label for="home_advantage">Advantage 3:</label>
                    <input type="text" name="home_advantage_3" class="form-control"
                        value="{{ $homes[0]->home_advantage_3 }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </section>
    </div>
@endsection
