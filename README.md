# Allows you to execute Laravel commands from your CLI in a Docker container. Useful if your command interacts with other software hosted in your Docker container.

Allows you to execute Laravel commands from your CLI in a Docker container. Useful if your command interacts with other software hosted in your Docker container.

The assumption is that this package will only ever be used for local development since any commands you run in production should already be in the container.

## Installation

You can install the package via composer:

```bash
composer require garrett9/laravel-container-command
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-container-command-config"
```
## Usage

```php

use Garrett9\ContainerCommand\Commands\ContainerCommand;

class SendRegisterInvitation extends ContainerCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'my:command {parameter1} {parameter2}';
}
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Garrett](https://github.com/garrett9)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
