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
                            <li class="breadcrumb-item"><a href="{{ route('admin.admin.container.index') }}">Dashboard</a>
                            </li>
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
                        <form action="{{ route('admin.admin.container.update', ['id' => $container->container_id]) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="container_title">Title:</label>
                                <input type="text" name="container_title" class="form-control"
                                    value="{{ $container->container_title }}" required>
                            </div>

                            <div class="form-group">
                                <label for="container_description">Description:</label>
                                <textarea name="container_description" class="form-control" rows="5" required>{{ $container->container_description }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="logo">Logo:</label>
                                <input type="file" name="logo" class="form-control-file">
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
