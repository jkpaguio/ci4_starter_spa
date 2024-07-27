# CodeIgniter 4 SPA with Alpine.js and AdminLTE

This project is a Single Page Application (SPA) built with CodeIgniter 4, Alpine.js, and AdminLTE. It provides a seamless user experience with dynamic content loading and a responsive admin interface.

## Features

- Single Page Application (SPA) architecture
- CodeIgniter 4 backend
- Alpine.js for reactive UI components
- AdminLTE for admin dashboard layout and components
- Dynamic content loading without full page reloads
- Responsive design

## Prerequisites

- PHP 7.4 or higher
- Composer
- Node.js and npm

## Installation

1. Clone the repository:
   git clone https://github.com/jkpaguio/ci4_starter_spa.git
   cd ci4_starter_spa

2. Install PHP dependencies:
   composer install

3. Install JavaScript dependencies:
   npm install

4. Copy `env` to `.env` and tailor for your app, specifically the baseURL and any database settings:
   cp env .env

5. Set up your database and update the `.env` file with your database credentials.

6. Run database migrations:
   php spark migrate
   Copy

7. Start the development server:
   php spark serve

Alternatively, if you're using a different web server (like Apache or Nginx), ensure your server is configured to point to the `public` directory of your project.

## Server Configuration

### Apache

If you're using Apache, ensure you have mod_rewrite enabled and use the following `.htaccess` file in your `public` directory:

```apache
<IfModule mod_rewrite.c>
 Options +FollowSymlinks
 RewriteEngine On

 RewriteCond %{REQUEST_FILENAME} !-d
 RewriteCond %{REQUEST_FILENAME} !-f
 RewriteRule ^(.*)$ index.php/$1 [L]
</IfModule>
```

## Project Structure

- `app/Controllers/`: Contains all the controllers
- `app/Views/`: Contains view files
- `public/`: Publicly accessible files
- `js/`: JavaScript files including Alpine.js and custom scripts
- `css/`: CSS files
- `assets/`: AdminLTE assets

## Key Files


- `app/Views/layout/main.php`: Main layout file
- `public/js/router.js`: Handles SPA routing
- `app/Controllers/BaseController.php`: Base controller with common functionality
- `app/Controllers/Home.php`: Main controller for handling routes

## Customization

### Adding New Pages

1. Create a new view file in `app/Views/`
2. Add a new method in `app/Controllers/Home.php`
3. Update `public/js/router.js` to handle the new route
4. Add a new menu item in `app/Views/layout/navigation.php`

### Modifying Styles

- Custom CSS can be added to `public/css/custom.css`
- AdminLTE styles can be overridden in the same file

### JavaScript Customization

- Add custom JavaScript to `public/js/custom.js`
- For page-specific scripts, create new JS files and load them conditionally

## Troubleshooting

- If you encounter 404 errors, ensure your `.htaccess` file is correctly set up and AllowOverride is set to All in your Apache configuration.
- For database connection issues, double-check your `.env` file settings.
- If AdminLTE components are not working, make sure all required CSS and JS files are properly included.


## Acknowledgments

- CodeIgniter Team
- Alpine.js
- AdminLTE
- All other open-source libraries used in this project
```
