# OneSignal API for Symfony

Symfony integration of the norkunas/onesignal-php-api library

## Getting Started

### Installing

You just require using composer and you're good to go!
````bash
composer require birkof/onesignal-bundle
````

If you don't use Flex, you need to manually enable bundle in your kernel:

```$php
<?php
// app/AppKernel.php
public function registerBundles()
{
    $bundles = [
        // ...
        new Adelplace\OneSignalBundle\OneSignalBundle()
    ];
}
```

### Configuration

Add the following lines to your config.yml
```
adelplace_one_signal:
    application_id: 'my application id'
    application_auth_key: 'my application auth key'
    user_auth_key: 'my user auth key'
```

### Usage

To use the api service you just need to call 'onesignal.api' in the container
```php
$api = $this->get('onesignal.api');
$api->notifications->getAll();
...
```

For more informations look at the [norkunas/onesignal-php-api documentation](https://github.com/norkunas/onesignal-php-api/blob/master/docs/getting-started.md)

## Contributing

Feel free to contribute if you have any idea to improve this project.

### Testing

Please make sure you have docker installed on your host. Then just run
```
./run-test
```

## Authors

* **Alexandre Delplace** - *Initial work* - [Adelplace](https://github.com/adelplace)
* **Daniel Stancu** - *Updates & Maintenance* - [birkof](https://github.com/birkof)

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE) file for details
