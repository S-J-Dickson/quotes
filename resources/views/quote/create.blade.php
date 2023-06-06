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
                            <span class="text-gray-700 @error('title') text-red-500 @enderror">Title</span>
                            <input type="text" name="title"
                                   class="block @error('title') border-red-500  @enderror w-full mt-1 rounded-md" placeholder=""
                                   value="{{old('title')}}" />
                        </label>
                        @error('title')
                        <div class="flex items-center text-sm text-red-600">
                            {{ $message }}
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-600" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </div>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="block">
                            <span class="text-gray-700 @error('name') text-red-500 @enderror">Name</span>
                            <input type="text" name="name"
                                   class="block @error('name') border-red-500  @enderror w-full mt-1 rounded-md" placeholder=""
                                   value="{{old('name')}}" />
                        </label>
                        @error('name')
                        <div class="flex items-center text-sm text-red-600">
                            {{ $message }}
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-600" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </div>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="block">
                            <span class="text-gray-700 @error('contact_name') text-red-500 @enderror">Contact Name</span>
                            <input type="text" name="contact_name"
                                   class="block @error('contact_name') border-red-500  @enderror w-full mt-1 rounded-md" placeholder=""
                                   value="{{old('contact_name')}}" />
                        </label>
                        @error('contact_name')
                        <div class="flex items-center text-sm text-red-600">
                            {{ $message }}
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-600" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </div>
                        @enderror
                    </div>


                    <div class="mb-6">
                        <label class="block">
                            <span class="text-gray-700 @error('contact_email') text-red-500 @enderror">Contact Email</span>
                            <input type="text" name="contact_email"
                                   class="block @error('contact_email') border-red-500  @enderror w-full mt-1 rounded-md" placeholder=""
                                   value="{{old('contact_email')}}" />
                        </label>
                        @error('contact_email')
                        <div class="flex items-center text-sm text-red-600">
                            {{ $message }}
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-600" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </div>
                        @enderror
                    </div>


                    <div class="mb-6">
                        <label class="block">
                            <span class="text-gray-700 @error('currency_id') text-red-500 @enderror">Currency</span>
                            <select name="currency_id"
                                   class="block @error('currency_id') border-red-500  @enderror w-full mt-1 rounded-md" >
                                @foreach($currencies as $currency)
                                    <option value="{{$currency->id}}">{{$currency->code}}</option>
                                @endforeach
                            </select>
                        </label>
                        @error('currency_id')
                        <div class="flex items-center text-sm text-red-600">
                            {{ $message }}
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-red-600" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </div>
                        @enderror
                    </div>

                    <button type="submit" class="text-black bg-blue-600  rounded text-sm px-5 py-2.5">Submit</button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
