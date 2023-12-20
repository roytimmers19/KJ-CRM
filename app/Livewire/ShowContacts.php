<?php

namespace App\Livewire;

use App\Models\Contact;
use App\Models\Customer;
use Livewire\Component;

class ShowContacts extends Component
{
    public $contacts;

    public Customer $customer;

    public function mount($customer)
    {
        $this->customer = $customer;
    }

    public function render()
    {
        $this->contacts = $this->customer->contacts()->get();

        return view('livewire.pages.contact.show-contacts')->layout('layouts.app');
    }

    public function delete(Contact $contact)
    {
        $contact->delete();
    }

    public function edit(Contact $contact)
    {
        return redirect()->to('/contacts/edit/'.$contact->id);
    }
}
