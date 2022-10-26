@extends('layouts.app')

@section('content')
    <div class="bg-white p-4 w-2/3 m-auto">
        <h2 class="text-center text-2xl">Upload your dog!</h2>
        <form action="/pictures" class="m-auto flex flex-col text-center" method="post" enctype="multipart/form-data">
            @csrf
            <div class="p-4">
                <label for="name">Name:</label>
                <input type="text"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm mx-auto rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-1/2 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    name="name" />
            </div>
            <div class="p-4">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">Upload
                    file</label>
                <input
                    class="block w-1/2 px-2 py-1 text-sm font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none m-auto ease-in-out"
                    id="image" name="image" type="file">
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF.</p>
            </div>
            <div class="errors">
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
            <div class="p-4 m-4">
                <input type="submit"
                    class="ml-auto cursor-pointer bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                    value="Submit" />
            </div>
        </form>

    </div>
@endsection
