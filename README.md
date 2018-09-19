# laravel-package-boilerplate

Boilerplate for Laravel packages. Use it as a starting point for your own Laravel packages.

Includes PHPUnit and PHPCodeSniffer configuration, as well as a known good Travis CI configuration and a couple of base test cases. Uses `orchestra/testbench` as the basis of the provided base test.

Also includes my [Artisan Standalone](https://github.com/matthewbdaly/artisan-standalone) package as a development dependency. As a result, you should be able to run Artisan commands as follows:

```bash
vendor/bin/artisan make:model Example
```

How do I use it?
----------------
###### Step 1
```bash
composer create-project matthewbdaly/laravel-package-boilerplate <YOUR_NEW_PACKAGE_DIRECTORY>
```

This will generate a starting boilerplate for your app.

###### Step 2
You'll want to update your `composer.json` with your required namespace and other details - you can do this by running
```bash
 vendor/bin/artisan app:name InsertYourProjectNameHere
 ```

Test cases
----------

The package includes three test cases:

* `TestCase` - Effectively the normal Laravel test case. Use it the same way you would your normal Laravel test case
* `SimpleTestCase` - Extends the default PHPUnit test case, so it doesn't set up a Laravel application, making it quicker and well-suited to properly isolated unit tests
* `BrowserKitTestCase` - Sets up BrowserKit
