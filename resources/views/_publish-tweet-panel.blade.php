<div class="rounded-lg border border-blue-400 px-8 py-6 mb-8">
    <form action="/tweets/" method="POST">
        @csrf
        <textarea 
            class="w-full" 
            name="body" 
            placeholder="Say what you want"
            required
            maxlength="255"
        ></textarea>

        <hr class="my-4">

        <footer class="flex justify-between">
            <img 
                src="{{ current_user()->avatar }}" 
                alt="Your avatar" 
                class="rounded-full mr-2"
                style="width: 40px"
            >

            <button 
                type="submit" 
                class="bg-blue-500 rounded-full py-2 px-4 text-white"
            >
                Tweet
            </button>
        </footer>
    </form>
    <form method="POST" action="/tweets/upload" class="dropzone mt-4" id="drag-n-drop-images" enctype="multipart/form-data">
        @csrf
    </form>
    @error('body')
        <p class="text-red-500 text-sm mt-4">{{ $message }}</p>
    @enderror
</div>