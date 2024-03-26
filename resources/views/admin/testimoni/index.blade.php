@extends('admin.general.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Testimonials</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.testimoni.index') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Testimonials</li>
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
                        <div class="card">
                            <div class="card-body">
                                <a href="{{ route('admin.testimoni.create') }}" class="btn btn-success">
                                    <i class="fas fa-plus"></i> Add New Testimonial
                                </a>
                                <table class="datatable table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th width="20">No</th>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th width="80">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($testimonis as $key => $testimoni)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $testimoni->testi_name }}</td>
                                                <td>{{ $testimoni->position }}</td>
                                                <td>{{ $testimoni->testi_description }}</td>
                                                <td><img src="{{ asset('/storage/public/' . $testimoni->image) }}"
                                                        width="50" alt="Testimonial Image"></td>
                                                <td>{{ $testimoni->testi_active_status ? 'Active' : 'Inactive' }}</td>
                                                <td>
                                                    <div class="btn-group dropleft">
                                                        <button class="btn btn-success dropdown-toggle" type="button"
                                                            data-toggle="dropdown" aria-expanded="false">
                                                            Menu
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item"
                                                                href="{{ route('admin.testimoni.edit', $testimoni->testimoni_id) }}"
                                                                class="btn btn-primary">Edit</a>
                                                            <form
                                                                action="{{ route('admin.testimoni.destroy', $testimoni->testimoni_id) }}"
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
