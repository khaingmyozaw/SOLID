### Interface Segregation Principle (ISP)

**"Classes should not be foced to implement the interfaces they do not use."**

This principle encourages designing smaller, more specific interfaces tailored to the needs of individual classes rather than creating larage, monolithic interfaces.

## Problem violating ISP

Imagine you have a large interface like this:

```php
    public function registerUser(array $data);
    public function updateUser(int $id, array $data);
    public function deleteUser(int $id);
    public function notifyUser(int $id, string $message);
    public function getUserActivity(int $id);
```
And **assume** we wanna manage about `create`, `update` and `delete` users. Here the methods ``notifyUser`` and ``getUserActivity`` are irrelevant and subclasses are foced to implement those.

So instead of large interface, use *Interface Segregation Principle (ISP)*.

## Example in Laravel

To explore how **Interface Segregation Principle (ISP)** check the following paths in project.

- `app/Services/UserRegistrationInterface.php`
- `app/Services/UserActivityInterface.php`
- `app/Services/UserNotificationInterface.php`
- `app/Services/BaseUserService.php`
- `app/Services/NotificationService.php`
- `app/Services/ActivityService.php`