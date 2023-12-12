<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Customers') }}
    </h2>
    <p class="mt-2 text-sm text-gray-700">A list of all the customers in your account including
        their company name.</p>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <div class="px-4 sm:px-6 lg:px-8">
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            {{-- <x-input-label class="text-base font-semibold leading-6 text-gray-900" for="company_name"
                                :value="__('Company name')" /> --}}
                            <x-text-input wire:model="company_name" id="company_name" name="company_name" type="text"
                                class="mt-1 block w-full" required autofocus autocomplete="company"
                                placeholder="Search for company name" wire:change="getCustomers()" />
                        </div>
                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <a href="{{ route('customers.create') }}"
                                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Add
                                customer</a>
                        </div>
                    </div>
                    <div class="mt-8 flow-root">
                        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                <table class="min-w-full divide-y divide-gray-300 table-fixed">
                                    <thead>
                                        <tr>
                                            <th scope="col"
                                                class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">
                                                Id</th>
                                            <th scope="col"
                                                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                Company name</th>
                                            <th scope="col"
                                                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                Address</th>
                                            <th scope="col"
                                                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Postal
                                                code</th>
                                            <th scope="col"
                                                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Place
                                            </th>
                                            <th scope="col"
                                                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                Telephone</th>
                                            <th scope="col"
                                                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Email
                                                Address</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200">
                                        @foreach ($customers as $customer)
                                            <tr class="cursor-pointer hover:bg-gray-50" wire:click="edit({{ $customer->id }})">
                                                <td class=" py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">
                                                    {{ $customer->id }}</td>
                                                <td class=" px-3 py-4 text-sm text-gray-500">
                                                    {{ $customer->company_name }}</td>
                                                <td class=" px-3 py-4 text-sm text-gray-500">{{ $customer->address }}
                                                </td>
                                                <td class=" px-3 py-4 text-sm text-gray-500">
                                                    {{ $customer->postal_code }}</td>
                                                <td class=" px-3 py-4 text-sm text-gray-500">
                                                    {{ $customer->place }}</td>
                                                <td class=" px-3 py-4 text-sm text-gray-500">{{ $customer->telephone }}
                                                </td>
                                                <td class=" px-3 py-4 text-sm text-gray-500">
                                                    {{ $customer->emailaddress }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
