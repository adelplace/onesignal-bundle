# OneSignal API for Symfony

Symfony integration of the norkunas/onesignal-php-api library

## Getting Started

### Installing

Just require the bundle with composer

```
composer require adelplace/onesignal-bundle
```

Then add the following line to your app/AppKernel.php
```php
public function registerBundles()
{
    return [
        ...
        new Adelplace\OneSignalBundle\AdelplaceOneSignalBundle()
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

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE) file for details
