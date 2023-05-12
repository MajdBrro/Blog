@extends('layouts.app')


@section('content')
<div class=" container m-auto text-center pt-15 pd-5 ">
    <h1 class=" text-6xl font-bold ">Edit Your Post</h1>
</div>
<div class=" container m-auto  pt-15 pd-5 ">
    <form  action="{{ route('blog.update', $post->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input class=" w-full h-20 text-6xl rounded-lg shadow-lg border-b p-15 mb-5" type="text" name="title" value="{{ $post -> title }}">
        <textarea class=" w-full h-60 text-l rounded-lg shadow-lg border-b p-15 mb-5" name="description">{{ $post -> description }}</textarea>
        <div class=" py-15">
            <label class="
                bg-gray-200 hover:bg-gray-700 
                text-gray-700 hover:text-gray-200
                transition-duration-300
                cursor-pointer
                p-5 rounded-lg
                font-bold uppercase">
                <span>
                    select an image to upload
                </span>
                <input class="hidden" type="file" name="image">
            </label>
        </div>
        <button class="
                bg-green-700 hover:bg-green-200 
                text-gray-200 hover:text-gray-700
                transition-duration-300
                cursor-pointer
                p-5 rounded-lg
                font-bold uppercase">submit the post</button>
    </form>
</div>


                
@endsection
                