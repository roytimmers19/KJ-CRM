<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Attributes\Rule;
use Livewire\Component;

class EditCustomer extends Component
{
    public Customer $customer;

    #[Rule('required')]
    public $company_name;

    #[Rule('required')]
    public $address;

    #[Rule('required')]
    public $postal_code;

    #[Rule('required')]
    public $place;

    #[Rule('required')]
    public $telephone;

    #[Rule('required')]
    public $emailaddress;

    public function mount(Customer $customer)
    {
        
        $this->customer = $customer;

        $this->company_name = $customer->company_name;

        $this->address = $customer->address;

        $this->postal_code = $customer->postal_code;

        $this->place = $customer->place;

        $this->telephone = $customer->telephone;

        $this->emailaddress = $customer->emailaddress;
    }

    public function save()
    {
        $this->customer->update(
            $this->all()
        );

        return redirect()->to('/customers');
    }

    public function render()
    {
        return view('livewire.pages.customer.edit-customer')
            ->layout('layouts.app');
    }
}
