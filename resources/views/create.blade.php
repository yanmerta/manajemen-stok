<!-- create.blade.php -->
@extends('admin.general.layout')

@section('content')
    <h1>Create New Home</h1>

    <form action="{{ route('home.store') }}" method="post">
        @csrf
        <label for="home_title">Title:</label>
        <input type="text" name="home_title" required>

        <label for="home_description">Description:</label>
        <textarea name="home_description" required></textarea>

        <label for="home_contactme">Contact Me:</label>
        <input type="text" name="home_contactme" required>

        <label for="home_video">Video URL:</label>
        <input type="text" name="home_video" required>

        <label for="home_image">Image URL:</label>
        <input type="text" name="home_image" required>

        <label for="home_advantage">Advantage:</label>
        <input type="text" name="home_advantage" required>

        <!-- Add other form fields -->

        <button type="submit">Create Home</button>
    </form>
@endsection
