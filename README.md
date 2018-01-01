# laravel-package-boilerplate

Boilerplate for Laravel packages. Use it as a starting point for your own Laravel packages.

Includes PHPUnit and PHPCodeSniffer configuration, as well as a known good Travis CI configuration and a couple of base test cases.

Also includes my [Artisan Standalone](https://github.com/matthewbdaly/artisan-standalone) package as a development dependency. As a result, you should be able to run Artisan commands as follows:

```bash
vendor/bin/artisan make:model Example
```
