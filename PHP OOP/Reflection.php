<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";

$request = new LoginRequest();
$request->username = "sas";
$request->password = "null";

// ValidationUtil::validate($request);      

ValidationUtil::validateReflection($request);

class RegisterUserRequest {
    public ?string $username;
    public ?string $address;
    public ?string $email;
}

$register = new RegisterUserRequest();
$register->username = "Rofiadhim";
$register->address = null;
$register->email = "adhim@gmail.com";

ValidationUtil::validateReflection($register);