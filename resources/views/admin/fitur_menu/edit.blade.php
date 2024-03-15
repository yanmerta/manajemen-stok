@extends('admin.general.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit {{ $pageTitle }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.fiturmenu.index') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Edit {{ $pageTitle }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('admin.fiturmenu.update', ['id' => $fiturmenu->fitur_menu_id]) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="fitur_menu_title">Title:</label>
                                <input type="text" name="fitur_menu_title" class="form-control"
                                    value="{{ $fiturmenu->fitur_menu_title }}" required>
                            </div>

                            <div class="form-group">
                                <label for="fitur_menu_description">Description:</label>
                                <textarea name="fitur_menu_description" class="form-control" rows="5" required>{{ $fiturmenu->fitur_menu_description }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="fitur_menu_image">Image:</label>
                                <input type="file" name="fitur_menu_image" class="form-control-file">
                                <img src="{{ asset('/storage/public/' . $fiturmenu->fitur_menu_image) }}"
                                    alt="Current Image" style="max-width: 50px;">
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
