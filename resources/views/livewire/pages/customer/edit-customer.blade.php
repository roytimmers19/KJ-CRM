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
                        {{ __("Edit your customer and it will be saved for you.") }}
                    </p>
                </header>

                <form wire:submit.prevent="save" class="mt-6 space-y-6">

                <div>
                        <x-input-label for="company_name" :value="__('Company name')" />
                        <x-text-input wire:model="company_name" id="company_name" name="company_name" type="text" class="mt-1 block w-full" required autofocus autocomplete="company" />
                        <x-input-error class="mt-2" :messages="$errors->get('company_name')" />
                    </div>

                    <div>
                        <x-input-label for="address" :value="__('Address')" />
                        <x-text-input wire:model="address" id="address" name="address" type="text" class="mt-1 block w-full" required autocomplete="address" />
                        <x-input-error class="mt-2" :messages="$errors->get('address')" />
                    </div>

                    <div>
                        <x-input-label for="postal_code" :value="__('Postal code')" />
                        <x-text-input wire:model="postal_code" id="postal_code" name="postal_code" type="text" class="mt-1 block w-full" required autofocus autocomplete="postal_code" />
                        <x-input-error class="mt-2" :messages="$errors->get('postal_code')" />
                    </div>

                    <div>
                        <x-input-label for="place" :value="__('Place')" />
                        <x-text-input wire:model="place" id="place" name="place" type="text" class="mt-1 block w-full" required autocomplete="place" />
                        <x-input-error class="mt-2" :messages="$errors->get('place')" />
                    </div>

                    <div>
                        <x-input-label for="telephone" :value="__('Telephone')" />
                        <x-text-input wire:model="telephone" id="telephone" name="telephone" type="text" class="mt-1 block w-full" required autofocus autocomplete="phone" />
                        <x-input-error class="mt-2" :messages="$errors->get('telephone')" />
                    </div>

                    <div>
                        <x-input-label for="emailaddress" :value="__('EmailAddress')" />
                        <x-text-input wire:model="emailaddress" id="emailaddress" name="emailaddress" type="text" class="mt-1 block w-full" required autocomplete="email" />
                        <x-input-error class="mt-2" :messages="$errors->get('emailaddress')" />
                    </div>

                    <div class="flex items-center gap-4">
                        <x-primary-button>{{ __('Save') }}</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>