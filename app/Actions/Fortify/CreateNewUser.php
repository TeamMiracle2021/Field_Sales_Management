<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'first_name' => ['required', 'string', 'max:255'],
            'middle_name' => ['string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'NIC' => ['required', 'string', 'min:10','max:12'],
            'Address' => ['required', 'string', 'max:255'],
            'telephone_number' => ['required', 'integer', 'max:10', 'min:10'],
            'Gender' => ['required', 'string'],
            'Date_Of_Birth' => ['required', 'date'],
            'branch_name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ])->validate();

        return User::create([
            'first_name' => $input['first_name'],
            'middle_name' => $input['middle_name'],
            'last_name' => $input['last_name'],
            'NIC' => $input['NIC'],
            'Address' => $input['Address'],
            'telephone_number' => $input['telephone_number'],
            'Gender' => $input['Gender'],
            'Date_Of_Birth' => $input['Date_Of_Birth'],
            'branch_name' => $input['branch_name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
