@extends('statamic::layout')
@section('title', __('Dashboard'))

@section('content')
    <a href="collections/tasks">
        <div class="bg-gray-600 flex">
            <div class="w-full flex flex-col my-1 bg-white shadow-lg rounded-lg overflow-hidden">

                <div class="p-4 bg-gray-200">
                    Create a new task here!
                </div>
            </div>
        </div>
    </a>


    <div class="widgets flex flex-wrap -mx-2 py-1">
        @foreach($widgets as $widget)
            <div class="widget {{ Statamic\Support\Str::tailwindWidthClass($widget['width']) }} {{ $widget['classes'] }} mb-4 px-2">
                {!! $widget['html'] !!}
            </div>
        @endforeach
    </div>
    @include('statamic::partials.docs-callout', [
        'topic' => __('Widgets'),
        'url' => Statamic::docsUrl('widgets')
    ])

@stop
