# PHP and Laravel Learning Project

This repository contains practice projects for both plain PHP and Laravel framework. It serves as a learning resource covering basic to intermediate concepts in PHP development.

## Project Structure

```
├── php/                      # Plain PHP practice
│   ├── feedbackProject/      # Simple feedback form project with MySQL
│   ├── arrays.php           # Array operations examples
│   ├── oop.php              # Object-Oriented Programming examples
│   ├── string_functions.php # String manipulation examples
│   └── ...                  # Other PHP concept files
│
├── laravel/                  # Laravel project
│   ├── laravel-app/         # Main Laravel application
│   │   ├── app/            
│   │   │   ├── Http/       # Controllers, Middleware, Requests
│   │   │   ├── Models/     # Eloquent models
│   │   │   └── Rules/      # Custom validation rules
│   │   ├── config/         # Configuration files
│   │   ├── database/       # Migrations, seeders, factories
│   │   ├── resources/      # Views, assets, lang files
│   │   ├── routes/         # Route definitions
│   │   └── ...
│   └── laravel-notes.md    # Laravel development notes
```

## Requirements

### PHP Project
- PHP 8.0 or higher
- MySQL
- Docker (optional, for containerized development)

### Laravel Project
- PHP 8.1 or higher
- Composer
- Node.js and npm
- MySQL/PostgreSQL/SQLite
- Docker (optional)

## Installation

1. Clone the repository:
```bash
git clone https://github.com/TuongBose/PHP-Laravel.git
cd PHP-Laravel
```

2. For plain PHP projects:
```bash
cd php/feedbackProject
# Configure your database in configurations/database.php
```

3. For Laravel project:
```bash
cd laravel/laravel-app
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
```

## Running the Projects

### PHP Projects
```bash
# Using PHP's built-in server
php -S localhost:8000

# Using Docker
docker-compose up -d
```

### Laravel Project
```bash
# Start development server
php artisan serve

# Start on custom port
php artisan serve --port=8082

# Create storage link for public files
php artisan storage:link
```

## Development Commands

### Laravel Common Commands
```bash
# Database operations
php artisan migrate               # Run migrations
php artisan migrate:refresh      # Reset and re-run migrations
php artisan migrate:fresh        # Drop all tables and re-run migrations

# Create new components
php artisan make:controller NameController
php artisan make:model ModelName -m  # Create model with migration
php artisan make:migration create_table_name

# View all routes
php artisan route:list
```

## Coding Conventions

1. **PHP Coding Standards**
   - Follow PSR-12 coding standards
   - Use meaningful variable and function names
   - Comment complex logic
   - Proper error handling with try-catch

2. **Laravel Best Practices**
   - Use Laravel naming conventions for files and classes
   - Implement form validation in Request classes
   - Use Eloquent relationships
   - Follow RESTful conventions for routes
   - Keep controllers thin, models fat

3. **Database**
   - Use migrations for database changes
   - Use seeders for test data
   - Define relationships in models
   - Use proper column types

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Follow the coding conventions
4. Test your changes thoroughly
5. Commit your changes (`git commit -m 'Add some amazing feature'`)
6. Push to the branch (`git push origin feature/amazing-feature`)
7. Create a Pull Request

## Notes

- This is a learning project, demonstrating various PHP and Laravel concepts
- Code includes comments explaining key concepts
- The project structure follows best practices for both plain PHP and Laravel development
- Refer to `laravel-notes.md` for detailed Laravel development notes

## License

This project is open-sourced and available for learning purposes.