<p align="center">
    <a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK1%20Full%20Colorlaravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a>
</p>

<p align="center">
    <a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
    <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
    <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
    <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Barangay Limpapa Information System

A comprehensive web-based information system for Barangay Limpapa management, built with Laravel framework. This system integrates all aspects of barangay administration including resident management, services, complaints, and more.

## 📋 System Overview

**Barangay Limpapa Information System** is a web-based application designed to streamline barangay operations and provide efficient management of community services. The system includes 15 comprehensive subsystems for complete barangay management.

### 🏛️ PSGC Information
- **PSGC Code**: 0907216008
- **Barangay Name**: Limpapa
- **Correspondence Code**: 097216008
- **Geographic Level**: Barangay (Bgy)
- **Urban/Rural**: Rural (based on 2020 CPH)
- **2020 Population**: 514

## 🚀 Features

### 🔐 Authentication & User Management
- **Username-based Authentication** (no email required)
- **Role-based Access Control**:
  - **Admin**: Full system access with dashboard
  - **User**: Basic access
  - **Client**: Client-specific features
  - **Foreign**: Foreign user access
- **Secure Registration and Login**

### 📊 Admin Dashboard
- **Statistics Cards**: Real-time counts of residents, services, complaints, events
- **Financial Charts**: Monthly income vs expenses (Line Chart)
- **Population Distribution**: By purok (Doughnut Chart)
- **Progress Bars**: Waste collection and complaint resolution with labels
- **Recent Activities**: Latest complaints and upcoming events

### 🏗️ 15 Complete Subsystems

1. **Resident Information Management System**
   - Resident registration and profiles
   - Family composition tracking
   - Contact information management

2. **Barangay Services Management System**
   - Service catalog and pricing
   - Service request tracking
   - Service history

3. **Certificate and Permit Issuance System**
   - Barangay clearance certificates
   - Business permits
   - Certificate tracking and status

4. **Complaint Tracking and Resolution System**
   - Complaint filing and categorization
   - Resolution tracking
   - Status updates

5. **Purok and Household Distribution System**
   - Purok management
   - Household mapping
   - Population distribution

6. **Community Health and Sanitation System**
   - Health records
   - Sanitation monitoring
   - Health program tracking

7. **Incident and Disaster Reporting System**
   - Incident logging
   - Disaster response tracking
   - Emergency management

8. **Voter Registration and Election System**
   - Voter registration
   - Election management
   - Voting records

9. **Public Financial and Budget Tracking System**
   - Income and expense tracking
   - Budget management
   - Financial reporting

10. **Barangay Event Management System**
    - Event planning and scheduling
    - Attendance tracking
    - Event documentation

11. **Public Feedback and Complaint Handling System**
    - Feedback collection
    - Public opinion tracking
    - Response management

12. **Barangay Document Archiving System**
    - Document storage and retrieval
    - Digital archiving
    - Document management

13. **Digital Communication and Notification System**
    - Notification management
    - Communication tracking
    - Alert system

14. **Barangay Security and Surveillance System**
    - Security incident logging
    - Surveillance records
    - Security monitoring

15. **Waste Management and Collection System**
    - Waste collection scheduling
    - Collection tracking
    - Waste management reports

## 🛠️ Technology Stack

- **Framework**: Laravel 9.x
- **Database**: MySQL
- **Frontend**: Blade Templates, Bootstrap/Tailwind CSS
- **Charts**: Chart.js for data visualization
- **Authentication**: Laravel Breeze
- **API**: Laravel Sanctum
- **Development Server**: XAMPP compatible

## 📋 Prerequisites

- **PHP**: ^8.0.2
- **Composer**: Latest version
- **Node.js**: Latest LTS version
- **MySQL**: 5.7 or higher
- **XAMPP**: For local development (recommended)

## 🚀 Installation & Setup

### 1. Clone the Repository
```bash
git clone <repository-url>
cd limpapa-system
```

### 2. Install PHP Dependencies
```bash
composer install
```

### 3. Install Node.js Dependencies
```bash
npm install
```

### 4. Environment Configuration
Create `.env` file from `.env.example`:
```bash
cp .env.example .env
```

Update database configuration in `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=limpapa
DB_USERNAME=root
DB_PASSWORD=821437
```

### 5. Generate Application Key
```bash
php artisan key:generate
```

### 6. Database Setup
```bash
# Run migrations and seeders
php artisan migrate:fresh --seed
```

### 7. Build Assets
```bash
npm run build
# or for development
npm run dev
```

### 8. Start Development Server
```bash
php artisan serve
```

Access the application at: `http://127.0.0.1:8000`

## 🔑 Default Login Credentials

### Admin Account
- **Username**: `admin`
- **Password**: `password`
- **Role**: Admin

## 📁 Project Structure

```
limpapa/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Admin/
│   │   │   │   └── DashboardController.php
│   │   │   └── Auth/
│   │   ├── Middleware/
│   │   │   └── RoleMiddleware.php
│   │   └── Requests/
│   │       └── Auth/
│   │           └── LoginRequest.php
│   ├── Models/
│   │   ├── User.php
│   │   ├── Resident.php
│   │   ├── Complaint.php
│   │   └── ... (other models)
│   └── Providers/
├── database/
│   ├── migrations/
│   │   ├── 2014_10_12_000000_create_users_table.php
│   │   ├── 2025_10_13_070016_add_role_to_users_table.php
│   │   └── ... (other migrations)
│   └── seeders/
│       ├── DatabaseSeeder.php
│       └── LimpapaSeeder.php
├── public/
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
│       ├── admin/
│       │   └── dashboard.blade.php
│       ├── auth/
│       │   ├── login.blade.php
│       │   └── register.blade.php
│       ├── layouts/
│       └── welcome.blade.php
├── routes/
│   └── web.php
├── storage/
├── tests/
├── artisan
├── composer.json
├── package.json
├── vite.config.js
└── README.md
```

## 🗄️ Database Schema

### Core Tables
- **users**: User authentication with roles
- **puroks**: Barangay purok information
- **residents**: Resident information
- **complaints**: Complaint tracking
- **barangay_services**: Service management
- **financial_records**: Financial tracking
- **events**: Event management
- **waste_records**: Waste management
- **And 7 more subsystem tables**

## 🎨 Frontend Features

- **Responsive Design**: Works on desktop and mobile
- **Modern UI**: Bootstrap/Tailwind CSS styling
- **Interactive Charts**: Chart.js visualizations
- **Progress Bars**: Circular progress indicators with labels
- **Role-based Navigation**: Dynamic menus based on user role

## 🔒 Security Features

- **CSRF Protection**: Laravel built-in CSRF protection
- **Input Validation**: Comprehensive form validation
- **Role-based Access**: Middleware protection
- **Secure Passwords**: Bcrypt hashing
- **SQL Injection Prevention**: Eloquent ORM protection

## 📊 Dashboard Analytics

### Charts & Visualizations
1. **Financial Overview**: Line chart showing income vs expenses
2. **Population Distribution**: Doughnut chart by purok
3. **Progress Indicators**: Circular progress bars for:
   - Waste collection completion
   - Complaint resolution rate

### Statistics Cards
- Total Residents
- Active Services
- Pending Complaints
- Upcoming Events

## 🧪 Testing

Run the test suite:
```bash
php artisan test
```

Run Pest tests:
```bash
./vendor/bin/pest
```

## 🚀 Deployment

### Production Deployment
1. Set up production server with PHP 8.0+
2. Configure web server (Apache/Nginx)
3. Set up MySQL database
4. Upload files and run migrations
5. Configure environment variables
6. Build production assets: `npm run build`

### Environment Variables
```env
APP_NAME="Barangay Limpapa IS"
APP_ENV=production
APP_KEY=base64:key
APP_DEBUG=false
APP_URL=https://your-domain.com

DB_CONNECTION=mysql
DB_HOST=your-db-host
DB_PORT=3306
DB_DATABASE=limpapa
DB_USERNAME=your-db-user
DB_PASSWORD=your-db-password
```

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Add tests if applicable
5. Submit a pull request

## 📝 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 📞 Support

For support and questions:
- Create an issue in the repository
- Contact the development team

## 🔄 Version History

### v1.0.0
- Initial release
- Complete barangay management system
- 15 subsystems implemented
- Admin dashboard with charts
- Username-based authentication
- Role-based access control

---

**Built with ❤️ for Barangay Limpapa Community**