<?php

namespace App\Livewire;

use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ShowCustomers extends Component
{
    public function render()
    {
        return view('livewire.pages.customer.show-customers', [
            'customers' => Auth::user()->customers,

        ])->layout('layouts.app');
    }

    public function delete(Customer $customer)
    {
        $customer->delete();
    }
}
