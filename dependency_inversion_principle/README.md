### Dependency Inversion Principle (DIP)

**1. High-level modules should not depend on low-level modules. Both should depend on abstractions (interfaces).**
**2 Abstractions should not depend on details. Details should depend on abstractions.**

## Without DIP (Tight Coupling)

```php
namespace App\Http\Controllers;

use App\Services\EmailNotificationService;

class NotificationController extends Controller
{
    public function send()
    {
        $emailService = new EmailNotificationService();
        $emailService->send("Hello, User!");
    }
}
```
*Issues:*
- If you need to switch to SMS notification, you have to modify the controller.
- It's hard to test because you'r tied to ```EmailNotificationService```.

## Roles in the Example

| Component                          | Role               | Explanation                                                                                                      |
| ---------------------------------- | ------------------ | ---------------------------------------------------------------------------------------------------------------- |
| ```NotificationController```             | High-Level Module  | It orchestrates the behavior and depends on the abstraction, not the details.                                   |
| ```NotificationServiceInterface```       | Abstraction        | Defines the contract between the high-level module and the low-level modules.                                   |
| ```EmailNotificationService```           | Low-Level Module   | A concrete implementation that handles sending notifications via email.                                         |
| ```SMSNotificationService```             | Low-Level Module   | A concrete implementation that handles sending notifications via SMS.                                           |


## Example in Laravel

To explore how **Dependency Inversion Principle (DIP)** is implemented in laravel, check out the following paths in the project.

- app/Services/NotificationServiceInterface.php
- app/Services/EmailNotificationService.php
- app/Services/SMSNotificationService.php
- app/HTTP/Controllers/NotificationController.php

Writing styles of **Liskov Substitution Principle (LSP)** and **Dependency Inversion Principle (DIP)** are very similar. 