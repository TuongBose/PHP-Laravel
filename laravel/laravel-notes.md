# Laravel Development Notes

## Server Management

### Starting the Server
```bash
# Start server with default port
php artisan serve

# Start server with custom port
php artisan serve --port=8082
```

### Maintenance Mode
```bash
# Enable maintenance mode
php artisan down

# Disable maintenance mode
php artisan up
```

## Dependency Management

### Composer Commands
```bash
# Update dependencies
composer update

# Install dependencies
composer install
```

Find packages at: [Packagist](https://packagist.org/)

Example package installation:
```bash
# Install Mollie API package
composer require mollie/mollie-api-php
```

## Artisan Commands Reference

### Basic Commands
```bash
# List all available commands
php artisan list

# Check environment
php artisan env

# Get help
php artisan help

# Check version
php artisan --version
```

### Controller Management
```bash
# Create a basic controller
php artisan make:controller ProductController

# Force create/overwrite controller
php artisan make:controller ProductController --force

# Create controller with CRUD methods
php artisan make:controller CategoryController --resource
```

### Model and Migration Management
```bash
# Create model
php artisan make:model Post

# Create migration
php artisan make:migration create_table_posts

# Create model with migration
php artisan make:model Post -m

# Add column to existing table
php artisan make:migration add_image_to_foods
```

### Database Operations
```bash
# Run migrations
php artisan migrate

# Reset migrations
php artisan migrate:reset

# Refresh migrations (rollback + migrate)
php artisan migrate:refresh

# Fresh migrations (delete all tables + migrate)
php artisan migrate:fresh

# Check migration status
php artisan migrate:status
```

### Factory and Seeding
```bash
# Create factory
php artisan make:factory PostFactory

# Use Tinker for database operations
php artisan tinker
> \App\Models\Post::factory()->create();
> \App\Models\Post::factory()->count(2)->create();
```

### Storage Management
```bash
# Create storage symbolic link
php artisan storage:link
```

Note: The `storage:link` command creates a symbolic link from `public/storage` to `storage/app/public`, allowing web access to uploaded files through URLs like `http://localhost/storage/filename.jpg`

### Cache and Configuration
```bash
# Clear compiled services and packages
php artisan clear-compiled

# Generate application key
php artisan key:generate

# Create session table
php artisan session:table

# Clear various caches
php artisan optimize
php artisan cache:clear
php artisan view:clear
php artisan route:clear

# Clear authentication tokens
php artisan auth:clear-resets
```

### Route Management
```bash
# List all routes (very useful!)
php artisan route:list

# Clear route cache
php artisan route:clear
```

### Custom Rules
```bash
# Create custom validation rule
php artisan make:rule Uppercase
```

## Best Practices

1. Always check route list with `php artisan route:list` for debugging
2. Use `--resource` flag when creating controllers that need CRUD operations
3. Regularly clear caches during development
4. Use migrations for all database changes
5. Create symbolic links for public storage when dealing with file uploads
