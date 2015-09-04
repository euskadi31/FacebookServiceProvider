# Silex Facebook Service Provider

[![Build Status](https://travis-ci.org/euskadi31/FacebookServiceProvider.svg?branch=master)](https://travis-ci.org/euskadi31/FacebookServiceProvider)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/2c558cf6-6607-4eba-a1c1-08f60e1d14ae/mini.png)](https://insight.sensiolabs.com/projects/2c558cf6-6607-4eba-a1c1-08f60e1d14ae)


## Install

Add `euskadi31/facebook-service-provider` to your `composer.json`:

    % php composer.phar require euskadi31/facebook-service-provider:~1.0

## Usage

### Configuration

```php
<?php

$app = new Silex\Application;

$app->register(new \Euskadi31\Silex\Provider\FacebookServiceProvider);
```

## License

FacebookServiceProvider is licensed under [the MIT license](LICENSE.md).
