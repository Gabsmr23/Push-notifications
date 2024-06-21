<?php
include ('vendor\minishlink\web-push\src\Subscription.php');
require_once("vendor/autoload.php");
use Minishlink\WebPush\WebPush;

$auth = [
    'VAPID' => [
        'subject' => 'mailto:me@website.com', // can be a mailto: or your website address
        'publicKey' => 'BHNWRk10UuGWhg88klGXTTZF4ZBz9m5oU4a5NGvTUGaCyqbpygGN1vefICCdbyqW7vtskucow9co-SfVCXbuczg', // (recommended) uncompressed public key P-256 encoded in Base64-URL
        'privateKey' => 'X4fX7xfyScwG0RHG6WubdMuT9ZQ0eN95DwSAWVP9FpY', // (recommended) in fact the secret multiplier of the private key encoded in Base64-URL
    ],
];

$webPush = new WebPush($auth);

$report = $webPush->sendOneNotification(
    Subscription::create(json_decode('{"endpoint":"https://wns2-bn3p.notify.windows.com/w/?token=BQYAAAAjBzlinPkKrUCiKpUgaYqnTl81iKOI21bI3VXNe2IdLq1jyj%2f%2bGimX9YsHSCzSo2aTNXtQwuRCSwWTaqkeyPuoTlt46cC%2f7%2fRA89QxI8pwhLaQZbgc%2bnbvSBOK1Z9oUZyfMIiwNocDSjORvxOj5%2bRZoBBn7gDmlUf5dKunM6eg%2fumsNzUWsRlftJIuPsmrw5wkBMmb9eIKH%2btZou7OymF7FsEpmV0Nj%2fSDPvPcTbXR6d9jQOlN2WjsgB5cAih9T%2byVKSUcdzBSwABGB4uSkGVFTqEurvjZRu341spTbDihdeDko%2fGdTWptri07bFQHYJ2NsyV92db%2f9rwgnclF5zj9","expirationTime":null,"keys":{"p256dh":"BMfL4-5J09E1J39Mi8v_r18TjzTfOGlAYAcO3N9jYhz69KJ1Yqgo27EbneTeI2xtj9SpWk6EmUAzZV9w6zNeNm0","auth":"dT51LecqQVyTB0MsnrSxWw"}}',true))
    , '{"title":"click aqui" , "body":"la pagina es increible!" , "url":"./?message=123"}', ['TTL' => 5000]);

    print_r($report);