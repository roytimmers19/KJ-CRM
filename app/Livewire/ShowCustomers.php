<?php

namespace App\Livewire;

use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowCustomers extends Component
{

    public $customers;
    public $companyName;

    public function render()
    {
        $this->getCustomers();
        return view('livewire.pages.customer.show-customers')->layout('layouts.app');
    }

    public function updatedCompanyName()
    {
        $this->getCustomers();
    }


    public function getCustomers()
    {
        if ($this->companyName > '') {
            $this->customers = Auth::user()
                ->customers
                ->where('company_name', 'like', $this->companyName);
        } else {
            $this->customers = Auth::user()
                ->customers;
        }
    }

    public function delete(Customer $customer)
    {
        $customer->delete();
    }
}
