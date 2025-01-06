### Liskov Substitution Princiiple

**"Object of a superclass should be replaceable with objects of its subclasses withouting affecting the correctness of the program."**

## In Simpler Terms:

- Subclass should not violate the exceptations set by the parent class.
- The child-class must adher to the same contract (interface) as the parent class.

## Benifits Of LSP

- You can easily **switch** between the different implementations of an interface or abstract class.

*Example:* 
**Assume** we wanna use a `CachedUserRepository` in development to test caching logic, we can write like the following in `app/Providers/AppServiceProvider.php` for it.

<code>
    $this->app->bind(UserRepositoryInterface::class, function ($app) {
        return new  CachedUserRepository($app->make(EloquentUserRepository::class));
    });
</code>

Or otherwise, if we wanna switch to **production purpose**, just switch the implementation like the following.

<code>
    $this->app->bind(UserRepositoryInterface::class, EloquentUserRepository::class);
</code>

## Example in Laravel

To explore how **Liskov Substitution Principle (LSP)** is implemented, checkout the following locations in the project:

- app/Repositories/UserRepositoryInterface.php
- app/Repositories/CachedUserRepository.php
- app/Repositories/EloquentUserRepository.php

- app\Http\Controllers\UserController.php

- app/Providers/AppServiceProvider.php