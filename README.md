# Qsoftware REST API

A simple RESTful API built with Laravel and PHP for task management.

## Features

- Create tasks
- List all tasks
- Retrieve a task by ID
- Update existing tasks
- Delete tasks
- Input validation
- JSON responses
- Appropriate HTTP status codes

## Tech Stack

- PHP
- Laravel
- SQLite
- Eloquent ORM
- Git and GitHub
- Postman

## Requirements

- PHP version compatible with the selected Laravel version
- Composer
- SQLite support enabled in PHP

## Installation

1. Clone the repository:

   ```bash
   git clone YOUR_REPOSITORY_URL
   ```

2. Navigate to the project directory:

   ```bash
   cd PRJ-0003_Qsoftware_Rest_Api
   ```

3. Install dependencies:

   ```bash
   composer install
   ```

4. Configure the environment:

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. Configure SQLite in your `.env` file.

6. Run database migrations:

   ```bash
   php artisan migrate
   ```

7. Start the development server:

   ```bash
   php artisan serve
   ```

## API Endpoints

| Method | Endpoint | Description |
|--------|----------|-------------|
| GET | /api/tasks | List all tasks |
| GET | /api/tasks/{id} | Retrieve a task |
| POST | /api/tasks | Create a task |
| PUT | /api/tasks/{id} | Update a task |
| DELETE | /api/tasks/{id} | Delete a task |

## Example Request

Create a task:

```json
{
  "title": "Complete project",
  "description": "Finish the REST API portfolio project",
  "status": "pending"
}
```

## Testing

API endpoints can be tested using Postman.

## Purpose

This project demonstrates REST API development with Laravel, including CRUD operations, data validation, database integration, and HTTP response handling.

## Author

Qsoftware

GitHub: https://github.com/jgquiterio
