# Breeze Auth App

A **lightweight authentication starter** built with **Laravel 12**, **Laravel Breeze**, and **TailwindCSS**. This project provides a clean and modern authentication flow with **login, registration, and dashboard pages**

## Screenshots

**Index Page**  

<img width="1280" height="712" alt="image" src="https://github.com/user-attachments/assets/e13a14bc-b955-42cc-ac34-5749a7190d85" /><br>

**Login Page**

<img width="1280" height="712" alt="image" src="https://github.com/user-attachments/assets/2aab39dd-ab37-4e82-8955-0dcbd4b04b5b" /><br>

**Register Page**  

<img width="1280" height="712" alt="image" src="https://github.com/user-attachments/assets/5942c0ce-5be7-4a9d-addd-4ecd6dfaf39d" /><br>

**Dashboard Page**  

<img width="1280" height="712" alt="image" src="https://github.com/user-attachments/assets/dfa1cece-530f-40c7-955b-043f99de1f44" /><br> 

## Tech Stack

- **Backend:** Laravel 12  
- **Frontend:** Blade Templates + TailwindCSS  
- **Database:** MySQL 
- **Version Control:** GitHub  

## Quick Start

```bash
# Clone repository
git clone https://github.com/fahrilhadi/breeze-auth-app.git
cd breeze-auth-app

# Install dependencies
composer install
npm install
npm run dev

# Setup environment
cp .env.example .env
php artisan key:generate

# Run migrations
php artisan migrate

# Serve application
php artisan serve
