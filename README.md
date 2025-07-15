# 🛠️ PHP SOLID Mini Project with Custom Routing

This repository features a simple routing system added to your PHP SOLID mini project — similar to micro-frameworks like Slim or Laravel, but without using any full-stack framework.

---

## ⚙️ Project Setup Highlights

- ✔️ Clean autoloading with Composer (no more `require_once`)
- ✔️ PSR-4 compliant structure (`app/services`, `app/interfaces`, etc.)
- ✔️ Dependency injection (e.g., `Order` receives `PaymentMethod`, `MailerInterface`, `LoggerInterface`)

---

## 🚀 Optional Enhancements You Can Add

- ✅ Add a `Stripe` class (similar to `PayPal`) and switch dynamically
- ✅ Write unit tests using PHPUnit
- ✅ Use `.env` for switching between test/live mailers and loggers
- ✅ Fully implement all SOLID principles (you're already halfway there!)

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

## 📦 Composer Install

If Composer is not installed or your PHP version has compatibility issues, you can install dependencies using the command below:
```bash
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

## ✅ What You Now Have

- Composer-based autoloading
- Simple MVC-style routing
- SOLID-principled services (`PayPal`, `Mailer`, `Logger`)
- A clean and extendable entry point

---

## 🙋‍♂️ Need Help?

Feel free to reach out:

**Chinmay Kumar Sahu**  
📧 chinmay235@gmail.com  
💬 GitHub: [@chinmay235](https://github.com/chinmay235)
