# Silex Facebook Service Provider

[![Build Status](https://travis-ci.org/euskadi31/FacebookServiceProvider.svg?branch=master)](https://travis-ci.org/euskadi31/FacebookServiceProvider)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/971dff41-735f-49c8-8841-b079830c3801/mini.png)](https://insight.sensiolabs.com/projects/971dff41-735f-49c8-8841-b079830c3801)
[![Coverage Status](https://coveralls.io/repos/euskadi31/FacebookServiceProvider/badge.svg?branch=master&service=github)](https://coveralls.io/github/euskadi31/FacebookServiceProvider?branch=master)

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
