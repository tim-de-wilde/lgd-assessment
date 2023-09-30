<?php

namespace App\Livewire;

use App\Api\AddressApi;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\Features\SupportRedirects\HandlesRedirects;

class FormPage extends Component
{
    use HandlesRedirects;

    public array $data = [];

    protected array $rules = [
        'data.first_name' => 'required|string',
        'data.initials' => 'required|string',
        'data.surname' => 'required|string',
        'data.email' => 'required|email|unique:users,email',
        'data.phone' => 'required|phone:NL,DE',
        'data.password' => 'required|string',
        'data.postal_code' => 'required|string',
        'data.house_number' => 'required|string',
    ];

    public function render(): View
    {
        return view('livewire.form-page');
    }

    public function submit(): void
    {
        $data = $this->validate()['data'];

        $apiResponse = AddressApi::getResponse(
            $data['postal_code'],
            $data['house_number'],
        );

        // Check if postal code combination is correct
        if (! $apiResponse->hasSucceeded()) {
            $this->addError('data.postal_code', 'The inputted postal code / house nr combination could not be found.');
            return;
        }

        // Check if initial matches first character of first name.
        if ($data['first_name'][0] !== $data['initials'][0]) {
            $this->addError('data.initials', 'First letter of first name should match first letter of initials.');
            return;
        }

        $user = User::create([
            'first_name' => $data['first_name'],
            'initials' => $data['initials'],
            'surname' => $data['surname'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
        ]);

        $address = $apiResponse->getResults()->first();

        $user->address()->create([
            'postal_code' => $data['postal_code'],
            'house_number' => $data['house_number'],
            'street' => $address->getStreetName(),
            'city' => $address->getCity(),
            'provence' => $address->getMunicipality(),
            'lat' => $address->getLat(),
            'lng' => $address->getLng(),
        ]);

        $this->redirectRoute('users.show', ['user' => $user->id]);
    }
}
