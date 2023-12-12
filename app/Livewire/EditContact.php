<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Attributes\Rule;
use Livewire\Component;

class EditContact extends Component
{

    public Contact $contact;

    #[Rule('required')]
    public $first_name;

    #[Rule('required')]
    public $last_name;

    #[Rule('required')]
    public $telephone;

    #[Rule('required')]
    public $emailaddress;

    public function mount(Contact $contact)
    {

        $this->contact = $contact;

        $this->first_name = $contact->first_name;

        $this->last_name = $contact->last_name;

        $this->telephone = $contact->telephone;

        $this->emailaddress = $contact->emailaddress;
    }

    public function save()
    {
        $this->contact->update(
            $this->all()
        );

        return redirect()->to('/customers/edit/' . $this->contact->customer_id);
    }

    public function delete(Contact $contact)
    {
        $customer_id = $this->contact->customer_id;
        $contact->delete();
        return redirect()->to('/customers/edit/' . $customer_id);
    }

    public function render()
    {
        return view('livewire.pages.contact.edit-contact')
            ->layout('layouts.app');
    }
}
