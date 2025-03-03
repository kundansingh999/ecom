@include('frontend.bin.pageheader')


<div class="container text-center p-4">
    <h1 style="color:black;">Please Login</h1>
    <div class="row bg-info p-4">
        <div class="col border border-4 dark signupimage">
            <img src="{{asset('assets/img/login1.png')}}" alt="" style="height:403px;">
        </div>
        <div class="col border border-4 dark">
            <div class="container mt-5">
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
                @endif
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div shree ram>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block form-control" type="text" name="email"
                            :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="block form-control" type="password" name="password" required
                            autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                name="remember">
                            <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                        </label>
                    </div> <br>

                    <x-primary-button class="ms-3 btn btn-dark">
                        {{ __('Log in') }}
                    </x-primary-button> <br>
                    <div class="mt-2">
                        <a href="{{url('register')}}" style="color:black; text-decoration:none; margin-top:2px;">Sign
                            Up</a>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                        @endif


                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-----------------------------------------Footer------------------------------->
@include('frontend.bin.footer')