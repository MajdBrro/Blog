@extends('layouts.app')
{{-- @extends('layouts.sidebar') --}}

@section('content')

{{-- HERO --}}
<div class="hero-bg-image flex flex-col items-center justify-center"> {{-- صورة الخلفية --}}

    <h1 class="text-gray-100 text-5xl uppercase font-bold pd-10 py-4 text-center">Welcome to my Blog</h1>
    <a href="/" class="bg-gray-100 text-gray-700 py-4 px-7 rounded-lg font-bold uppercase text-xl">start reading</a>

</div>
{{-- ---------------------------------------------------------------------------------------------------------------------------- --}}
<div class="container sm:grid grid-cols-2 gap-15 mx-auto py-15"> 
    {{--  حتى تكون الصورة مرنة أكثر عند تكبير وتصغير المتصفح :container--}}
    {{--   حتى يضع لي الصورة والكتابة بعمودين من أجل الشاشات الصغيرة:grid-cols-2--}}
    {{--   هي البعد بين العمودين:gap--}}
    {{--   هي المسافة من الاعلى ومن الاسفل:py--}}
    <div class="mx-2 md:mx-0">
        {{--   هي بعد الصورة عن حافة المتصفح:mx--}}
        {{--   هي بعد الصورة عن حافة المتصفح بالشاشات المتوسطة متل التابليت :md--}}
        <img class="sm:rounded-lg" src="https://picsum.photos/id/239/960/620" alt="">
    </div>
    {{-- ---------------------------- --}}
    <div class="flex flex-col items-left justify-center m-10 sm:m-0">
        <h2 class="font-bold text-gray-700 text-4xl uppercase ">How to be Expert in 2023</h2>
        <p class="font-bold text-gray-600 text-xl pt-2 uppercase">
            you can find a list of all programming languages here.
        </p>
        <p class="py-4 text-gray-500 text-sm leading-5">
            Get the same random image every time based on a seed 
        </p>
        <a href="/" class="bg-gray-700 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-lg place-self-start" >Read more</a>
        {{--   حتى يصبح التمدد على حجم العبارة:place-self-start--}}
    </div>
    {{-- ---------------------------- --}}
</div>
{{-- ---------------------------------------------------------------------------------------------------------------------------- --}}
    {{-- Blog Categries --}}
    <div class="text-center p-15 bg-gray-700 text-gray-100">
        <h2 class="text-2xl">Blog categories</h2>
        <div class="container mx-auto pt-10 sm:grid grid-cols-4">
            {{--   حتى يصبح في المنتصف:mx-auto--}}
            <div class="font-bold text-2xl py-2">UX Design Thinking</div>
            <div class="font-bold text-2xl py-2">Programming</div>
            <div class="font-bold text-2xl py-2">Graphic Design</div>
            <div class="font-bold text-2xl py-2">Front-End Development</div>
        </div>
    </div>
    {{-- ---------------------------- --}}

{{-- Recent posts --}}
<div class=" container mx-auto text-center py-15">
    <h2 class=" font-bold text-5xl py-10 ">Recent Posts</h2>
    <p class=" text-gray-400 leading-6 px-10 ">PHP is a general-purpose scripting language geared toward web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1993 and released in 1995. The PHP reference implementation is now produced by The PHP Group.PHP was originally an abbreviation of Personal Home Page,but it now stands for the recursive initialism PHP: Hypertext Preprocessor.</p>
</div>
<div class="sm:grid grid-cols-2 w-4/5 mx-auto">
    {{-- وتعني الرض كاملاً أربعة أخماس : w-4/5--}}
    <div class=" flex bg-yellow-700 text-gray-100 pt-10 ">
        <div class=" block m-auto pt-4 pd-15 w-4/5 ">
            
            <ul class=" md:flex text-xs gap-2 ">
                <li class=" bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300  "> <a href="/">PHP</a>
                <li class=" bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300  "> <a href="/">Programming</a>
                <li class=" bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300  "> <a href="/">Languages</a>
                <li class=" bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300  "> <a href="/">Backend</a>
                </li>
            </ul>
            <h3 class=" text-lg py-10 leading-6 ">PHP code is usually processed on a web server by a PHP interpreter implemented as a module, a daemon or as a Common Gateway Interface (CGI) executable. On a web server, the result of the interpreted and executed PHP code – which may be any type of data, such as generated HTML or binary image data – would form the whole or part of an HTTP response. Various web template systems, web content management systems, and web frameworks exist which can be employed to orchestrate or facilitate the generation of that response. Additionally, PHP can be used for many programming tasks outside the web context, such as standalone graphical applications[15] and robotic drone control.[16] PHP code can also be directly executed from the command line.
            </h3>
            <a href="/" class=" bg-transparent border-2 text-gray-100 py-4 px-10 rounded-lg font-bold uppercase text-lg inline-block" >Read more</a>


        </div>

    </div>
    <div class=" flex ">
        <img  class=" object-cover " src="https://picsum.photos/id/242/960/620" alt="">
            {{-- حتى تكون الصورة على امتداد البوست:flex--}}
            {{-- حتى لا تتأثر بالانضغط عند تكبير وتصغير المتصفح:object-cover--}}

    </div>
</div>
@endsection