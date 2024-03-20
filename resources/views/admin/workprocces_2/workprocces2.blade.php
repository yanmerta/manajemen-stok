<!-- resources/views/admin/home/edit.blade.php -->

@extends('admin.general.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Work Procces</h1>
        </section>

        <section class="content">
            <form action="{{ route('admin.workprocces_2.update', $workprocces[0]->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="home_title">Title:</label>
                    <input type="text" name="title" class="form-control" value="{{ $workprocces[0]->title }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea name="description" class="form-control" rows="3" required>{{ $workprocces[0]->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="list1">List 1:</label>
                    <input type="text" name="list1" class="form-control" value="{{ $workprocces[0]->list1 }}" required>
                </div>
                <div class="form-group">
                    <label for="list2">List 2:</label>
                    <input type="text" name="list2" class="form-control" value="{{ $workprocces[0]->list2 }}" required>
                </div>
                <div class="form-group">
                    <label for="list3">List 3:</label>
                    <input type="text" name="list3" class="form-control" value="{{ $workprocces[0]->list3 }}" required>
                </div>


                <div class="form-group">
                    <label for="image">Image: {{ $workprocces[0]->image }}</label>
                    <input type="file" name="image" class="form-control-file">
                    <img src="{{ asset('/storage/public/' . $workprocces[0]->image) }}" width="50" alt="Current Image">
                    {{-- <img src="/storage/public/" width="50" alt="Current Image"> --}}
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </section>
    </div>
@endsection
