# HRMS (Laravel)

The start of a human resources management system built with Laravel, with an Arabic admin panel. It sets up admin accounts and the company-wide HR rules that attendance, leave and penalties are calculated from.

## Features

- **Admin accounts** with their own authentication guard, login and logout
- **Admin dashboard** built on AdminLTE
- **General settings** for the company: name, logo, phones, address, email and whether the system is active
- **Attendance rules:**
  - after how many minutes a late arrival or early departure counts
  - when late arrivals and early departures add up to a quarter day, half a day or a full day deducted
- **Leave rules:** monthly leave balance, after how many days a new employee starts getting leave, and the opening balance
- **Absence penalties:** how many days are deducted for the first, second, third and fourth unexcused absence
- Each record keeps who added and last updated it, and a company code (`com_code`) to separate companies

## Routes

| Path | What it does |
| --- | --- |
| `/admin/login` | Admin login |
| `/admin` | Dashboard |
| `/admin/generalsettings` | View the general settings |
| `/admin/generalsettingsEdit` | Edit the general settings |
| `/admin/logout` | Log out |

## Built with

- PHP 7.3+/8, Laravel 8
- AdminLTE
- Laravel Mix
- MySQL

## Run it locally

You need PHP 7.3 or 8.x, Composer, Node.js and MySQL.

```bash
git clone https://github.com/hamzakhalem/hrms_laravel_php.git
cd hrms_laravel_php
composer install
npm install
npm run dev
cp .env.example .env
php artisan key:generate
```

Set `DB_DATABASE`, `DB_USERNAME` and `DB_PASSWORD` in `.env`, then:

```bash
php artisan migrate
php artisan serve
```

Add an admin row to the `admins` table (with a password hashed by `bcrypt`), then log in at http://127.0.0.1:8000/admin/login.

## Project structure

```
app/Http/Controllers/Admin/   Login, dashboard and general settings controllers
app/Models/                   Admin and Admin_panel_setting models
routes/admin.php              Admin routes
resources/views/admin/        AdminLTE layout and pages
```
