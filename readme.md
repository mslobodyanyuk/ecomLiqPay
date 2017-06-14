WebDevMatics
============

Ecommerce Website in Laravel 5.3
--------------------------------

[Lets build fully functional ecommerce website together in laravel 5.3](https://www.youtube.com/watch?v=UvqhBoMXvPo&list=PLzz9vf6075V2fzd18vU64PBHdcHI3BaoH)

Find Code on: <https://github.com/webdevmatics>

Template: <https://github.com/webdevmatics/ecom-template>


Clone repo

 		git clone https://github.com/webdevmatics/ecom.git
        
Install the composer dependencies

		composer install

Set application key

		php artisan key:generate        

Configure .env and migrate 


+++


Start ( Seeder ) fixtures

		php artisan db:seed

Configure the host

	- httpd.conf files,

	.hosts (to work with the changes, you must restart the computer)

Testing (To use the project)



using LiqPay payment system
---------------------------

LiqPay documentation:
 <https://www.liqpay.com/ru/doc/checkout>

 <https://www.liqpay.com/ru/doc/pay>

Useful links with code to using LiqPay payment system:
  Test and try to introduce the code into the site (webstore):
	<http://beznervov.com/kak-prikrutit-oplatu-liqpay-k-svoemu-sajtu-php/>
	
	<http://polyakov.co.ua/page/pishem-modul-oplatyi-tovara-s-pomoschyu-liqpay-v-modalnom-okne>

In `CheckoutController` in `payment` action you should point the `public_key` and `private_key`:
```php
$merchant_id='public_key';
$signature='private_key';
```
Also in the transmitted parameters, specify your site:
```php
/*you should point your site*/
'result_url' => 'http://your-site/store-payment',
```