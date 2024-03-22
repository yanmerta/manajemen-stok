<!-- resources/views/admin/homeslider/create.blade.php -->

@extends('admin.general.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create New Home Slider</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.admin.hms.index') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Create New Home Slider</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('admin.admin.hms.update', $homeSlider->hms_id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="hms_title">Title:</label>
                                <input value="{{ $homeSlider->hms_title }}" type="text" name="hms_title"
                                    class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="hms_description">Description:</label>
                                <textarea value="" name="hms_description" class="form-control" rows="3" required>{{ $homeSlider->hms_description }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
