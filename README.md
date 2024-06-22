# Job Posting Project

This project is part of the [Beginner Level Challenge on the Laravel Roadmap](https://github.com/LaravelDaily/Laravel-Roadmap-Learning-Path#beginner-level). The goal is to implement various Laravel features and functionalities to build a comprehensive job posting application.


Additionally, the ideas and concepts applied in this project were inspired by [30 Days to Learn Laravel](https://laracasts.com/series/30-days-to-learn-laravel-11).

## Features

This application includes the following features:

- **CRUD Operations**: Create, Read, Update, and Delete jobs.
- **Dark Mode**: Toggle between light and dark themes.
- **Password Confirmation**: Required when editing the user profile.
- **Policies**: Implemented for authorization.
- **Authentication**: Login functionality for users.

## Installation

Follow these steps to set up the project locally:

1. **Clone the repository**:
   ```sh
   git clone https://github.com/KaramNassar/job-posting.git
   cd job-posting
   ```

2. **Install dependencies**:
   ```sh
   composer install
   npm install
   npm run dev
   ```

3. **Set up environment variables**:
   Copy `.env.example` to `.env` and adjust the settings as needed.
   ```sh
   cp .env.example .env
   php artisan key:generate
   ```

4. **Run migrations**:
   ```sh
   php artisan migrate
   ```

5. **Seed the database** (optional):
   ```sh
   php artisan db:seed
   ```

## Usage

To run the application locally:
```sh
php artisan serve
```
Access the application at `http://localhost:8000`.

## Routes and Controllers

### Routing and Controllers: Basics
- **Callback Functions and Route::view()**: Used for simple route handling.
- **Routing to a Single Controller Method**: Implemented for various functionalities.
- **Route Parameters**: Utilized for dynamic URL segments.
- **Route Naming**: Applied for easier route management.
- **Route Groups**: Used to group related routes together.

## Blade Basics

### Blade Templating
- **Displaying Variables in Blade**: Variables passed from the controller are displayed in the views.
- **Blade If-Else and Loop Structures**: Used for conditional rendering and iteration over data.
- **Blade Loops**: Implemented for rendering lists of items.
- **Layout**: Using `@include`, `@extends`, `@section`, and `@yield` for layout management.
- **Blade Components**: Created reusable components for consistent UI.

## Authentication

### Auth Basics
- **Default Auth Model**: Accessed user fields from controllers and views.
- **Check Auth in Controller/Blade**: Applied authentication checks.
- **Auth Middleware**: Ensured routes are accessible only to authenticated users.

## Database Basics

### Database Management
- **Database Migrations**: Managed database schema.
- **Basic Eloquent Model and MVC**: Implemented models for interacting with the database.
- **Eloquent Relationships**: Defined relationships using `belongsTo`, `hasMany`, and `belongsToMany`.
- **Eager Loading and N+1 Query Problem**: Optimized database queries.

## Full Simple CRUD

### CRUD Operations
- **Route Resource and Resourceful Controllers**: Implemented CRUD operations.
- **Forms, Validation and Form Requests**: Validated user input.
- **File Uploads and Storage**: Managed file uploads.
- **Table Pagination**: Implemented pagination for listing items.

## Additional Features

### Dark Mode
- **Toggle Theme**: Users can switch between light and dark modes.

### Password Confirmation
- **Profile Editing**: Required password confirmation for security.

### Policies
- **Authorization**: Ensured users have appropriate permissions to perform actions.

## Contributing

Contributions are welcome! Please submit a pull request or open an issue to discuss potential changes.

## License

This project is open-source and available under the [MIT License](LICENSE).

