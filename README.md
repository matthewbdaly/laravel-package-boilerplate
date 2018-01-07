# laravel-package-boilerplate

Boilerplate for Laravel packages. Use it as a starting point for your own Laravel packages.

Includes PHPUnit and PHPCodeSniffer configuration, as well as a known good Travis CI configuration and a couple of base test cases. Uses `orchestra/testbench` as the basis of the provided base test.

Also includes my [Artisan Standalone](https://github.com/matthewbdaly/artisan-standalone) package as a development dependency. As a result, you should be able to run Artisan commands as follows:

```bash
vendor/bin/artisan make:model Example
```

How do I use it?
----------------

```bash
composer create-project matthewbdaly/laravel-package-boilerplate <YOUR_NEW_PACKAGE_DIRECTORY>
```

This will generate a starting boilerplate for your app. You'll want to update your `composer.json` with your required namespace and other details - you can do this by running `vendor\bin\artisan app:name`.
