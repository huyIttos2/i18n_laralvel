@extends('layouts.base')
@section('add')
    <a href="{!! route('home') !!} "> {!! __('language.home') !!}</a>
    <a href="{!! route('posts.create') !!} ">{!! __('language.create_post') !!}</a>
    @if (count($posts) == 0)
        <p>{!! __('language.post_not_exist') !!}</p>
    @else
        <ul>
            @foreach($posts as $post)
                <li>{{$post->title}}</li>
            @endforeach
        </ul>
    @endif
    @endsection
