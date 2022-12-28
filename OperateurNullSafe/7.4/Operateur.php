<?php

declare(strict_types=1);

require_once __DIR__ . '/../Utils/Session.php';
require_once __DIR__ . '/../Utils/UserOp.php';
require_once __DIR__ . '/../Utils/Address.php';

$country = null;
$session = new Session();
$user = new UserOp();
$address = new Address();
$address->setCountry("France");
$user->setAddress($address);
$session->setUser($user);

if ($session !== null) {
    $user = $session->getUser();

    if ($user !== null) {
        $address = $user->getAddress();
        if ($address !== null) {
            $country = $address->getCountry();
        }
    }
}

echo $country;