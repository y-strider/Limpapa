<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## **Barangay Limpapa Information System**

## **Overview**
The **Barangay Limpapa Information System** is a **web-based application** built using the **Laravel framework** to streamline administrative and operational functions for **Barangay Limpapa**, Zamboanga City (**PSGC: 0907216008**). This system integrates multiple modules to manage **barangay services**, track **resident data**, and provide real-time analytics through an **admin dashboard** featuring **interactive graphs** and **labeled circular progress bars**. Designed for simplicity and ease of use, it supports distinct **user roles** (**Admin**, **Client**, **Foreign**) with secure **registration**, **login**, and tailored **dashboards**.

## **Features**
- **Admin Dashboard**: Centralized interface with **charts**, **statistics**, and **tracking features**, including **graphs** and **labeled circular progress bars** (powered by **Chart.js**).
- **User Management**: Separate **registration**, **login**, and **dashboards** for **Admin**, **Client**, and **Foreign** users.
- **Core Modules**:
  - **Resident Information Management**
  - **Barangay Services Management**
  - **Certificate and Permit Issuance**
  - **Complaint Tracking and Resolution**
  - **Purok and Household Distribution**
  - **Community Health and Sanitation**
  - **Incident and Disaster Reporting**
  - **Voter Registration and Election**
  - **Public Financial and Budget Tracking**
  - **Barangay Event Management**
  - **Public Feedback and Complaint Handling**
  - **Document Archiving**
  - **Digital Communication and Notifications**
  - **Barangay Security and Surveillance**
  - **Waste Management and Collection**
- **Database**: **MySQL** database (**limpapa**) with real and sample data for development and testing.
- **Technology Stack**:
  - **Backend**: **Laravel** (PHP framework)
  - **Frontend**: **Blade templates** with **Chart.js** for visualizations
  - **Database**: **MySQL** (via **XAMPP**)
  - **Environment**: Local development with **XAMPP** (**localhost**, **root** user, custom password)

## **About Barangay Limpapa**
- **Location**: **Barangay Limpapa**, Zamboanga City
- **PSGC Code**: **0907216008**
- **Population (2020 Census)**: **514**
- **Geographic Level**: **Barangay** (**Rural**)
- **Project Goal**: To provide an efficient, **user-friendly platform** for **barangay administration**, **data management**, and **community engagement**, leveraging **software engineering** and **research principles**.

## **About Laravel**
**Laravel** is a **web application framework** with expressive, elegant syntax, designed to make development an enjoyable and creative experience. It eases common **web project tasks**, such as:
- [**Simple, fast routing engine**](https://laravel.com/docs/routing)
- [**Powerful dependency injection container**](https://laravel.com/docs/container)
- Multiple back-ends for [**session**](https://laravel.com/docs/session) and [**cache**](https://laravel.com/docs/cache) storage
- Expressive, intuitive [**database ORM**](https://laravel.com/docs/eloquent)
- Database agnostic [**schema migrations**](https://laravel.com/docs/migrations)
- [**Robust background job processing**](https://laravel.com/docs/queues)
- [**Real-time event broadcasting**](https://laravel.com/docs/broadcasting)

**Laravel** is accessible, powerful, and provides tools required for large, robust applications. For more details, explore the [**Laravel documentation**](https://laravel.com/docs) or try the [**Laravel Bootcamp**](https://bootcamp.laravel.com). For video tutorials, visit [**Laracasts**](https://laracasts.com).

## **Setup Instructions**
1. **Prerequisites**:
   - **XAMPP** (**Apache** and **MySQL**)
   - **Composer**
   - **Node.js** (for frontend assets)
   - **Git** and **VSCode**
2. **Installation**:
   ```bash
   # Clone the repository
   git clone https://github.com/y-strider/Limpapa.git

   # Navigate to the project folder
   cd Limpapa

   # Install PHP dependencies
   composer install

   # Install frontend dependencies
   npm install && npm run dev

   # Copy .env.example to .env and configure
   cp .env.example .env

  # Edit .env
  DB_CONNECTION=mysql
  DB_HOST=localhost
  DB_PORT=3306
  DB_DATABASE=limpapa
  DB_USERNAME=root
  DB_PASSWORD=821437

  # Generate application key
  php artisan key:generate

  # Run migrations
  php artisan migrate

  # Start the server
  php artisan serve

  # Access the application at http://localhost:8000

  ## **Database Setup**
  # Create a MySQL database named limpapa in phpMyAdmin
  # Access phpMyAdmin at http://localhost/phpmyadmin
  # Click "New", enter "limpapa" as database name, click "Create"
  php artisan migrate

  ## **Usage**
  # Admin: Log in to access the main dashboard with charts, statistics, and tracking features
  # Client/Foreign Users: Register and log in to access tailored dashboards for barangay services
  # Analytics: View resident data, service metrics, and complaint statuses via graphs and labeled circular progress bars

  ## **Contributing**
  # Contributions are welcome! Fork the repository, create a feature branch, submit a pull request
  # For Laravel-specific contributions, refer to: https://laravel.com/docs/contributions

  ## **Code of Conduct**
  # Review and abide by the Laravel Code of Conduct: https://laravel.com/docs/contributions#code-of-conduct

  ## **Security Vulnerabilities**
  # Email taylor@laravel.com for security vulnerabilities

  ## **License**
  # Barangay Limpapa Information System, built on Laravel, licensed under MIT License: https://opensource.org/licenses/MIT
