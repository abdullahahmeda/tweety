<div class="border border-gray-300 rounded-lg">
    @forelse ($tweets as $tweet)
        @include('_tweet')
    @empty
        <p class="text-center py-4"><strong>{{ isset($user) ? "@{$user->username}" : 'Your' }}</strong> timeline is empty.</p>
    @endforelse
</div>
