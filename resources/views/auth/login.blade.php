<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="px-6 py-4 bg-gray-400 rounded-lg">
            <div class="col-md-8">
                
                <div class="card-header">{{ __('Login') }}</div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-2">
                        <label 
                            for="username" 
                            class="block mb-2 font-bold text-xs text-gray-700"
                        >
                            Username
                        </label>

                        <input 
                            type="text" 
                            id="username" 
                            name="username"
                            class="border border-gray-400 p-2 w-full"
                            value="{{ old('username') }}" 
                            required
                        >

                        @error('username')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <label 
                            for="password" 
                            class="block mb-2 font-bold text-xs text-gray-700"
                        >
                            Password
                        </label>

                        <input 
                            type="password" 
                            id="password" 
                            name="password"
                            class="border border-gray-400 p-2 w-full"
                            value="{{ old('password') }}" 
                            required
                        >

                        @error('password')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="px-4 py-2 rounded-full text-white bg-blue-500 mt-2">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            
            
            </div>
        </div>
    </div>
</x-master>
