# Laravel CRUD Restaurant

![Project-main-slide](public/images/screenshots/Project%20main%20slide.png)

## Project Overview

This project, **Restaurant**, is a restaurant management CRUD application built with Laravel and MySQL. It features modules for managing menus, sales, categories, and reservations using Laravel’s MVC architecture and Eloquent ORM.

### Key Features

- **User Authentication:** Secure login functionality.
- **Management Panel:** CRUD operations for categories, menu items, and tables.
- **Cashier Panel:** Order processing and receipt generation.
- **Reports:** Exportable sales data for analysis.
- **Responsive UI:** Interactive interface built with Laravel Blade.

## Installation Guide

### Prerequisites

1. **Download and Install XAMPP:**

    - Download XAMPP version 7.4.1 for Windows from [SourceForge](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/7.4.1/).
    - Install XAMPP and start the Apache and MySQL modules from the XAMPP Control Panel.

2. **Composer:**
   Ensure you have Composer installed on your system. Download it from [Composer's official site](https://getcomposer.org/).

3. **Git:**
   Clone the project repository using Git. Install it from [Git's official site](https://git-scm.com/).

4. **Node.js:**
   Install Node.js to manage frontend dependencies. Download it from [Node.js official site](https://nodejs.org/).

### Steps to Set Up

1. **Clone Repository:**

   ```bash
   git clone https://github.com/cerobreath/laravel-crud-restaurant.git
   cd laravel-crud-restaurant
   ```

2. **Install Dependencies:**
   Run the following command to install Laravel dependencies:

   ```bash
   composer install
   ```

   Install Node.js dependencies:

   ```bash
   npm install
   ```

3. **Configure Environment:**
   Update `.env` with your database credentials:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=restaurantApplication
   DB_USERNAME=root
   DB_PASSWORD= # Leave blank if no password is set
   ```

4. **Create Database:**

    - Ensure the Apache and MySQL modules are running in XAMPP.
    - Open phpMyAdmin ([http://localhost/phpmyadmin](http://localhost/phpmyadmin)).
    - Create a new database named `restaurantApplication` and ensure the collation is set to `utf8_general_ci`.

5. **Run Migrations:**
   Migrate the database to set up tables and relationships:

   ```bash
   php artisan migrate
   ```

6. **Seed Database (Optional):**
   Populate the database with sample data for testing:

   ```bash
   php artisan db:seed
   ```

7. **Generate Application Key:**

   ```bash
   php artisan key:generate
   ```

### Run the Application

1. Start the Laravel development server:
   ```bash
   php artisan serve
   ```
2. Open your browser and navigate to `http://127.0.0.1:8000`.

## Project Structure

The project follows Laravel’s MVC architecture:

- **Models:** Define database interactions (e.g., `Category`, `MenuItem`).
- **Controllers:** Handle requests and logic (e.g., `CategoryController`, `MenuController`).
- **Views:** Blade templates for UI rendering.
- **Routes:** Defined in `web.php` for user interactions.

## Screenshots

### Login
![Login](public/images/screenshots/Login%20Page.png)

### Dashboard
![Dashboard](public/images/screenshots/Dashboard.png)

### Management
![Management+Menu](public/images/screenshots/Management+Menu.png)

### Cashier
![Cashier](public/images/screenshots/Cashier.png)

#### Cheque
![Cheque](public/images/screenshots/Cheque.png)

### Report
![Report](public/images/screenshots/Report.png)

## Additional Notes

### Contribution

Feel free to contribute by creating issues or submitting pull requests.

## References

1. [Laravel - The PHP Framework For Web Artisans](https://laravel.com/) (Accessed: 23.12.2024).
2. [MySQL](https://www.mysql.com/) (Accessed: 23.12.2024).
3. [Introduction to Laravel and MVC Framework](https://www.geeksforgeeks.org/introduction-to-laravel-and-mvc-framework/) (Accessed: 23.12.2024).
4. [Laravel vs Spring Boot – Which framework should be chosen to build a web application?](https://www.mageplaza.com/insights/laravel-vs-spring.html) (Accessed: 23.12.2024).
5. [Spring vs Laravel](https://medium.com/@audruis/spring-vs-laravel-1af76c35d855) (Accessed: 23.12.2024).
6. [Laravel vs Spring Boot: Top Differences](https://www.geeksforgeeks.org/laravel-vs-spring-boot/) (Accessed: 23.12.2024).
7. [Is Java Spring Boot or PHP Laravel better for a web project with ambition to make it larger and larger in the future?](https://www.quora.com/Is-Java-Spring-Boot-or-PHP-Laravel-better-for-a-web-project-with-ambition-to-make-it-larger-and-larger-in-the-future) (Accessed: 23.12.2024).
8. [Font Awesome Docs](https://docs.fontawesome.com/) (Accessed: 24.12.2024).
9. [Vector Icons and Stickers - PNG, SVG, EPS, PSD](https://www.flaticon.com/) (Accessed: 24.12.2024).
10. [Bootstrap File upload / file input - free examples & tutorial](https://mdbootstrap.com/docs/standard/forms/file/) (Accessed: 24.12.2024).
11. [The most popular HTML, CSS, and JS library in the world](https://getbootstrap.com/) (Accessed: 24.12.2024).

## Contacts Slide
![Contacts Slide](public/images/screenshots/contacts-slide.png)
