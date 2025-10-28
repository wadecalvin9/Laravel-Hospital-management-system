# 🏥 Laravel Hospital Management System

A modern, user-friendly Hospital Management System built with **Laravel**.  
It helps hospitals manage patients, doctors, appointments, billing, and analytics in a seamless and efficient way.

---

## 🚀 Features

### 🧑‍⚕️ Core Modules
- **Patient Management** – Add, edit, and view patient information  
- **Doctor Management** – Manage doctor profiles and specialties  
- **Appointment Scheduling** – Book, update, and track patient appointments  
- **Analytics Dashboard** – Visual charts and data insights for admins  
- **Authentication System** – Secure login and user roles  
- **Responsive Design** – Works perfectly on desktop and mobile  

---

## 🖥️ Screenshots

| Dashboard | Appointments | Patients |
|------------|---------------|-----------|
| ![Dashboard Screenshot](public/screenshots/dashboard.png) | ![Appointments Screenshot](public/screenshots/appointments.png) | ![Patients Screenshot](public/screenshots/patients.png) |

*(You can replace the image paths above with your actual screenshots.)*

---

## ⚙️ Installation

Clone the Repository
```bash
git clone https://github.com/yourusername/laravel-hospital-management-system.git
cd laravel-hospital-management-system
```
Install Dependencies
```bash
composer install
npm install
```
Configure Environment

Copy the example .env file and update database credentials:
```bash
cp .env.example .env
```
Then set up your database in .env:
```bash
DB_DATABASE=hospital_db
DB_USERNAME=root
DB_PASSWORD=
```
Generate App Key
```bash
php artisan key:generate
```
Run Migrations and Seed Data
```bash
php artisan db:seed
```
Start Dev server
```bash 
php artisan serve
```
Now open http://127.0.0.1:8000


### Admin Dashboard Overview

View total patients, doctors, and appointments

Visualize appointment status with charts (powered by Chart.js)

Recent activity and appointment tracking

### Tech Stack
Component	Technology
Framework	Laravel 11
Frontend	Blade Templates, CSS, Font Awesome
Charts	Chart.js
Database	MySQL / MariaDB
Authentication	Laravel Breeze / Fortify
Server	PHP 8.3+

🤝 Contributing

Contributions are welcome!
To contribute:

Fork the repository

Create a new branch (feature/your-feature)

Commit and push your changes

Open a Pull Request


🛡️ License

This project is licensed under the MIT License.
Feel free to use, modify, and distribute it.

💬 Author
Wade Calvin
📧 Contact: [wadecalvin9@gmail.com]
🌐 GitHub: @wadecalvin9
