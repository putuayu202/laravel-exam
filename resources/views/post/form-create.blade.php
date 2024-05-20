<x-app-layout>    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-grey dark:bg-grey overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                    @csrf
                        <div class="max-w-2xl mx-auto">
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Upload Image</label>
                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help" name = "picture" id="user_avatar" type="file" accept="image/png, image/gif, image/jpeg">
                        </div>
                        <div class="max-w-xl mx-auto mt-4">
                            <x-input-label for="caption" :value="__('caption')" />
                            <x-text-input id="caption" class="block mt-1 w-full" type="text" name="caption" :value="old('caption')" required />
                            <x-input-error :messages="$errors->get('caption')" class="mt-2" />
                        </div>
                        <div class="max-w-xl mx-auto mt-4" align="center">
                            <button type="submit" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Post</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <x-new-post></x-new-post>
</x-app-layout>