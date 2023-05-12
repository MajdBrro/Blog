@extends('layouts.app')


@section('content')
<div class=" container m-auto text-center pt-15 pd-5 ">
    <h1 class=" text-6xl font-bold ">{{ $post -> title }}</h1>
    <div class=" mt-10 ">
        By: <span class=" text-gray-500 italic ">{{ $post->user->name }}</span> 
        on: <span class=" text-gray-500 italic ">{{ date('d-m-y',strtotime($post['updated_at'])) }}</span> 
    </div>
</div>


<div class=" container m-auto  pt-15 pd-5 ">
    <div class=" flex h-96">
        <img class=" object-cover w-full" src="{{ $post['image_path'] }}" alt=""> 
    </div>

    <p class=" text-lg text-gray-700 py-8 leading-6  "> {{ $post['description'] }} </p>

    @if(Auth::check() && Auth::user()->id==$post->user_id )  
        <div class=" container sm:grid mx-auto p-5 border-b border-gray-300">
            <a href="{{ route('blog.edit', $post -> id) }}" class="bg-green-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-lg place-self-start" >Edit</a>
        </div>
    @endif

    @if(Auth::check() && Auth::user()->id==$post->user_id )  
    <form action="{{ route('blog.destroy', $post -> id) }}" method="post">
        @csrf
        @method('delete')
            <div >
                <input class="del-btn bg-red-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-lg place-self-start" type="submit" value="delete">
            </div>
    @endif

</div>


                
@endsection
                