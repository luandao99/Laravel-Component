@extends('layouts.app')

@section('content')


<div class="space-y-2 pt-6 md:space-y-5">
    <x-header title="News Blog">
         <p class="text-lg leading-7 text-gray-500 dark:text-gray-400 border-b-2 border-neutral-700 pb-10">
            Learn more about Laravel and Tailwind CSS
        </p>
    </x-header>

      <div class="divide-y divide-gray-200 dark:divide-gray-700">
        @foreach ($posts as $post)
            <x-news.post-item :post="$post" />
        @endforeach
    </div>
</div>

@endsection