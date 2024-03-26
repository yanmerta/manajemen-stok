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
                            <li class="breadcrumb-item"><a href="{{ route('admin.category.index') }}">Category</a></li>
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
                        <form action="{{ route('admin.category.update', ['id' => $categories->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="category_name">Category Name:</label>
                                <input type="text" name="category_name" class="form-control"
                                    value="{{ $categories->category_name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="slug">Slug:</label>
                                <input type="text" name="slug" class="form-control" value="{{ $categories->slug }}"
                                    required>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
