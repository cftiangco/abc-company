@extends('layout.reg')
 
@section('title', '- Login')


@section('content')
  <div class="flex w-full">

    @include('partials.hero')

    <x-reg-container>

      <form action="/login" method="POST" class="w-full flex flex-col gap-3 mt-10 justify-center items-center">
          @csrf

          <div class="w-full px-10 bg-gray-200 bg-opacity-25 py-10 rounded shadow">

            <h2 class="text-center text-2xl mb-5">Login</h2>

            <div class="mb-5">
              @if ($errors->any())
                  <div class="mt-5">
                  @foreach($errors->all() as $err)
                      <p class="text-red-500">{{$err}}</p>
                  @endforeach
                  </div>
              @endif
          
              @if(Session::has('fail'))
                  <div class="mt-5">
                      <p class="text-red-500">{{Session::get('fail')}}</p>
                  </div>
              @endif

              @if(Session::has('success'))
                  <div class="mt-5">
                      <p class="text-green-500">{{Session::get('success')}}</p>
                  </div>
              @endif
            </div>

            <x-text-box
              value="{{ old('email') }}"  
              type="email" 
              label="Email" 
              placeHolder="Email" 
              name="email"/>
            <br/>

            <x-text-box 
              type="password" 
              label="Password" 
              placeHolder="Password" 
              name="pword"/>

            <x-reg-submit-button 
              label="Login"
            />

          </div>

      </form>

    </x-reg-container>

    <div class="mb-10"></div>
        

  </div>
@endsection