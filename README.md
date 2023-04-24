### Working with events and listeners in laravel 10

1. php artisan make:event UserSubscribed

    App\Events\UserSurbscribed

controller: NewsController
migration : newsletter

2. php artisan make:listener EmailOwnerAboutSubscription

3. php artisan make:mail UserSubscribedMessage

4. register the event in App\Providers\EventServiceProvider
   protected $listen = [
   Registered::class => [
   SendEmailVerificationNotification::class,
   ],
   UserSurbscribed::class=>[
   EmailOwnerAboutSubscription::class
   ]
   ];
