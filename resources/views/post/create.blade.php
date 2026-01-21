<x-layout>
    <section class="px-4 md:px-16 lg:px-24 xl:px-32 w-full">
        <form method="POST" action="/post" class="grid sm:grid-cols-2 gap-3 sm:gap-5 max-w-2xl mx-auto text-slate-300 mt-16 w-full">
            @csrf
            <div>
                <p class="mb-2 font-medium">title</p>
                <div class="flex items-center pl-3 rounded-lg overflow-hidden border border-slate-700 focus-within:border-pink-500">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user size-5" aria-hidden="true">
                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <input value="{{ old('title') }}" placeholder="Enter your name" class="w-full p-3 bg-transparent outline-none" type="text" name="title" />
                </div>
                @error('title')
                {{ $message }}
                @enderror
            </div>
            <div>
                <p class="mb-2 font-medium">author</p>
                <div class="flex items-center pl-3 rounded-lg overflow-hidden border border-slate-700 focus-within:border-pink-500">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail size-5" aria-hidden="true">
                        <path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path>
                        <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                    </svg>
                    <input value="{{ old('author') }}" placeholder="Enter your author" class="w-full p-3 bg-transparent outline-none" type="text" name="author" />
                </div>
            </div>
            <div class="sm:col-span-2">
                <p class="mb-2 font-medium">Message</p>
                <textarea name="body" rows="8" placeholder="Enter your message" class="focus:border-pink-500 resize-none w-full p-3 bg-transparent outline-none rounded-lg overflow-hidden border border-slate-700">{{ old('body') }}</textarea>
            </div>
            <input type="checkbox" name="published">
            <button type="submit" class="w-max flex items-center gap-2 bg-pink-600 hover:bg-pink-700 text-white px-10 py-3 rounded-full">
                Submit
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right size-5" aria-hidden="true">
                    <path d="M5 12h14"></path>
                    <path d="m12 5 7 7-7 7"></path>
                </svg>
            </button>
        </form>
    </section>
</x-layout>
