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
                            <li class="breadcrumb-item"><a href="{{ route('admin.listprice.index') }}">Dashboard</a>
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
                        <form action="{{ route('admin.listprice.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="container_title">Title:</label>
                                <input type="text" name="listprice_title" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="container_title">Service 1:</label>
                                <input type="text" name="service1" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="container_title">Service 2:</label>
                                <input type="text" name="service2" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="container_title">Service 3:</label>
                                <input type="text" name="service3" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="container_title">Service 4:</label>
                                <input type="text" name="service4" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="container_title">Service 5:</label>
                                <input type="text" name="service5" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="container_title">Service 6:</label>
                                <input type="text" name="service6" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="container_title">Service 7:</label>
                                <input type="text" name="service7" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="price">price:</label>
                                <input type="text" name="price" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="container_Description">Description:</label>
                                <textarea name="listprice_description" class="form-control" rows="5" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="container_title">Button Teks:</label>
                                <input type="text" name="button_teks" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="container_title">Button Url:</label>
                                <input type="text" name="button_url" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="logo">Image:</label>
                                <input type="file" name="listprice_image" class="form-control-file">
                            </div>

                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
