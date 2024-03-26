@extends('admin.general.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create New {{ $pageTitle }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.category.index') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">Create New {{ $pageTitle }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="category_name">Category Name:</label>
                                <input type="text" name="category_name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="slug">Slug:</label>
                                <input type="text" name="slug" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
