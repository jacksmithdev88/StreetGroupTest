@extends('layouts.app')

@section('content')
    <div class="bg-white p-4 w-2/3 m-auto">
        <h2 class="text-center text-2xl">Upload your dog!</h2>
        <form action="/pictures" class="m-auto flex flex-col text-center" method="post" enctype="multipart/form-data">
            @csrf
            <div class="p-4">
                <label for="name">Name:</label>
                <input type="text" name="name" />
            </div>
            <div class="p-4">
                <label for="image">File:</label>
                <input type="file" name="image" />
            </div>
            <div class="p-4">
                <input type="submit"
                    class="ml-auto cursor-pointer bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                    value=" Save " />
            </div>
        </form>
        @if ($errors->any())
            <div class="m-auto text-center">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-red-600">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection
