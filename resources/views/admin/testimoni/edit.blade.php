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
                            <li class="breadcrumb-item"><a href="{{ route('admin.testimoni.index') }}">Testimoni</a></li>
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
                        <form action="{{ route('admin.testimoni.update', ['id' => $testimonis->testimoni_id]) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="testi_name">Testimonial Name:</label>
                                <input type="text" name="testi_name" class="form-control"
                                    value="{{ $testimonis->testi_name }}" required>
                            </div>

                            <div class="form-group">
                                <label for="position">Position:</label>
                                <input type="text" name="position" class="form-control"
                                    value="{{ $testimonis->position }}" required>
                            </div>

                            <div class="form-group">
                                <label for="testi_description">Testimonial Description:</label>
                                <textarea name="testi_description" class="form-control" rows="5" required>{{ $testimonis->testi_description }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="image">Image: {{ $testimonis->image }}</label>
                                <input type="file" name="image" class="form-control-file">
                                <img src="{{ asset('/storage/public/' . $testimonis->image) }}" width="50"
                                    alt="Current Image">
                                {{-- <img src="/storage/public/" width="50" alt="Current Image"> --}}
                            </div>

                            <div class="form-group">
                                <label for="testi_active_status">Active Status:</label>
                                <select name="testi_active_status" class="form-control" required>
                                    <option value="1" {{ $testimonis->testi_active_status == 1 ? 'selected' : '' }}>
                                        Active</option>
                                    <option value="0" {{ $testimonis->testi_active_status == 0 ? 'selected' : '' }}>
                                        Inactive</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
