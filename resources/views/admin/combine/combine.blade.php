<!-- resources/views/admin/home/edit.blade.php -->

@extends('admin.general.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Gallery</h1>
        </section>

        <section class="content">
            <form action="{{ route('admin.combine.update', $combine[0]->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" class="form-control" value="{{ $combine[0]->title }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <input type="text" name="description" class="form-control" value="{{ $combine[0]->description }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="list1">List 1:</label>
                    <input type="text" name="list1" class="form-control" value="{{ $combine[0]->list1 }}" required>
                </div>
                <div class="form-group">
                    <label for="list2">List 2:</label>
                    <input type="text" name="list2" class="form-control" value="{{ $combine[0]->list2 }}" required>
                </div>
                <div class="form-group">
                    <label for="list3">List 3:</label>
                    <input type="text" name="list3" class="form-control" value="{{ $combine[0]->list3 }}" required>
                </div>
                <div class="form-group">
                    <label for="list3">Contact</label>
                    <input type="text" name="contact" class="form-control" value="{{ $combine[0]->contact }}" required>
                </div>

                <div class="form-group">
                    <label for="image">Image: {{ $combine[0]->image }}</label>
                    <input type="file" name="image" class="form-control-file">
                    <img src="{{ asset('/storage/public/' . $combine[0]->image) }}" width="50" alt="Current Image">
                    {{-- <img src="/storage/public/" width="50" alt="Current Image"> --}}
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </section>
    </div>
@endsection
