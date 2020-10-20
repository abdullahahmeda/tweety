<x-app>
    <form method="POST" action="{{ $user->path() }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="mb-6">
            <label 
                for="name" 
                class="block mb-2 font-bold text-xs text-gray-700"
            >
                Name
            </label>

            <input 
                type="text" 
                id="name" 
                name="name"
                class="border border-gray-400 p-2 w-full"
                value="{{ $user->name }}" 
                required
            >

            @error('name')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
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
                value="{{ $user->username }}" 
                required
            >

            @error('username')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="mb-6">
            <label 
                for="email" 
                class="block mb-2 font-bold text-xs text-gray-700"
            >
                Email
            </label>

            <input 
                type="email" 
                id="email" 
                name="email"
                class="border border-gray-400 p-2 w-full"
                value="{{ $user->email }}" 
                required
            >

            @error('email')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
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
                required
            >

            @error('password')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label 
                for="password_confirmation" 
                class="block mb-2 font-bold text-xs text-gray-700"
            >
                Password Confirmation
            </label>

            <input 
                type="password" 
                id="password_confirmation" 
                name="password_confirmation"
                class="border border-gray-400 p-2 w-full"
                required
            >

            @error('password_confirmation')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
        
        <div class="mb-6">
            <div>
                <label 
                    for="avatar" 
                    class="block mb-2 font-bold text-xs text-gray-700"
                >
                    Avatar
                </label>
    
                <input 
                    type="file" 
                    id="avatar" 
                    name="avatar"
                    class="border border-gray-400 p-2 w-full"
                >
    
                @error('avatar')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <img src="{{ $user->avatar }}" alt="">
        </div>

        <div class="flex justify-end">
            <button 
                type="submit"
                class="bg-blue-500 rounded-full py-2 px-4 text-white cursor-pointer"
            >
                Update
            </button>
        </div>
    </form>
</x-app>