<!-- resources/views/admin/home/edit.blade.php -->

@extends('admin.general.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Contact</h1>
        </section>

        <section class="content">
            <form action="{{ route('admin.contact.update', $contacts[0]->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" class="form-control" value="{{ $contacts[0]->title }}" required>
                </div>
                <div class="form-group">
                    <label for="list1">Button Teks:</label>
                    <input type="text" name="button_teks" class="form-control" value="{{ $contacts[0]->button_teks }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="list2">Button_url:</label>
                    <input type="text" name="button_url" class="form-control" value="{{ $contacts[0]->button_url }}"
                        required>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </section>
    </div>
@endsection
