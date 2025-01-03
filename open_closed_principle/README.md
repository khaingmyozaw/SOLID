# Open/Closed Principle (OCP)

**"A class should be opened for extension, but closed for modification."**

## Explanation

- **Open for extension:**
  You should be able to add new functionality to a module without altering the existing codes.
- **Closed for modification:**
  You should not modify existing, stable code when adding new features, as this could introduce bugs or regressions.

## Using OCP in Laravel

- **Use Abstraction:**
  Define an interface or abstract class to specify behavior. Extend it to implement new functionality without altering the base class.  
- **Use Polymorphism:**
  Leverage polymorphism to dynamically extent functionality.
- **Leverage Dependency Injection:**
  Inject dependencies at runtime to modify behavior without changing the underlying code.  

## Example in Laravel

To explore how the Open/Closed Principle is implemented, check out the following locations in the project:

- `app/Contracts/Report.php`  
- `app/Reports/..`  
- `app/Services/ReportGenerator.php`

>**Note:** The `app/BadHabit/Report.php` file demonstrates an example of poor design practices that violate the OCP.
