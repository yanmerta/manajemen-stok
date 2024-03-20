@extends('admin.general.layout')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Price</h1>
        </section>

        <section class="content">
            <form action="{{ route('admin.price.update', $price[0]->harga_id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="home_title">Title</label>
                    <input type="text" name="harga_title" class="form-control" value="{{ $price[0]->harga_title }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea name="harga_description" class="form-control" rows="3" required>{{ $price[0]->harga_description }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </section>
    </div>
@endsection
