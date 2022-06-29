@extends('layouts.auth',['title'=>"Login in our website"])
@section('content')<div class="bg-white">
    <!-- Container -->
    <div class="container mx-auto">
        <div class="flex justify-center px-6 my-12">
            <!-- Row -->
            <div class="w-full xl:w-3/4 lg:w-11/12 flex shadow-lg">
                <!-- Col -->
                <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-1/2 bg-cover rounded-l-lg" style="background-image: url('https://source.unsplash.com/K4mSJ7kc0As/600x800')"></div>
                <!-- Col -->
                <div class="w-full lg:w-1/2 bg-white p-5 rounded-lg lg:rounded-l-none">
                    <h3 class="pt-4 text-2xl text-center">Welcome Back!</h3>
                    <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                                Email
                            </label>
                            <input class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline {{ $errors->has('email') ? 'border-red-500':'' }}" id="email" type="text" placeholder="email...ex:xxx@xxx.xx" name="email" />




                            @if($errors->has('email'))

                            <p class="text-xs italic text-red-500">{{ $errors->first('email') }}</p>
                            @endif

                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                                Password
                            </label>
                            <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border  {{ $errors->has('password') ? 'border-red-500':'' }} rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="password" type="password" name="password" placeholder="******************" />

                            @if($errors->has('password'))

                            <p class="text-xs italic text-red-500">{{ $errors->first('password') }}</p>
                            @endif

                        </div>
                        <div class="mb-4">
                            <input class="mr-2 leading-tight" type="checkbox" id="checkbox_id" />
                            <label class="text-sm" for="checkbox_id">
                                {{ __('Remember me') }}

                            </label>
                        </div>
                        <div class="mb-6 text-center">
                            <button class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline" type="submit">
                                Sign In
                            </button>
                        </div>
                        <hr class="mb-6 border-t" />
                        <div class="text-center">
                            <a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800" href="{{ route('register') }}">
                                Create an Account!
                            </a>
                        </div>
                        @if (Route::has('password.request'))

                        <div class="text-center">
                            <a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800" href="{{ route('password.request') }}">

                                Forgot Password?
                            </a>
                        </div>
                        @endif


                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection
