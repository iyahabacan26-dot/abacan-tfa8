
# Laravel POS Management System — TFA8

A Laravel 12 Point-of-Sale (POS) Management System for managing customer and user accounts using resource controllers, form validation, image uploads, and Laravel Breeze authentication.

## Features

- Customer and user account management
- Laravel resource controllers and resource routes
- Customer and user creation and editing
- Form validation and error handling
- Laravel Breeze login and registration
- Authentication using Laravel's auth middleware
- Protected customer and user management pages
- Automatic redirection to login for unauthenticated users
- Secure password hashing
- User avatar uploads (JPG, PNG, WebP; maximum 2 MB)
- Avatar resizing using Intervention Image
- SQLite database integration
- Custom POS interface with sidebar navigation

## Requirements

- PHP 8.2 or later
- Composer
- Node.js and npm
- Laravel 12
- PHP GD, mbstring, PDO SQLite, and SQLite3 extensions

## Local Installation

1. Clone the repository:

   git clone https://github.com/iyahabacan26-dot/abacan-tfa8.git

2. Open the project folder:

   cd abacan-tfa8

3. Install PHP dependencies:

   composer install

4. Install frontend dependencies:

   npm install

   On Windows PowerShell, use npm.cmd install if npm is blocked.

5. Copy .env.example to .env:

   Windows:
   Copy-Item .env.example .env

   macOS/Linux:
   cp .env.example .env

6. Generate the application key:

   php artisan key:generate

7. Configure SQLite in .env:

   DB_CONNECTION=sqlite

8. Create an empty database/database.sqlite file if needed.

9. Run the migrations:

   php artisan migrate

10. Create the public storage link:

    php artisan storage:link

11. Build frontend assets:

    npm run build

    On Windows PowerShell, npm.cmd run build may be used.

12. Start the Laravel server:

    php artisan serve

13. Open http://127.0.0.1:8000 in your browser.

## Authentication

Laravel Breeze provides user registration, login, and logout.

Registration requires:
- Username
- Full Name
- Email
- Password
- Password Confirmation

Customer and user management routes are protected using Laravel's auth middleware.

Unauthenticated users attempting to access protected pages are redirected to the login page.

## Resource Controllers

CustomerController and UserController use Laravel's resource routing convention.

Implemented methods:
- index()
- create()
- store()
- edit()
- update()

The show() and destroy() methods are excluded because they are not implemented in the existing POS application.

## Application Routes

Public Routes:
- / — Home
- /about — About
- /register — Registration
- /login — Login

Protected Routes:
- /dashboard — Dashboard
- /customers — Customer listing
- /customers/create — Add customer
- /customers/{customer}/edit — Edit customer
- /users — User listing
- /users/create — Add user
- /users/{user}/edit — Edit user
- /profile — Account profile

## Security

- Laravel Breeze handles authentication.
- Auth middleware protects management routes.
- Passwords are securely hashed.
- Forms use CSRF protection.
- Input validation is applied to account records.
- Uploaded images are validated and processed.
- Environment secrets are excluded from GitHub.

## Database and Storage

SQLite is used for local development.

Migration and seeder files are included in the repository.

User avatars are stored in storage/app/public/avatars.

The .env file, SQLite database, and uploaded images are excluded from version control.

## Testing

The following features were tested locally:

- User registration and login
- Authentication-based redirects
- Customer creation and editing
- User account editing
- Avatar upload and display
- Logout and protection of customer/user routes

## GitHub Repository

https://github.com/iyahabacan26-dot/abacan-tfa8

## Hosted Application

To be added after deployment.
