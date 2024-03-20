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
                            <li class="breadcrumb-item"><a href="{{ route('admin.listprice.index') }}">Dashboard</a></li>
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
                        <form action="{{ route('admin.listprice.update', ['id' => $listprice->listprice_id]) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="listprice_title">Title:</label>
                                <input type="text" name="listprice_title" class="form-control"
                                    value="{{ $listprice->listprice_title }}" required>
                            </div>
                            <!-- Menambahkan input untuk setiap service -->
                            <div class="form-group">
                                <label for="service1">Service 1:</label>
                                <input type="checkbox" name="service1_active" id="service1_active" value="1"
                                    {{ $listprice->service1_active ? 'checked' : '' }}>
                                <label for="service1_active">Service 1 Active</label>

                                <input type="text" name="service1" class="form-control"
                                    value="{{ $listprice->service1 }}" required>
                            </div>
                            <!-- Menambahkan input untuk setiap service -->
                            <!-- Menambahkan input untuk setiap service -->
                            <div class="form-group">
                                <label for="service2">Service 2:</label>
                                <input type="text" name="service2" class="form-control"
                                    value="{{ $listprice->service2 }}" required>
                            </div>
                            <!-- Menambahkan input untuk setiap service -->
                            <!-- Menambahkan input untuk setiap service -->
                            <div class="form-group">
                                <label for="service3">Service 3:</label>
                                <input type="text" name="service3" class="form-control"
                                    value="{{ $listprice->service3 }}" required>
                            </div>
                            <!-- Menambahkan input untuk setiap service -->
                            <!-- Menambahkan input untuk setiap service -->
                            <div class="form-group">
                                <label for="service4">Service 4:</label>
                                <input type="text" name="service4" class="form-control"
                                    value="{{ $listprice->service4 }}" required>
                            </div>
                            <!-- Menambahkan input untuk setiap service -->
                            <!-- Menambahkan input untuk setiap service -->
                            <div class="form-group">
                                <label for="service5">Service 5:</label>
                                <input type="text" name="service5" class="form-control"
                                    value="{{ $listprice->service5 }}" required>
                            </div>
                            <!-- Menambahkan input untuk setiap service -->
                            <!-- Menambahkan input untuk setiap service -->
                            <div class="form-group">
                                <label for="service6">Service 6:</label>
                                <input type="text" name="service6" class="form-control"
                                    value="{{ $listprice->service6 }}" required>
                            </div>
                            <!-- Menambahkan input untuk setiap service -->
                            <!-- Menambahkan input untuk setiap service -->
                            <div class="form-group">
                                <label for="service7">Service 7:</label>
                                <input type="text" name="service7" class="form-control"
                                    value="{{ $listprice->service7 }}" required>
                            </div>
                            <!-- Menambahkan input untuk setiap service -->
                            <div class="form-group">
                                <label for="price">Price:</label>
                                <input type="text" name="price" class="form-control" value="{{ $listprice->price }}"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="listprice_description">Description:</label>
                                <textarea name="listprice_description" class="form-control" rows="5" required>{{ $listprice->listprice_description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="button_teks">Button Teks:</label>
                                <input type="text" name="button_teks" class="form-control"
                                    value="{{ $listprice->button_teks }}" required>
                            </div>
                            <div class="form-group">
                                <label for="button_url">Button Url:</label>
                                <input type="text" name="button_url" class="form-control"
                                    value="{{ $listprice->button_url }}" required>
                            </div>
                            <div class="form-group">
                                <label for="listprice_image">Image:</label>
                                <input type="file" name="listprice_image" class="form-control-file">
                                @if ($listprice->listprice_image)
                                    <img src="{{ asset('/storage/public/' . $listprice->listprice_image) }}" width="50"
                                        alt="listprice_image">
                                @else
                                    No Image
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
