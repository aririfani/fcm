# fcm
Simple FCM push notif for laravel

### Instalation

create directory /packages/aririfani/ in your project and clone this in folder /aririfani, update autoload in composer.json
``` 
 "autoload": {
        "classmap": [
            "database"
        ],
        "psr-4": {
            "App\\": "app/",
            "Aririfani\\Fcm\\": "packages/aririfani/fcm/src/"
        }
    },
```
### configuration

In your .env file, add the server key and the secret key for the Firebase Cloud Messaging:

```
FCM_SERVER_KEY=my_secret_server_key
FCM_SENDER_ID=my_secret_sender_id
```

### Register the provider directory in your app configuration file config/app.php:
```
'providers' => [
    // ...
   Aririfani\Fcm\FcmServiceProvider::class,
]
```
### Add the facade aliases in the same file:
```
'aliases' => [
    ...
  'FcmMessage' => Aririfani\Fcm\FcmFacade::class,

]
```
### Usage
```
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
```


enjoy it
