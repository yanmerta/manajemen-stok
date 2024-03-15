<!-- resources/views/admin/home/edit.blade.php -->

@extends('admin.general.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Fitur - {{ $fitur[0]->fitur_title }}</h1>
        </section>

        <section class="content">
            <form action="{{ route('admin.admin.fitur.update', $fitur[0]->fitur_id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="home_title">Title:</label>
                    <input type="text" name="fitur_title" class="form-control" value="{{ $fitur[0]->fitur_title }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="home_title">Sub Title:</label>
                    <input type="text" name="fitur_subtitle" class="form-control" value="{{ $fitur[0]->fitur_subtitle }}"
                        required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </section>
    </div>
@endsection
