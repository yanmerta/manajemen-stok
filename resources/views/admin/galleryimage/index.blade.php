<!-- resources/views/admin/hms/index.blade.php -->

@extends('admin.general.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{ $pageTitle }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.gallery.image.index') }}">Gallery Image</a>
                            </li>
                            <li class="breadcrumb-item active">{{ $pageTitle }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @if (session('success'))
                            <div id="successAlert" class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            <script>
                                window.setTimeout(function() {
                                    $("#successAlert").fadeTo(500, 0).slideUp(500, function() {
                                        $(this).remove();
                                    });
                                }, 5000); // 5000 milliseconds = 5 seconds
                            </script>
                        @endif

                        @if (session('error'))
                            <div id="errorAlert" class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                            <script>
                                window.setTimeout(function() {
                                    $("#errorAlert").fadeTo(500, 0).slideUp(500, function() {
                                        $(this).remove();
                                    });
                                }, 5000); // 5000 milliseconds = 5 seconds
                            </script>
                        @endif

                        <a href="{{ route('admin.gallery.image.create') }}" class="btn btn-success">
                            <i class="fas fa-plus"></i> Add New Data
                        </a>
                        <table class="datatable table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="20">No</th>
                                    <th>Image</th>
                                    <th>Active Status</th>
                                    <th width="80">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($gallery as $key => $gallery)
                                    <tr>
                                        <td>{{ ++$key }}</td>
                                        <td>
                                            @if ($gallery->count() > 0)
                                                <img src="{{ asset('/storage/public/' . $gallery->gallery_image) }}"
                                                    width="50" alt="gallery_Image">
                                            @else
                                                No Image
                                            @endif
                                        </td>
                                        <td>{{ $gallery->gallery_active_status }}</td>

                                        <td>
                                            <div class="btn-group dropleft">
                                                <button class="btn btn-success dropdown-toggle" type="button"
                                                    data-toggle="dropdown" aria-expanded="false">
                                                    Menu
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item"
                                                        href="{{ route('admin.gallery.image.edit', ['id' => $gallery->gallery_image_id]) }}">
                                                        Edit
                                                    </a>
                                                    <form
                                                        action="{{ route('admin.gallery.image.delete', ['id' => $gallery->gallery_image_id]) }}"
                                                        method="post" id="delete-form">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="button" class="dropdown-item">
                                                            Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
