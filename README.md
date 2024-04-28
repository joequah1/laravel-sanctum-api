# Laravel Sanctum Authentication API Guide

This repository contains a tutorial on building a secure API with Laravel and Sanctum. Whether you're new to Laravel or looking to enhance your skills, this guide is here to help you create a robust API using these powerful tools. Let's dive in and learn how to build an API that's both secure and efficient!

For detailed instructions and explanations, please refer to the following guides:

- [Unlock the Power of Laravel: Build a Secure API in Minutes with These Simple Steps!](https://www.fastdt.app/2024/04/28/unlock-the-power-of-laravel-build-a-secure-api-in-minutes-with-these-simple-steps/)

## Installation and Setup

### Prerequisites

- Basic understanding of the Laravel framework
- Composer installed on your system
- Set up Laravel project and integrate Sanctum

### Quick Start

1. **Clone the Repository:**
    
    ```bash
    git clone <https://github.com/joequah1/laravel-sanctum-api.git>
    cd laravel-sanctum-api
    
    ```
    
2. **Set Up Environment Variables:**
    
    Create a **`.env`** file in the project root with your database configurations and secret key:
    
    ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password
    ```
    
3. **Install Dependencies:**
    
    ```bash
    composer install
    ```
    
4. **Run Migrations:**
    
    ```bash
    php artisan migrate
    ```
    
5. **Start the Development Server:**
    
    ```bash
    php artisan serve
    ```
    

Your Laravel Sanctum API is now up and running!

### 

With this guide, you'll be equipped to implement secure authentication in your Laravel API using Sanctum. Start building your secure and efficient API today!