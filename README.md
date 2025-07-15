# 🛠️ PHP SOLID Mini Project with Custom Routing

A lightweight PHP project following the **[SOLID](https://en.wikipedia.org/wiki/SOLID) principles** with PSR-4 autoloading and a basic routing system - similar to micro-frameworks like Slim or Laravel, but without using any full-stack framework.

---
## 🚀 Features

- Clean architecture using SOLID principles
- PSR-4 autoloading via Composer
- Dependency Injection
- Simple Router (MVC-style)
- Organized folder structure
- Easily extendable (add Stripe, database, etc.)
  
## ⚙️ Project Setup Highlights

- ✔️ Clean autoloading with Composer (no more `require_once`)
- ✔️ PSR-4 compliant structure (`app/services`, `app/interfaces`, etc.)
- ✔️ Dependency injection (e.g., `Order` receives `PaymentMethod`, `MailerInterface`, `LoggerInterface`)

---

## 📁 Project Directory Structure
<pre lang="markdown"> <code>
project-root/
├── app/
│   ├── controllers/
│   │   └── OrderController.php
│   ├── interfaces/
│   ├── services/
│   └── Order.php
├── public/
│   └── index.php
├── routes/
│   └── web.php
├── vendor/
├── composer.json
├── .htaccess
└── README.md
</code> </pre>


---

## ⚙️ Installation

```bash
git clone https://github.com/learnphp/SOLID-Principles-PHP.git
cd SOLID-Principles-PHP
composer install
composer dump-autoload -o
```

_If Composer is not installed or your PHP version has compatibility issues, you can install dependencies using the command below:_
```bash
cd SOLID-Principles-PHP
php composer.phar install # or update
```

> 💡 Make sure you have `composer.phar` in your project root if Composer is not globally installed. Attached composer compatibility for PHP 7.2+ users
---

## 🌐 Access in Browser

Start PHP's built-in server:
<pre lang="markdown"> <code>
php -S localhost:8000 -t public
</code> </pre>

Then open in browser:

- [`http://localhost:8000/`](http://localhost:8000/) → Shows welcome message  
- [`http://localhost:8000/order`](http://localhost:8000/order) → Executes the `checkout()` logic

---

## 🔁 Routing (routes/web.php)

```php
$routes = [
    '/' => fn() => echo "Welcome!",
    '/order' => fn() => (new OrderController())->checkout(),
];
```
---
## 🚀 Optional Enhancements You Can Add

- ✅ Add a `Stripe` class (similar to `PayPal`) and switch dynamically
- ✅ Write unit tests using PHPUnit
- ✅ Use `.env` for switching between test/live mailers and loggers
- ✅ Fully implement all SOLID principles (you're already halfway there!)

---

## 🙋‍♂️ Need Help?

Feel free to reach out:

**Chinmay Kumar Sahu**  
📧 chinmay235@gmail.com  
💬 GitHub: [@chinmay235](https://github.com/chinmay235)

## License

This project is licensed under the [MIT License](LICENSE).

