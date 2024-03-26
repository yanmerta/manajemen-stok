<!-- resources/views/admin/blog/index.blade.php -->

@extends('admin.general.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Blog Posts</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.blog.index') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Blog Posts</li>
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
                                <a href="{{ route('admin.blog.create') }}" class="btn btn-success">
                                    <i class="fas fa-plus"></i> Add New Post
                                </a>
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Category</th>
                                            <th>Author</th>
                                            <th>Created_at</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($posts as $key => $post)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ $post->post_title }}</td>
                                                <td>{{ $post->post_description }}</td>
                                                <td>{{ $post->category->category_name }}</td>
                                                <td>{{ $post->user ? $post->user->name : 'Unknown User' }}</td>
                                                <td>{{ $post->created_at->format('d M Y') }}</td>
                                                <td>
                                                    <div class="btn-group dropleft">
                                                        <button class="btn btn-success dropdown-toggle" type="button"
                                                            data-toggle="dropdown" aria-expanded="false">
                                                            Menu
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item"
                                                                href="{{ route('admin.blog.edit', $post->post_id) }}"
                                                                class="btn btn-primary">Edit</a>
                                                            <form action="{{ route('admin.blog.destroy', $post->post_id) }}"
                                                                method="post" id="delete-form">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="dropdown-item">
                                                                    Delete
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
