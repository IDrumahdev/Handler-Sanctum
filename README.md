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

Response Json : 
Example Show

```php
// App/Http/Controllers/usersController.php

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Ibnudirsan\LaraHandlerSanctum\Halper\ResponseJson;

class usersController extends Controller
{
    public function getDataUsers()
    {
        $users = User::all();
            return ResponseJson::Show($users);
    }
}

```

Publish package configuration ``` php artisan vendor:publish --tag=handler-sanctum-config ```
