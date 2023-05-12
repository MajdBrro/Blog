@extends('layouts.app')
{{-- @extends('layouts.sidebar') --}}
@section('content')
<div class=" container m-auto text-center pt-15 pd-5 ">
    <h1 class=" text-6xl font-bold ">All posts</h1>
</div>
@if(Auth::check())  
<div class=" container sm:grid mx-auto p-5 border-b border-gray-300">
    <a href="/blog/create" class="bg-green-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-lg place-self-start" >Create New Post</a>
</div>
@endif

@foreach($posts as $post)
        <div class=" container sm:grid grid-cols-2 gap-15 mx-auto py-15 px-5 border-b border-gray-300">
            <div class=" flex ">
                {{-- <img class=" object-cover" src="https://picsum.photos/id/230/960/620" alt="">  --}}
                <img class=" object-cover" src="{{ $post['image_path'] }}" alt=""> 
                {{-- <img class=" object-cover" src={{ $post --> image_path }} alt=""> --}}
            </div>
            <div>
                {{-- <h2 class=" text-gray-700 font-bold text-4xl py-5 md:pt-0 ">How to create a blog with Laravel</h2>  --}}
                <h2 class=" text-gray-700 font-bold text-4xl py-5 md:pt-0 ">{{ $post['title'] }}</h2> 
                {{-- <h2 class=" text-gray-700 font-bold text-4xl py-5 md:pt-0 ">{{ $post --> title }}</h2>  --}}
                <span>
                    {{-- By: <span class=" text-gray-500 italic ">Majd Brro</span>  --}}
                    By: <span class=" text-gray-500 italic ">{{ $post->user->name }}</span> 
                    on: <span class=" text-gray-500 italic ">{{ date('d-m-y',strtotime($post['updated_at'])) }}</span> 
                    {{--By: <span class=" text-gray-500 italic ">{{ $post --> user_id }}</span> --}}
                    {{-- <p class=" text-lg text-gray-700 py-8 leading-6  ">PHP/FI could be used to build simple, dynamic web applications. To accelerate bug reporting and improve the code, Lerdorf initially announced the release of PHP/FI as "Personal Home Page Tools (PHP Tools) version 1.0" on the Usenet discussion group comp.infosystems.www.authoring.cgi on June 8, 1995.[1][22] This release already had the basic functionality that PHP has today. This included Perl-like variables, form handling, and the ability to embed HTML. The syntax resembled that of Perl, but was simpler, more limited and less consistent.[11]</p> --}}
                    {{-- <p class=" text-lg text-gray-700 py-8 leading-6  "> {{ $post['description'] }} </p> --}}
                    {{-- <p class=" text-lg text-gray-700 py-8 leading-6  ">{{ $post --> description }} </p> --}}
                    <a href="{{ route('blog.show', $post -> id) }}" class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-lg place-self-start" >Read more</a>
                </span>
                
            </div>
        </div>
@endforeach

                
@endsection
                