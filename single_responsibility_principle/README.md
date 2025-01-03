## Single Responsibility Principle (SRP)

<code>"A class should have one, and only one reason to change."</code>

<h2>What does it mean?</h2>
<ul>
    <li>Each class or module in code should have a single purpose or responsibility.</li>
    <li>If a class have multiple responsibilities, it becomes harder to understand, maintain, and modify.</li>
</ul>

<h2>Using SRP in Laravel</h2>
<ul>
    <li><code>Controllers:</code> Should only handle HTTP requests and responses. Avoid putting business logic in controllers.</li>
    <li><code>Models:</code> Should only interact with the database.</li>
    <li><code>Services:</code> Create service classes for business logic.</li>
    <li><code>Repositories:</code> Use repositories for database quries to keep the models clean.</li>
</ul>

<details>Checkout `Services` and `UserController`</details>