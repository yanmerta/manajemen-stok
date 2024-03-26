@extends('admin.general.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Blog Post</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.blog.index') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Edit Post</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{ route('admin.blog.update', $post->post_id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="post_title">Title</label>
                                        <input type="text" class="form-control" id="post_title" name="post_title"
                                            placeholder="Enter title" value="{{ $post->post_title }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="post_description">Description</label>
                                        <textarea class="form-control" id="post_description" name="post_description" rows="5"
                                            placeholder="Enter description" required>{{ $post->post_description }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="post_image">Image</label>
                                        <input type="file" class="form-control-file" id="post_image" name="post_image">
                                        @if ($post->post_image)
                                            <img src="{{ asset('storage/public/' . $post->post_image) }}" alt="Post Image"
                                                class="mt-2" style="max-width: 200px;">
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="post_category_id">Category</label>
                                        <select class="form-control" id="post_category_id" name="post_category_id" required>
                                            <option value="">Select category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ $category->id == $post->post_category_id ? 'selected' : '' }}>
                                                    {{ $category->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
