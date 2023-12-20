<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

class ShowCustomers extends Component
{
    public $customers;

    public $company_name;

    public function render()
    {
        $this->getCustomers();

        return view('livewire.pages.customer.show-customers')->layout('layouts.app');
    }

    public function getCustomers()
    {
        if ($this->company_name > '') {
            $this->customers = Customer::where('company_name', 'like', '%'.$this->company_name.'%')->get();
        } else {
            $this->customers = Customer::all();
        }
    }

    public function edit(Customer $customer)
    {
        return redirect()->to('/customers/edit/'.$customer->id);
    }
}
