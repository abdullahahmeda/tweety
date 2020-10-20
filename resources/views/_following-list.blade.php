<div class="bg-blue-100 p-4 rounded-lg">
    <h1 class="font-bold text-xl mb-4">Following</h1>
    <ul>
        @forelse (current_user()->follows as $user)
        <li class="flex items-center text-sm mb-4">
            <a href="{{ $user->path() }}">
                <img 
                    src="{{ $user->avatar }}" 
                    alt="{{ $user->name }}"
                    class="rounded-full mr-2"
                    width="40"
                >
            </a>
            <a href="{{ $user->path() }}">{{ $user->name }}</a>
        </li>
        @empty
            <li>No friends yet.</li>
        @endforelse
    </ul>
</div>