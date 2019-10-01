# Laravel Currency API


## Why?
* Created for my own personal use, allows you to quickly grab the visitors currency & other IP information such as country.


## How do I get/use it?

Composer require the package into your laravel project.
```php
composer require soluwire/laravel-currencyapi
```

> Note: If you're using Laravel >= 5.5, you can skip the registration of the service provider, as they are registered automatically. So no need to add it into your providers array.

Then in your config folder, go into your app.php and add the below to the providers array.
```php
soluwire\currencyapi\CurrencyApiProvider::class,
```

I would then recommend setting your `default_currency` which can be found in vendor->soluwire->settings->config.php



Once you've set your `default_currency`, you're ready to go- simply do the below.


```php
\soluwire\currencyapi\Driver::CallApi("8.8.8.8") //Replace 8.8.8.8 with an ip of your choice, it'll return relevent information.
 ```
 

  ## Authors
  * Jack Bayliss - Initial work
  
 ## License
This project is licensed under the MIT License - see the [LICENSE](https://github.com/soluwire/laravel-currencyapi/blob/master/LICENSE) file for details
 ## Issues
 If you have any issues please submit an issue, I'll review it as soon as I get time.
 
 ## Contributions
 If you would like to contribute, feel free to make a fork & i'll review any changes.
 
  
  That's all folks 👍
  
