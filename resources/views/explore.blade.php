<x-app>
    <div>
        @foreach ($users as $user)
            <div class="flex items-center mb-6 bg-blue-100 p-4 rounded-lg">
                <a href="{{ $user->path() }}">
                    <img 
                        src="{{ $user->avatar }}" 
                        alt="{{ $user->name }}'s avatar'"
                        class="mr-4 rounded-full"
                    >
                </a>
                <div>
                    <a href="{{ $user->path() }}"><h4 class="font-bold">{{ $user->name }}</h4></a>
                    <a href="{{ $user->path() }}"><p>@<?= $user->username; ?></p></a>
                </div>
            </div>
        @endforeach
    </div>
</x-app>