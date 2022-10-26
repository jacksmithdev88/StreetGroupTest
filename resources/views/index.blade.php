@extends('layouts.app')

@section('content')
    <div class="flex flex-row flex-wrap">
        @foreach ($pictures as $picture)
            <div class="rounded overflow-hidden bg-white border border-gray-200 mx-5 p-4">
                <img width="400px" src="{{ asset('storage/' . $picture->file_path) }}" />
                <p class="mt-2 text-gray-500">{{ $picture->name }}</p>
                <p class="mt-2 text-gray-500">{{ $picture->votes }} votes</p>
                <form action="{{ route('pictures.upvote', ['picture' => $picture->id]) }}" method="POST">
                    @csrf
                    <button type="submit">Like</button>
                </form>
            </div>
        @endforeach
    </div>
@endsection
