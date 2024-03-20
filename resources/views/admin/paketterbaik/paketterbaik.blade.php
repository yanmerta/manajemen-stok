<!-- resources/views/admin/home/edit.blade.php -->

@extends('admin.general.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Paket Terbaik</h1>
        </section>

        <section class="content">
            <form action="{{ route('admin.paketterbaik.update', $paketterbaik[0]->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" class="form-control" value="{{ $paketterbaik[0]->title }}" required>
                </div>
                <!-- Menambahkan input untuk setiap service -->
                <div class="form-group">
                    <label for="service1">Service 1:</label>
                    <input type="text" name="service1" class="form-control" value="{{ $paketterbaik[0]->service1 }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="service2">Service 2:</label>
                    <input type="text" name="service2" class="form-control" value="{{ $paketterbaik[0]->service2 }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="service3">Service 3:</label>
                    <input type="text" name="service3" class="form-control" value="{{ $paketterbaik[0]->service3 }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="service4">Service 4:</label>
                    <input type="text" name="service4" class="form-control" value="{{ $paketterbaik[0]->service4 }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="service5">Service 5:</label>
                    <input type="text" name="service5" class="form-control" value="{{ $paketterbaik[0]->service5 }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="service6">Service 6:</label>
                    <input type="text" name="service6" class="form-control" value="{{ $paketterbaik[0]->service6 }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="service7">Service 7:</label>
                    <input type="text" name="service7" class="form-control" value="{{ $paketterbaik[0]->service7 }}"
                        required>
                </div>
                <!-- Menambahkan input untuk setiap service -->
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="text" name="price" class="form-control" value="{{ $paketterbaik[0]->price }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea name="description" class="form-control" rows="5" required>{{ $paketterbaik[0]->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="button_teks">Button Teks:</label>
                    <input type="text" name="button_teks" class="form-control"
                        value="{{ $paketterbaik[0]->button_teks }}" required>
                </div>
                <div class="form-group">
                    <label for="button_url">Button Url:</label>
                    <input type="text" name="button_url" class="form-control" value="{{ $paketterbaik[0]->button_url }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" name="image" class="form-control-file">
                    @if ($paketterbaik[0]->image)
                        <img src="{{ asset('/storage/public/' . $paketterbaik[0]->image) }}" width="50" alt="image">
                    @else
                        No Image
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </section>
    </div>
@endsection
