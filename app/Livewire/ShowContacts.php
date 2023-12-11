<?php

namespace App\Livewire;

use App\Models\Contact;
use App\Models\Customer;
use Livewire\Component;

class ShowContacts extends Component
{
    public Customer $customer;

    public function mount($customer)
    {
        $this->customer = $customer;
    }

    public function render()
    {
        return view('livewire.pages.contact.show-contacts', [
            'contacts' => $this->customer->contacts(),

        ])->layout('layouts.app');
    }

}
