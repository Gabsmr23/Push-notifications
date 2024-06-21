<?php
require_once("vendor/autoload.php");

use Minishlink\WebPush\VAPID;

print_r(VAPID::createVapidKeys());

/*
    [publicKey] => BHNWRk10UuGWhg88klGXTTZF4ZBz9m5oU4a5NGvTUGaCyqbpygGN1vefICCdbyqW7vtskucow9co-SfVCXbuczg
    [privateKey] => X4fX7xfyScwG0RHG6WubdMuT9ZQ0eN95DwSAWVP9FpY
*/