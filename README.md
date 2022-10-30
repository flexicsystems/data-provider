# data-provider

This package provides a simple way to create data providers for your phpunit tests.

It is inspired by the [ergebnis/data-provider](https://github.com/ergebnis/data-provider/) and should extend this with additional data providers.

## Installation

Run
```sh
composer require --dev flexic/data-provider
```

# Usage

The `flexic/data-provider` package provides the following providers:

### Id
`Flexic\DataProvider\Types\CuidProvider`
- `long()` provides a CUID in long format.
- `short()` provides a CUID in short format.

`Flexic\DataProvider\Types\SequenceProvider`
- `short()` provides sequence with 10 numbers.
- `long()` provides sequence with 1000 numbers.
- `extraLong()` provides sequence with 100000 numbers.

`Flexic\DataProvider\Types\UuidProvider`
- `v1()` provides UUID in v1 format.
- `v3()` provides UUID in v3 format.
- `v4()` provides UUID in v4 format.
- `v5()` provides UUID in v5 format.
- `v6()` provides UUID in v6 format.

----
### License
This package is licensed using the GNU License.

Please have a look at [LICENSE.md](LICENSE.md).

----

[![Donate](https://img.shields.io/badge/Donate-PayPal-blue.svg)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=Q98R2QXXMTUF6&source=url)