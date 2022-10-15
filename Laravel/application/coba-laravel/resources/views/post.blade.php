@extends('layouts.main')
    @section('container')
        @foreach ($Posts as $post)
            <article class="mb-5">
                <h2>
                    <a href="/post/{{ $post["slug"] }}">{{ $post["title"] }}</a>
                </h2>
                <h5>By :{{ $post["author"] }}</h5>
                <p>{{ $post["body"] }}</p>
            </article>
        @endforeach
    @endsection


        