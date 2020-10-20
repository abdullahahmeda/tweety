<x-master>
    <div class="px-8">
        <div class="container mx-auto">
            <main class="py-4">
                <div class="lg:flex">
                    @if(auth()->check())
                        <div class="w-1/5">
                            @include('_sidebar-links')
                        </div>
                    @endif
                    <div class="lg:flex-1 lg:mx-4">
                        {{ $slot }}
                    </div>
                    @if(auth()->check())
                        <div class="w-1/5">
                            @include('_following-list')
                        </div>
                    @endif
                </div>
            </main>
        </div>
    </div>
</x-master>
