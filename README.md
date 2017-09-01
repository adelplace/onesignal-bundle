# Adelplace/OneSignalBundle

Symfony integration of the norkunas/onesignal-php-api library

## Getting Started

### Installing

Just require the bundle with composer

```
composer require adelplace/onesignalbundle
```

now add the following line to your app/AppKernel.php
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
onesignal:
    application_id: 'my application id'
    application_auth_key: 'my application auth id'
    user_auth_key: 'my user auth key'
```

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

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
