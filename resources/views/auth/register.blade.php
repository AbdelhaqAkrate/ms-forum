@extends('layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form method="POST" action="{{ route('register.submit') }}">
    @csrf
        <div class="col-md-8">
            <div class="card">

                  <body class="bg-gray-10 ">
   <div class="flex justify-center h-screen w-screen items-center">
    <div class="w-full md:w-1/2 flex flex-col items-center " >
        <h1 class="text-center text-2xl font-bold text-gray-600 mb-6">SignUp</h1>
        <!-- wlcom to OcpMs -->
        <div class="w-3/4 mb-6">
            <h1 class="text-center text-2xl font-bold text-gray-600 mb-6">Welcome to <span class="text-green-500">O</span>cp<span class="text-green-500">M</span>s</h1>
        </div>
         <div class="w-3/4 mb-6">
            <input type="text" name="name" id="name" class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-blue-500" placeholder="Username">
        </div>
        <div class="w-3/4 mb-6">
            <input type="email" name="email" id="email" class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-blue-500" placeholder="Email">
        </div>
        <div class="w-3/4 mb-6">
            <input type="password" name="password" id="password" class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-blue-500 " placeholder="Password">
        </div>

        <div class="w-3/4 mt-4">
            <button type="submit" class="py-4 bg-blue-400 w-full rounded text-blue-50 font-bold hover:bg-blue-700"> LOGIN</button>
        </div>
        <div class="w-3/4 mt-4">
            <a href="{{ route('login') }}" class="py-4  w-full rounded text-black font-bold "> Login</a>
        </div>
    </div>
   </div>
</body>
    </form>
    </div>
</div>
@endsection
