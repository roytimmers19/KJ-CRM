<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CreateContact extends Component
{
    public Customer $customer;

    #[Rule('required')]
    public $first_name;

    #[Rule('required')]
    public $last_name;

    #[Rule('required')]
    public $telephone;

    #[Rule('required')]
    public $emailaddress;

    public function mount(Customer $customer)
    {
        $this->customer = $customer;
    }
    public function save()
    {
        $this->customer->contacts()->create(
            $this->only(['first_name', 'last_name', 'telephone', 'emailaddress'])
        );

        return redirect()->to('/customers/edit/' . $this->customer->id);
    }
    public function render()
    {
        return view('livewire.pages.contact.create-contact')->layout('layouts.app');
    }
}
