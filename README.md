# fcm
Simple FCM push notif for laravel

Instalation

update autoload in composer.json

"autoload": {
        "psr-4": {
            "App\\": "app/",
            "Aririfani\\Fcm\\": "packages/aririfani/fcm/src/"
        }
    },

Register the provider directly in your app configuration file config/app.php config/app.php:
'providers' => [
    // ...
   Aririfani\Fcm\FcmServiceProvider::class,
]

Add the facade aliases in the same file:
'aliases' => [
    ...
  'FcmMessage' => Aririfani\Fcm\FcmFacade::class,

]

Usage

use FcmMessage;

$token = $fcmUserToken;
$notification = [
            'title' => 'my notif'
        ];
        $message     = [
            'data'  => [
                    'message'   => $request->get('message'),
                    'fcm_code'  => 'test_message'
                ]
        ];

$data = FcmMessage::send($token,$notification,$message);

enjoy it
