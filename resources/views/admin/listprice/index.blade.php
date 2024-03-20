<!-- resources/views/admin/hms/index.blade.php -->

@extends('admin.general.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{ $pageTitle }}</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.listprice.index') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">{{ $pageTitle }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @if (session('success'))
                            <div id="successAlert" class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            <script>
                                window.setTimeout(function() {
                                    $("#successAlert").fadeTo(500, 0).slideUp(500, function() {
                                        $(this).remove();
                                    });
                                }, 5000); // 5000 milliseconds = 5 seconds
                            </script>
                        @endif

                        @if (session('error'))
                            <div id="errorAlert" class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                            <script>
                                window.setTimeout(function() {
                                    $("#errorAlert").fadeTo(500, 0).slideUp(500, function() {
                                        $(this).remove();
                                    });
                                }, 5000); // 5000 milliseconds = 5 seconds
                            </script>
                        @endif

                        <a href="{{ route('admin.listprice.create') }}" class="btn btn-success">
                            <i class="fas fa-plus"></i> Add New Data
                        </a>
                        <table class="datatable table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="20">No</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th width="80">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listprice as $key => $listprice)
                                    <tr>
                                        <td>{{ ++$key }}</td>

                                        <td>{{ $listprice->listprice_title }}</td>
                                        <td>{{ $listprice->listprice_description }}</td>
                                        <td>{{ $listprice->price }}</td>
                                        <td>
                                            @if ($listprice->count() > 0)
                                                <img src="{{ asset('/storage/public/' . $listprice->listprice_image) }}"
                                                    width="50" alt="listprice_image">
                                            @else
                                                No Image
                                            @endif
                                        </td>


                                        <td>
                                            <div class="btn-group dropleft">
                                                <button class="btn btn-success dropdown-toggle" type="button"
                                                    data-toggle="dropdown" aria-expanded="false">
                                                    Menu
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item"
                                                        href="{{ route('admin.listprice.edit', ['id' => $listprice->listprice_id]) }}">
                                                        Edit
                                                    </a>
                                                    <form
                                                        action="{{ route('admin.listprice.delete', ['id' => $listprice->listprice_id]) }}"
                                                        method="post" id="delete-form">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="button" class="dropdown-item">
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
        </section>
    </div>
@endsection
