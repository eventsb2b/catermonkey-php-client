# Catermonkey PHP Client

A simple PHP client for interacting with the Catermonkey API. This library simplifies the process of integrating Catermonkey's services into your PHP applications.

## Documentation

### Installation

You can install the package via composer:

```bash
composer require eventsb2b/catermonkey-php-client
```

### Usage

```php
use EventsB2B\Catermonkey\Client;

$client = new Client('API_KEY');

return $client->brands()->list();
```

## Security Vulnerabilities

If you've found a bug regarding security please mail [security@eventsb2b.be](mailto:security@eventsb2b.be) instead of using the issue tracker.

## Credits

- [Liam Seys](https://github.com/liamseys)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
