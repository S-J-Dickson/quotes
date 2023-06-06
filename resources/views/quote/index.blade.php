<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Quotes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <a href="{{ route('quote.create') }}"
                   class="bg-blue-500 hover:bg-blue-700 font-bold py-2 px-4 rounded flex justify-end">
                    Create Quote
                </a>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- JS Table here --}}

                    <table class="min-w-full bg-white border border-gray-300">
                        <thead>
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Order Number
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Title
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Name
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Contact Name
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Contact Email
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Currency
                            </th>
                        </tr>
                        </thead>

                        <!-- Table rows go here -->
                        @foreach($quotes as $quote)
                            <tr>
                                <td>
                                    {{ $quote->number }}
                                </td>
                                <td>
                                    {{ $quote->title }}
                                </td>
                                <td>
                                    {{ $quote->client->name }}
                                </td>
                                <td>
                                    {{ $quote->client->contact_name }}
                                </td>
                                <td>
                                    {{ $quote->client->contact_email }}
                                </td>
                                <td>
                                    {{ $quote->currency->code }}
                                </td>
                            </tr>

                            @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
