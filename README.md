# 📦 Laravel Product API

This backend project is part of a full‑stack assignment where you build a **Product Listing System** using:

* **Laravel** (Backend REST API)
* **React.js** (Frontend)
* **MySQL** (Database)

The Laravel API returns product data through a `/api/products` endpoint, which the React app will fetch and display.

---

# 🛠️ Requirements

Make sure you have installed:

* PHP 8+
* Composer
* MySQL / XAMPP / WAMP
* Git
* Laravel Installer (`composer global require laravel/installer`)

---

# 🚀 1. Install Project Dependencies

After cloning the project, open the folder in your terminal:

```
composer install
```

Copy the environment file:

```
cp .env.example .env
```

Generate Laravel app key:

```
php artisan key:generate
```

---

# 🗄️ 2. Configure Database

Open your `.env` file and update the database settings:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=product_db
DB_USERNAME=root
DB_PASSWORD=
```

(Create the database first in phpMyAdmin or MySQL.)

---

# 🗃️ 3. Products Migration & Seeder

This project includes a migration for creating a `products` table with:

* id
* name
* description
* price
* image_url

And a seeder with at least **5 sample products**.

Run migrations:

```
php artisan migrate
```

Run seeders:

```
php artisan db:seed
```

Or migrate + seed together:

```
php artisan migrate --seed
```

---

# 📡 4. API Endpoint

### **GET /api/products**

Returns all products in JSON format.

You can test the endpoint using **Postman** or your browser:

```
http://127.0.0.1:8000/api/products
```

---

# ▶️ 5. Start Laravel Server

```
php artisan serve
```

Your API will run on:

```
http://127.0.0.1:8000
```

---

# 📁 Important Folders

```
app/Models/Product.php
app/Http/Controllers/ProductController.php
routes/api.php
database/migrations/
database/seeders/
```
