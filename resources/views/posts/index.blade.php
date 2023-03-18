@extends('layout.app')
@section('content')
  @include('layout.navbar')

@include('posts.create')


<div id="containr" class= "flex justify-center items-center flex-col w-full p-6 gap-4 bg-slate-50">


@foreach($posts as $post)
  <div class="bg-white border rounded-sm max-w-md">
    <div class="flex items-center px-4 py-3">
      <img class="h-8 w-8 rounded-full" src="https://picsum.photos/id/1027/150/150"/>
      <div class="ml-3 ">
        <span class="text-sm font-semibold antialiased block leading-tight">{{$post->user->name}}</span>
        <span class="text-gray-600 text-xs block">{{ $post->user->email }}</span>
      </div>
    </div>
    <!-- discreption part -->
    <div class="px-4 py-3 ">
      <p class="text-gray-700 text-sm">
        {{$post->description}}
      </p>
    </div>
<!--  display post image-->
    <img src="{{ asset('storage/' . $post->image) }}" class="py-3"/>
    <a href="{{ route('postDetails', $post->id) }}" class="text-xs font-semibold text-blue-500">
    <div class="flex items-center justify-between mx-4 mt-3 mb-2">

      <div class="flex gap-5">

        <svg fill="#262626" height="24" viewBox="0 0 48 48" width="24"><path clip-rule="evenodd" d="M47.5 46.1l-2.8-11c1.8-3.3 2.8-7.1 2.8-11.1C47.5 11 37 .5 24 .5S.5 11 .5 24 11 47.5 24 47.5c4 0 7.8-1 11.1-2.8l11 2.8c.8.2 1.6-.6 1.4-1.4zm-3-22.1c0 4-1 7-2.6 10-.2.4-.3.9-.2 1.4l2.1 8.4-8.3-2.1c-.5-.1-1-.1-1.4.2-1.8 1-5.2 2.6-10 2.6-11.4 0-20.6-9.2-20.6-20.5S12.7 3.5 24 3.5 44.5 12.7 44.5 24z" fill-rule="evenodd"></path></svg>
      </div>
    </div>
    <div class="font-semibold text-sm mx-4 mt-2 mb-4">{{$post->comments->count()}} comments</div>
    </a>
  </div>
@endforeach
</div>

