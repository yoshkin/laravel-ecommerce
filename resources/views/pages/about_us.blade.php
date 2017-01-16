@extends('layout')

@section('content')
            <div class="content">
                <div class="title m-b-md">
                    Title: {{ $title }}
                </div>
                <div>
                    <ul>
                        <li>URL: {{ $page['slug'] }}</li>
                        <li>Name: {{ $page['name'] }}</li>
                        {{--<li>Header: {{ $page->header }}</li>--}}
                        <li>Title: {{ $page['title'] }}</li>
                        {{--<li>Description: {{ $page->meta_description }}</li>--}}
                        <li>Body: {{ $page['content'] }}</li>
                        {{--<li>Menu Name: {{ $pageMenuName->menu->name }}</li>--}}
                    </ul>
                </div>
                <div>
                    Вывод контента страницы как HTML:
                    {!! $page['content'] !!}
                </div>
                {{--<div class="links">--}}
                        {{--@foreach ($menu as $m)--}}
                            {{--<a href="{{ $m->page->slug }}">{{ $m->name }}</a>--}}
                        {{--@endforeach--}}
                {{--</div>--}}
            </div>
@stop