@extends('layouts.template')

@section('content')
<!-- Add this within the existing HTML structure in home.blade.php -->
<section class="py-10">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-center mb-8">Add a New Feature</h2>
        <form action="{{ route('feature.form.save') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
                <input type="text" name="title" id="title" class="form-input rounded-md shadow-sm mt-1 block w-full"
                    required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                <textarea name="description" id="description" rows="4"
                    class="form-input rounded-md shadow-sm mt-1 block w-full" required></textarea>
            </div>

            <div class="mb-4">
                <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image</label>
                <input type="file" name="image" id="image" class="form-input rounded-md shadow-sm mt-1 block w-full"
                    accept="image/*" required>
            </div>

            <div class="mt-6">
                <button type="submit" class="btn btn-primary">Add Feature</button>
            </div>
        </form>
    </div>
</section>

@endsection
