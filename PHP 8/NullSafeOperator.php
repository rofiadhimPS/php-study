<?php

class Address
{
    public ?string $country;
}

class User
{
    public ?Address $address;
}

function getCountry(?User $user): ?string
{
    // check manually
    // if($user != null){
    //     if($user->address != null) {
    //         return $user->address->country;
    //     }
    // }
    // return null;
    
    // with null safe operator
    return $user?->address?->country;
}

echo getCountry(null) . PHP_EOL;