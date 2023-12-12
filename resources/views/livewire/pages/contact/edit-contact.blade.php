<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <header>
                    <h2 class="text-lg font-medium text-gray-900">
                        {{ __('Edit Customer') }}
                    </h2>

                    <p class="mt-1 text-sm text-gray-600">
                        {{ __('Edit your contact and it will be saved for you.') }}
                    </p>

                </header>

                <form wire:submit.prevent="save" class="mt-6 space-y-6">

                    <div>
                        <x-input-label for="first_name" :value="__('First name')" />
                        <x-text-input wire:model="first_name" id="first_name" name="first_name" type="text"
                            class="mt-1 block w-full" required autofocus autocomplete="given-name" />
                        <x-input-error class="mt-2" :messages="$errors->get('first_name')" />
                    </div>

                    <div>
                        <x-input-label for="last_name" :value="__('Last name')" />
                        <x-text-input wire:model="last_name" id="last_name" name="last_name" type="text"
                            class="mt-1 block w-full" required autocomplete="family_name" />
                        <x-input-error class="mt-2" :messages="$errors->get('last_name')" />
                    </div>

                    <div>
                        <x-input-label for="telephone" :value="__('Telephone')" />
                        <x-text-input wire:model="telephone" id="telephone" name="telephone" type="text"
                            class="mt-1 block w-full" required autofocus autocomplete="phone" />
                        <x-input-error class="mt-2" :messages="$errors->get('telephone')" />
                    </div>

                    <div>
                        <x-input-label for="emailaddress" :value="__('EmailAddress')" />
                        <x-text-input wire:model="emailaddress" id="emailaddress" name="emailaddress" type="text"
                            class="mt-1 block w-full" required autocomplete="email" />
                        <x-input-error class="mt-2" :messages="$errors->get('emailaddress')" />
                    </div>

                    <div class="flex items-center gap-4">
                        <x-primary-button>{{ __('Save') }}</x-primary-button>
                        <div class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                            <a href="#" wire:click="delete({{ $contact->id }})"
                                class="inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">Delete</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
