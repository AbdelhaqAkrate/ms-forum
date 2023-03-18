@extends('layout.app')
@section('content')
@include('layout.navbar')

<div class= "flex justify-center items-center flex-col w-full p-4">

<div class="bg-white overflow-hidden shadow-none">
    <div class="grid grid-cols-3 min-w-full">

        <div class="col-span-2 w-full">
            <img class="w-full max-w-full min-w-full"
                src="{{ asset('storage/' . $post->image) }}"
                alt="Description">
        </div>

        <div class="col-span-1 relative pl-4">
            <header class="border-b border-grey-400">
                <a href="#" class="block cursor-pointer py-4 flex items-center text-sm outline-none focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                    <img src="https://images.pexels.com/photos/614810/pexels-photo-614810.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" class="h-9 w-9 rounded-full object-cover"
                    alt="user" />
                    <p class="block ml-2 font-bold">{{$post->user->name}}</p>
                </a>

                <!-- description -->
                <div class="py-4">
                    <p class="block ml-2">{{$post->description}}</p>
                </div>
            </header>


            <div >
               <!-- chech if there is comments if there isn't write message -->
                @if($post->comments->count() > 0)
                    @foreach($post->comments as $comment)
                    <div class="flex items-center py-4">
                        <img src="https://images.pexels.com/photos/614810/pexels-photo-614810.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260" class="h-9 w-9 rounded-full object-cover"
                            alt="user" />
                        <p class="block ml-2 font-bold">{{$comment->user->name}}</p>
                        <p class="block ml-2">{{$comment->body}}</p>
                        <p class="block ml-2">{{$comment->created_at}}</p>
                    </div>
                            <span class="text-gray-700 font-medium ml-1">
                               {{$comment->message}}
                            </span>
                    @endforeach
                @else
                    <p class="block ml-2">No comments yet</p>
                @endif


            </div>

            <div class="absolute bottom-0 left-0 right-0 pl-4">
                <div class="pt-4">
                    <div class="mb-2">
                        <div class="flex items-center">
                            <span class="mr-3 inline-flex items-center cursor-pointer">
                                <svg class="fill-heart text-gray-700 inline-block h-7 w-7 heart" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </span>
                            <span class="mr-3 inline-flex items-center cursor-pointer">
                                <svg class="text-gray-700 inline-block h-7 w-7 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                </svg>
                            </span>
                        </div>
                        <span class="text-gray-600 text-sm font-bold">{{ $post->comments->count()}} comments</span>
                    </div>
                    <span class="block ml-2 text-xs text-gray-600">{{ date_format($post->created_at, 'F d, Y') }}</span>
                </div>

                <div class="pt-4 pb-1 pr-3">
                    <div class="flex items-start">
                        <textarea class="w-full resize-none outline-none appearance-none" aria-label="Agrega un comentario..." placeholder="Agrega un comentario..."  autocomplete="off" autocorrect="off" style="height: 36px;"></textarea>
                        <button class="mb-2 focus:outline-none border-none bg-transparent text-blue-600">Publicar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



</div>
