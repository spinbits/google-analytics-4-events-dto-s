## Google Analytics 4 events DTO's

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Total Downloads][ico-downloads]][link-downloads]

## Description

This package is implementation of [Google Analytics 4](https://developers.google.com/analytics/devguides/collection/ga4), [events](https://developers.google.com/analytics/devguides/collection/ga4/reference/events).

This package provides simple interface to build and serialize objects.

## Install

Via Composer

``` bash
$ composer require spinbits/google-analytics-4-events-dto-s
```

## Example Usage

``` php
$purchase = new Purchase($order->getNumber());

$purchase->setShipping($order->getShippingTotal());
$purchase->setTax($order->getTaxTotal());

$purchase->addItem(new Item('item_id', 'item_name', 1.00, 'USD'));

//get event as array
$purchase->jsonSerialize();

//get event as json
$json = (string) $purchase;
```

You can find more examples in tests directory and in this repo: [Google Analytics 4 Enhanced ecommerce Plugin](https://github.com/spinbits/sylius-google-analytics-plugin)

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email office@spinbits.io instead of using the issue tracker.

## Credits

- [Jakub Lech][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/spinbits/google-analytics-4-events-dto-s.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/spinbits/google-analytics-4-events-dto-s/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/spinbits/google-analytics-4-events-dto-s.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/spinbits/google-analytics-4-events-dto-s.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/spinbits/google-analytics-4-events-dto-s.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/spinbits/google-analytics-4-events-dto-s
[link-travis]: https://travis-ci.org/spinbits/google-analytics-4-events-dto-s
[link-scrutinizer]: https://scrutinizer-ci.com/g/spinbits/google-analytics-4-events-dto-s/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/spinbits/google-analytics-4-events-dto-s
[link-downloads]: https://packagist.org/packages/spinbits/google-analytics-4-events-dto-s
[link-author]: https://github.com/spinbits
[link-contributors]: ../../contributors
