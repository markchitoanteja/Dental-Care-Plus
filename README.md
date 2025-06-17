
# Dental Care Plus – Capstone Project

**Dental Care Plus** is a web-based **Dental Clinic Management System** developed using the [CodeIgniter 4](https://codeigniter.com/) PHP framework. This system was created as a capstone project for **Eastern Samar State University - Can-Avid Campus** in partnership with our client, **Dental Care Plus Clinic**. It is based on a pre-configured CodeIgniter 4 template that includes built-in features such as authentication, a clean folder structure, and database integration — providing a strong foundation for modern web application development.

## Project Features

- Secure user authentication (using bcrypt hashing)
- Admin panel for managing patients, appointments, and dental services
- Dentist and patient account types with role-based access
- Appointment booking with calendar view
- Dental record and treatment history tracking
- Real-time notification for upcoming appointments
- UUID-based primary keys for better scalability and security
- Responsive design with mobile-first UI components

## Requirements

- PHP >= 7.4  
- Composer  
- MySQL or MariaDB  
- CodeIgniter 4.x  

## Installation Instructions

Follow the steps below to install and run the project locally:

### Step 1: Clone the Repository

```bash
git clone https://github.com/markchitoanteja/Dental-Care-Plus
cd Dental-Care-Plus
```

> *(Optional: Rename the folder if needed)*

### Step 2: Install Dependencies

```bash
composer install
```

### Step 3: Set Up the Database

1. Create a new database in MySQL/MariaDB (e.g., `dental_care_plus`).
2. Open `app/Config/Database.php` and configure your connection:

```php
public $default = [
    'DSN'      => '',
    'hostname' => 'localhost',
    'username' => 'your-db-username',
    'password' => 'your-db-password',
    'database' => 'dental_care_plus',
    'DBDriver' => 'MySQLi',
    ...
];
```

### Step 4: Configure Timezone (Optional)

Set your local timezone in `app/Config/App.php`:

```php
public $appTimezone = 'Asia/Manila';
```

### Step 5: Run the Application

Start your local server (e.g., Apache/Nginx) and go to:

```
http://localhost/Dental-Care-Plus
```

If the setup is successful, the system will auto-generate the required tables and an initial admin account.

### Step 6: Default Admin Account

Use the default credentials to log in:

- **Username**: `admin`  
- **Password**: `admin123`  

> ⚠️ **Note**: Please update the password after your first login for security purposes.

---

## Project Structure Highlights

- `app/Models` – Handles data logic and database operations  
- `app/Controllers` – Directs the flow between views and models  
- `app/Views` – Contains the UI templates using CodeIgniter 4’s view system  
- `app/Filters/Auth.php` – Manages route protection using middleware  

---

## License

This project is open-sourced under the **MIT License** – see the [LICENSE](LICENSE) file for full details.

## Contributions

We welcome contributions from the community! Whether it's feature improvements, bug reports, or pull requests, feel free to fork the project and collaborate.

## Acknowledgements

- **Eastern Samar State University – Can-Avid** for academic support  
- **Dental Care Plus Clinic** as our partner client  
- [CodeIgniter 4](https://codeigniter.com/) for the development framework  
- [Ramsey UUID](https://ramsey.github.io/uuid/) for universally unique ID generation  