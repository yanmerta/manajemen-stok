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
                            <li class="breadcrumb-item"><a href="{{ route('admin.testimoni.index') }}">Dashboard</a></li>
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
                        <form action="{{ route('admin.testimoni.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="testi_name">Testimonial Name:</label>
                                <input type="text" name="testi_name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="position">Position:</label>
                                <input type="text" name="position" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="testi_description">Testimonial Description:</label>
                                <textarea name="testi_description" class="form-control" rows="5" required></textarea>
                            </div>

                            <div class="form-group">
                                <label for="image">Image:</label>
                                <input type="file" name="image" class="form-control-file" required>
                            </div>

                            <div class="form-group">
                                <label for="testi_active_status">Active Status:</label>
                                <select name="testi_active_status" class="form-control" required>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
