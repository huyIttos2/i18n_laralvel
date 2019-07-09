@extends('base')
@section('add')

    <a href="{!! route('home') !!} "> {!! __('language.home') !!}</a>
    <a href="{{route('posts.list')}}">{!! __('language.list_post') !!}</a>
    <form action="{{route('posts.store')}}" method="post" class="form-create-post">
        {{csrf_field()}}
        <label for="title">Tiêu đề</label> <br/>
        <input id="title" name="title" type="text"/> <br/>
        <label for="content">{!! __('language.content') !!}</label> <br/>
        <textarea id="content" name="content"></textarea><br/>
        <button type="submit" value="Create">{!! __('language.save') !!}</button>
    </form>
    @endsection