# Bootstrap plugin for CakePHP

## Installation

You can install this plugin into your CakePHP application using [composer](https://getcomposer.org).

The recommended way to install composer packages is:

```
composer require maymeow/cake-bootstrap
```

## Configuration

Copy configuration file

```shell
cp vendor/maymeow/cake-bootstrap/config/cake_bootstrap.php config/cake_bootstrap.php
```

and load it in your bootstrap config file

```php
Configure::load('cake_bootstrap', 'default', false);
```

Load helpers in you `AppView`

```php
$this->loadHelper('Form', [
    'templates' => 'CakeBootstrap.bootstrap_form'
]);
$this->loadHelper('CakeBootstrap.Bootstrap');
```

## Using bake templates

Run from command line

```shell
bin/cake bake template <YourModel> --theme CakeBootstrap
```