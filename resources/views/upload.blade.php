@extends('layouts.app')

@section('content')
    <div class="bg-white p-4 w-2/3 mx-auto">
        <h2 class="text-center text-2xl">Upload your dog!</h2>
        <form action="/pictures" method="post" enctype="multipart/form-data">
            @csrf
            Name:
            <br />
            <input type="text" name="name" />
            <br /><br />
            File:
            <br />
            <input type="file" name="image" />
            <input type="submit" value=" Save " />
        </form>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-red-600">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection
