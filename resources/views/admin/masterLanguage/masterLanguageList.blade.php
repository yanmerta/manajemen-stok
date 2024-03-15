@extends('admin.general.layout')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Language List</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('masterLanguageList') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Language List</li>
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
                            <div class="card-header">
                                <div class="float-left">

                                </div>
                                <div class="float-right">
                                    <button class="btn btn-success" data-toggle="modal" data-target="#modal-create">
                                        <i class="fas fa-plus"></i> Add New Language
                                    </button>
                                </div>

                            </div>
                            <div class="card-body">

                                <table class="datatable table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th width="20">No</th>
                                            <th width="100">Flag</th>
                                            <th>Name</th>
                                            <th>Code</th>
                                            <th>status</th>
                                            <th width="80">Menu</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($list as $key => $row)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>
                                                    <img src="{{ asset('images/' . $row->lng_flag_filename) }}"
                                                        style="max-width: 100%; max-height: 300px">
                                                </td>
                                                <td>{{ $row->lng_name }}</td>
                                                <td>{{ $row->lng_code }}</td>
                                                <td>{{ $row->lng_active_status }}</td>
                                                <td>
                                                    <div class="btn-group dropleft">
                                                        <button class="btn btn-success dropdown-toggle" type="button"
                                                            data-toggle="dropdown" aria-expanded="false">
                                                            Menu
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item btn-modal-general"
                                                                data-route="{{ route('masterLanguageEdit', ['language_id' => $row->language_id]) }}"
                                                                href="#">
                                                                Edit
                                                            </a>
                                                            <a class="dropdown-item btn-confirm-general"
                                                                data-route="{{ route('masterLanguageDelete', ['language_id' => $row->language_id]) }}"
                                                                data-message-title="Please Attention"
                                                                data-message-description="Are you sure to delete this data ?"
                                                                data-message-type="warning" href="#">
                                                                Delete
                                                            </a>
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
