# 📌 Laravel Task Management API – README

## 🛠️ Requirements

Make sure you have installed:

* PHP 8+
* Composer
* MySQL / XAMPP / WAMP
* Git
* Laravel CLI (`composer global require laravel/installer`)

---

# 🚀 1. Install Project Dependencies

Open your project folder in terminal and run:

```
composer install
```

Copy `.env.example` to `.env`:

```
cp .env.example .env
```

Generate Laravel APP_KEY:

```
php artisan key:generate
```

---

# 🗄️ 2. Configure Database

Open your `.env` file and update:

```
DB_DATABASE=your_db_name
DB_USERNAME=root
DB_PASSWORD=
```

Create the database in phpMyAdmin or MySQL before running migrations.

---

# 📌 3. Run Migrations & Seeders

Run migrations:

```
php artisan migrate
```

Run seeders:

```
php artisan db:seed
```

Or both:

```
php artisan migrate --seed
```

---

# ▶️ 4. Start Laravel Server

Start development server:

```
php artisan serve
```

URL:

```
http://127.0.0.1:8000
```

---

# 📦 5. API Endpoints (Example)

| Method | Endpoint    | Description   |
| ------ | ----------- | ------------- |
| POST   | /login      | User login    |
| GET    | /tasks      | Get all tasks |
| POST   | /tasks      | Create task   |
| PUT    | /tasks/{id} | Update task   |
| DELETE | /tasks/{id} | Delete task   |

---

# 🌿 6. Important Folder Structure

```
app/
 └── Http/
      └── Controllers/
           └── TaskController.php
database/
 └── migrations/
 └── seeders/
routes/
 └── api.php
```

---

# 🧪 7. Testing

Use Postman or Thunder Client.
If authentication is required, use **Bearer Token**.

---

# 💻 8. Push Project to GitHub

### First time:

```
git init
git add .
git commit -m "Initial Laravel project"
git branch -M main
git remote add origin https://github.com/yourusername/your-repo-name.git
git push -u origin main
```

### Next updates:

```
git add .
git commit -m "Update project"
git push
```
