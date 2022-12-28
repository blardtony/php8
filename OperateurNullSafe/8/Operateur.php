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

$country = $session?->getUser()?->getAddress()?->getCountry();

echo $country;