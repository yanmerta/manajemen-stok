<!-- resources/views/admin/home/create.blade.php -->

@extends('admin.general.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Create New Home Data</h1>
        </section>

        <section class="content">
            <form action="{{ route('admin.home.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="home_title">Title:</label>
                    <input type="text" name="home_title" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="home_description">Description:</label>
                    <textarea name="home_description" class="form-control" rows="3" required></textarea>
                </div>

                <div class="form-group">
                    <label for="home_contactme">Contact:</label>
                    <input type="text" name="home_contactme" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="home_video">Video:</label>
                    <input type="text" name="home_video" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="home_image">Image:</label>
                    <input type="file" name="home_image" class="form-control-file" required>
                </div>

                <div class="form-group">
                    <label for="home_advantage">Advantage:</label>
                    <input type="text" name="home_advantage" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Create</button>
            </form>
        </section>
    </div>
@endsection
