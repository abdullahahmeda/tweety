<x-app>
    <header class="mb-6">
        <img 
            src="https://picsum.photos/700/300" 
            alt="{{ $user->name }} Cover" 
            class="rounded-lg w-full"
            style="max-height: 300px"
        >
    </header>
    
    <div class="flex justify-between items-center mb-2 relative">
        <div>
            <h2 class="font-bold text-2xl">
                {{ $user->name }}
            </h2>
            <p class="text-sm text-gray-800">
                Joined {{ $user->created_at->diffForHumans() }}
            </p>
        </div>
        
        <img 
            src="{{ $user->avatar }}" 
            alt="{{ $user->name }}" 
            class="absolute rounded-full border-4 border-blue-100 transform -translate-x-1/2 -translate-y-1/2"
            style="width: 150px; left: 50%;"
        >
    
        <div class="flex">
            <x-edit-button :user="$user"></x-edit-button>
            <x-follow-button :user="$user"></x-follow-button>
        </div>
    </div>
    
    <p class="text-center text-sm mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, eligendi. Aliquid amet mollitia vitae nulla, ipsa
        non nisi, sint ab, provident eligendi exercitationem fugit saepe placeat debitis molestiae sequi nam?</p>
    
    @if (current_user()->is($user))
        @include('_publish-tweet-panel')
    @endif

    @include('_timeline', [
    'tweets' => $user->tweets
    ])
    
</x-app>
