<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Quotes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <a href="{{ route('quote.create') }}" class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded flex justify-end">
                    Create Quote
                </a>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- JS Table here --}}

                    <table class="min-w-full bg-white border border-gray-300">
                        <thead>
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contact Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contact Email</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Currency ID</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- Table rows go here -->
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">Quote 1</td>
                            <td class="px-6 py-4 whitespace-nowrap">John Doe</td>
                            <td class="px-6 py-4 whitespace-nowrap">Contact Name</td>
                            <td class="px-6 py-4 whitespace-nowrap">contact@example.com</td>
                            <td class="px-6 py-4 whitespace-nowrap">1</td>
                        </tr>
                        <!-- Additional rows -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
