@extends('layouts.app')
@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Do you want to become a developer?
                </h1>
                <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read more
                </a>
            </div>
        </div>
    </div>
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" width="700" alt="">
        </div>
        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Struggling to be a better web developer?
            </h2>
            <p class="py-8 text-gray-500 text-s">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus molestiae ipsum totam! Minima,
                adipisci. Ab, impedit! Esse aliquam nisi corrupti.
            <p class="font-extrabold text-gray-600 text-l pb-9">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod, suscipit? Lorem ipsum dolor sit amet
                consectetur, adipisicing elit. Laborum minus eius cumque officiis consequuntur aperiam quas provident
                ratione debitis nesciunt!
            </p>
            <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">Find Out
                More</a>
        </div>
    </div>
    {{-- Test --}}


    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
{{--         @method('PUT')--}}
{{--        @foreach ($posts as $post)--}}
{{--            <h2>{{ $post->title }}</h2>--}}
{{--        @endforeach--}}

    </div>
    {{-- Test End --}}
    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">
            I am expert in ....
        </h2>
        <span class="font-extrabold block text-4xl py-1">
            UI Design
        </span>
        <span class="font-extrabold block text-4xl py-1">
            PSD to HTML
        </span>
        <span class="font-extrabold block text-4xl py-1">
            PHP Development
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Laravel Development
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Fullstack Development
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>
        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>
        <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem tenetur laborum omnis aliquid non
            laboriosam eum est minima esse nobis? Lorem ipsum dolor sit amet.
        </p>
    </div>
    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="text-xs uppercase">
{{--                     {{ $post->title }}--}}

                </span>
                <h3 class="text-xl font-bold py-10">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo amet rem iste nulla reprehenderit
                    atque.
                    Recusandae debitis voluptate nihil, qui alias temporibus, magni, nisi deserunt ea quidem eaque hic
                    consequatur!
                </h3>
                <a href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>

        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" width="700" alt="">
        </div>
    </div>

@endsection
