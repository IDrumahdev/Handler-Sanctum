# Laravel Sanctum API Handler

[![Latest Version on Packagist](https://img.shields.io/github/v/release/ibnudirsan/Lara-Handler-Sanctum?style=plastic)](https://packagist.org/packages/ibnudirsan/handle-http-api)
![Size Code on Packagist](https://img.shields.io/github/languages/code-size/ibnudirsan/Lara-Handler-Sanctum?style=plastic)
![issues on Packagist](https://img.shields.io/github/issues/ibnudirsan/Lara-Handler-Sanctum?style=plastic)
![follower on Packagist](https://img.shields.io/github/followers/ibnudirsan?style=plastic)
![discussions on Packagist](https://img.shields.io/github/discussions/ibnudirsan/Lara-Handler-Sanctum?style=plastic)
![commit on Packagist](https://img.shields.io/github/commit-activity/m/ibnudirsan/Lara-Handler-Sanctum?style=plastic)
![license on Packagist](https://img.shields.io/github/license/ibnudirsan/Lara-Handler-Sanctum?style=plastic)

## Cara menggunakannya :
install Package ``` composer require ibnudirsan/lara-handler-sanctum ```

Ganti baris kode program ini :

```php
// bootstrap/app.php

<?php

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class,
);

```

Menjadi seperti ini :
```php
// bootstrap/app.php

<?php

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    Ibnudirsan\LaraHandlerSanctum\Exceptions\HandlerSanctumException::class,
    App\Exceptions\Handler::class,
);

```

## Response Json


```php

    /**
     * Method yang dapat digunakan
     */
    return ResponseJson::cretae($result);
    return ResponseJson::read($result);
    return ResponseJson::show($result);
    return ResponseJson::update();
    return ResponseJson::delete();

```

#### Usage Example :

```php
// App/Http/Controllers/usersController.php

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Ibnudirsan\LaraHandlerSanctum\Halper\ResponseJson;

class usersController extends Controller
{
    public function getUser($id)
    {
        $result = User::where('id',$id)->first();
            return ResponseJson::read($result);
    }
}

```

```
// Contoh Return Json

{
    "app": {
        "info": {
            "error": false,
            "Status": "Read Data",
            "httpcode": 200,
            "Message": "Successfully Read Data"
        },
        "result": {
            "data": {
                "name": "ibnudirsan",
                "email": "ibnudirsan@gmail.com"
            }
        }
    }
}
```

## Publish
Publish package configuration ```php php artisan vendor:publish --tag=handler-sanctum-config ```

Secara otomatis akan membuat file ``` handler.php ```

```php
// config/handler.php

<?php

return [
    
    'hidden' => [
        'email_verified_at',
        'created_at',
        'updated_at',
    ]
];

```

Note :

- Di file ini bisa menambahkan atau menguragi filed yang di hidden.
