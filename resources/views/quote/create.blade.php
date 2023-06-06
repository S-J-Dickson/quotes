<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Quote') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <form method="POST" action="{{ route('quote.store') }}">
                    @csrf
                    <div class="mb-6">
                        <label class="block">
                            <span class="text-gray-700">Title</span>
                            <input type="text" name="title" class="block w-full mt-1 rounded-md" placeholder=""
                                   value="{{old('title')}}" />
                        </label>
                        @error('title')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label class="block">
                            <span class="text-gray-700">Content</span>
                            <textarea class="block w-full mt-1 rounded-md" name="content" rows="3">{{old('content')}}</textarea>
                        </label>
                        @error('content')
                        <div class="text-sm text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="text-white bg-blue-600  rounded text-sm px-5 py-2.5">Submit</button>

                </form>

            </div>
        </div>
    </div>
</x-app-layout>
