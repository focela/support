# Support

[![Build Status][ci-img]][ci]
[![Total Downloads][icon-downloads]][link-packagist]
[![Latest Version on Packagist][icon-version]][link-packagist]
[![Software License][icon-license]][link-license]

A support package that provides flexible and reusable helper methods and traits for commonly used functionalities.

## Installation

```sh
composer require focela/support
```

# Quick Start

In this section, we'll show how you can make use of the available traits.

### EventTrait

The `EventTrait` makes it easy to add dispatching abilities to your classes.

```php
<?php

use Focela\Support\Traits\EventTrait;

class FooRepository
{
    use EventTrait;

    public function foo()
    {
        $this->fireEvent('foo');
    }
}
```

### RepositoryTrait

The `RepositoryTrait` makes it easy to create new instances of a model and to retrieve or override the model during
runtime.

```php
use Focela\Support\Traits\RepositoryTrait;

class FooRepository
{
    use RepositoryTrait;

    public function foo()
    {
        return $this->createModel();
    }
}
```

## Contributing

We encourage and support an active, healthy community of contributors &mdash;
including you! Details are in the [contribution guide](CONTRIBUTING.md) and
the [code of conduct](CODE_OF_CONDUCT.md). The support maintainers keep an eye on
issues and pull requests, but you can also report any negative conduct to
opensource@focela.com. That email list is a private, safe space; even the support
maintainers don't have access, so don't hesitate to hold us to a high
standard.

<hr>

Released under the [MIT License](LICENSE).

[ci-img]: https://github.com/focela/support/actions/workflows/tests.yml/badge.svg

[ci]: https://github.com/focela/support/actions/workflows/tests.yml

[icon-downloads]: https://poser.pugx.org/focela/support/downloads

[icon-version]: https://poser.pugx.org/focela/support/version

[icon-license]: https://poser.pugx.org/focela/support/license

[link-packagist]: https://packagist.org/packages/focela/support

[link-license]: https://opensource.org/license/mit
