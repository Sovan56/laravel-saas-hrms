Perfect 👍
Here is a **CLEAN, COPY-PASTE-READY `README.md`** exactly in the format you want:

* ✅ **Only commands & URLs inside bash blocks**
* ✅ Proper Markdown (no broken code blocks)
* ✅ Professional & evaluator-friendly
* ✅ You can paste this **directly** into GitHub README

---

````md
# SaaS HRMS – Laravel Assignment

This project is a mini **SaaS-based HRMS** built using **Laravel 10** as part of a technical evaluation.  
The system focuses on **multi-tenant (company-based) data isolation** and **real-world HRMS business logic**.

---

## 🚀 Features

### 🔐 SaaS Architecture
- Company-based data isolation using `company_id`
- Each registration creates a new company (Admin user)

### 👥 Employee Management
- Add, edit, delete employees
- Employee image upload with fallback avatar
- Company-scoped unique email validation

### ⏱ Attendance Management
- One clock-in per day
- Clock-out only after clock-in
- Accurate working hour calculation (HH:MM)
- Asia/Kolkata timezone

### 🌴 Leave Management
- Apply leave with date range
- Prevent overlapping leave dates
- Only one pending leave allowed at a time
- Leave status workflow (Pending)

### 📧 Email Notification
- Email sent when leave request is submitted (SMTP)

### 🎨 UI / UX
- Blade + Tailwind CSS
- Sidebar-based SaaS dashboard layout
- Clean validation & success messages
- Modal-based delete confirmation

---

## 🛠 Tech Stack

- Laravel 10
- MySQL
- Blade + Tailwind CSS
- Laravel Breeze (Authentication)
- Gmail SMTP (App Password)
- Alpine.js

---

## ⚙️ Setup Instructions

### 1️⃣ Clone Repository
```bash
git clone <your-github-repo-url>
cd hrms-saas
````

### 2️⃣ Install Dependencies

```bash
composer install
npm install
npm run dev
```

### 3️⃣ Environment Setup

```bash
cp .env.example .env
php artisan key:generate
```

Update `.env` with your database and mail credentials.

### 4️⃣ Database Setup

```bash
php artisan migrate
php artisan storage:link
```

### 5️⃣ Run Application

```bash
php artisan serve
```

Open in browser:

```bash
http://127.0.0.1:8000
```

---

## 📝 Notes

* Registration represents **company onboarding**
* Logged-in user acts as **Company Admin**
* Employees are managed internally
* Email configuration uses **SMTP with App Password**

---
