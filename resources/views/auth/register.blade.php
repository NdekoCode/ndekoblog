@extends('layouts.auth',['title'=>"Register in our website"])
@section('content')
<!-- Container -->
<div class="container mx-auto">
    <div class="flex justify-center px-6 my-12">
        <!-- Row -->
        <div class="w-full xl:w-3/4 lg:w-11/12 flex shadow-lg">
            <!-- Col -->
            <div class="w-full h-auto bg-gray-400 hidden lg:block lg:w-5/12 bg-cover rounded-l-lg" style="background-image: url('https://source.unsplash.com/Mv9hjnEUHR4/600x800')"></div>
            <!-- Col -->
            <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
                <h3 class="pt-4 text-2xl text-center">Create an Account!</h3>
                <form class="px-8 pt-6 pb-8 mb-4 bg-white rounded" method="post" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-4 md:flex md:justify-between">
                        <div class="mb-4 md:mr-2 md:mb-0">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="firstName">
                                First Name
                            </label>
                            <input class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline {{ $errors->has('firstname') ? 'border-red-500':'' }}" id="firstName" name="firstname" type="text" placeholder="First Name" />
                            @if($errors->has('firstname'))
                            <p class="text-xs italic text-red-500">{{ $errors->first('firstname') }}</p>
                            @endif



                        </div>
                        <div class="md:ml-2">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="lastName">
                                Last Name
                            </label>
                            <input class="w-full px-3 py-2 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline {{ $errors->has('lastname') ? 'border-red-500':'' }}" id="lastName" type="text" name="lastname" placeholder="Last Name" />
                            @if($errors->has('lastname'))


                            <p class="text-xs italic text-red-500">{{ $errors->first('lastname') }}</p>

                            @endif

                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="email">
                            Email
                        </label>
                        <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline {{ $errors->has('email') ? 'border-red-500':'' }}" id="email" type="email" name="email" placeholder="Email" />

                        @if($errors->has('email'))

                        <p class="text-xs italic text-red-500">{{ $errors->first('email') }}</p>
                        @endif

                    </div>
                    <div class="mb-4 md:flex md:justify-between">
                        <div class="mb-4 md:mr-2 md:mb-0">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="password">
                                Password
                            </label>
                            <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border {{ $errors->has('password') ? 'border-red-500':'' }} rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="******************" />

                            @if($errors->has('password'))

                            <p class="text-xs italic text-red-500">{{ $errors->first('password') }}</p>
                            @endif

                        </div>
                        <div class="md:ml-2">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="c_password">
                                Confirm Password
                            </label>
                            <input class="w-full px-3 py-2 mb-3 text-sm leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline" id="c_password" name="password_confirmation" type="password" placeholder="******************" />
                        </div>
                    </div>
                    <div class="mb-6 text-center">
                        <button class="w-full px-4 py-2 font-bold text-white bg-blue-500 rounded-full hover:bg-blue-700 focus:outline-none focus:shadow-outline" type="submit">
                            Register Account
                        </button>
                    </div>
                    <hr class="mb-6 border-t" />
                    <div class="text-center">
                        <a class="inline-block text-sm text-blue-500 align-baseline hover:text-blue-800" href="{{ route('login') }}">
                            Already have an account? Login!
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
