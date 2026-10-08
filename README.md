[![PHPunit](https://github.com/Jagepard/Rudra-Exception/actions/workflows/php.yml/badge.svg)](https://github.com/Jagepard/Rudra-Exception/actions/workflows/php.yml)
[![Maintainability](https://qlty.sh/badges/aac8ad1c-d19b-4bcc-bc24-d6eabd368868/maintainability.svg)](https://qlty.sh/gh/Jagepard/projects/Rudra-Exception)
[![CodeFactor](https://www.codefactor.io/repository/github/jagepard/rudra-exception/badge)](https://www.codefactor.io/repository/github/jagepard/rudra-exception)
[![Coverage Status](https://coveralls.io/repos/github/Jagepard/Rudra-Exception/badge.svg?branch=master)](https://coveralls.io/github/Jagepard/Rudra-Exception?branch=master)
-----

# Rudra-Exception | [API](https://github.com/Jagepard/Rudra-Exception/blob/master/docs.md 'Documentation API')
#### Install
```bash
composer require rudra/exception
```
#### Usage
##### Throwing HTTP Errors
```php
// Using abort() helper
abort(404);
abort(500, 'Internal Server Error');

// Or directly
throw new RouterException('Not Found', 404);
throw new NotFoundException('Resource not found');
throw new LogicException('Invalid configuration');
```
#### Exception Hierarchy
```text
Throwable
└── RuntimeException
    └── RudraException
        ├── RouterException
        ├── LogicException
        │   └── MiddlewareException
        ├── NotFoundException
        └── RuntimeException
```
#### Configuration
##### Error Pages
Configure error handlers in your ```setting.{$env}.yml```:
```yml
http.errors:
    404:
        controller: App\Ship\Errors\Controller\HttpErrorsController 
        action: error404
    503:
        controller: App\Ship\Errors\Controller\HttpErrorsController
        action: error503
```
#### DebugBar Integration
In development mode, exceptions are automatically logged to DebugBar:
```php
if (Rudra::config()->get('environment') === 'development') {
    $debugbar->addCollector(new DebugBar\DataCollector\ExceptionsCollector());
}
```
## License

This project is licensed under the **Mozilla Public License 2.0 (MPL-2.0)** — a free, open-source license that:

- Requires preservation of copyright and license notices,
- Allows commercial and non-commercial use,
- Requires that any modifications to the original files remain open under MPL-2.0,
- Permits combining with proprietary code in larger works.

📄 Full license text: [LICENSE](./LICENSE)  
🌐 Official MPL-2.0 page: https://mozilla.org/MPL/2.0/