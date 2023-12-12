<?php

namespace App\Livewire;

use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\Volt\Compilers\Mount;

class CreateCustomer extends Component
{
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
    
    public function save()
    {
        $this->validate();

        Auth::user()->customers()->create(
            $this->only(['company_name', 'address', 'postal_code', 'place', 'telephone', 'emailaddress'])
        );

        return redirect()->to('/customers');
    }
        
    public function render()
    {
        return view('livewire.pages.customer.create-customer')
            -> layout('layouts.app');
    }
}
