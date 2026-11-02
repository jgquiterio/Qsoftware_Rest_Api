# Qsoftware REST API

A RESTful API for task management, developed with Laravel 12 and PHP 8.2.

## Features

- Create tasks
- List all tasks
- Retrieve a task by ID
- Update existing tasks
- Delete tasks
- Input validation
- JSON responses
- Standard HTTP status codes

## Tech Stack

- PHP 8.2
- Laravel 12
- SQLite
- Eloquent ORM
- REST API
- cURL for endpoint testing

## Requirements

- PHP 8.2+
- Composer 2.8+
- SQLite

## Installation

Clone the repository:

```bash
git clone https://github.com/jgquiterio/Qsoftware_Rest_Api
```

Navigate to the project directory:

```bash
cd PRJ-0003_Qsoftware_Rest_Api
```

Install dependencies:

```bash
composer install
```

Configure the environment:

```bash
cp .env.example .env
php artisan key:generate
```

Create the SQLite database:

```bash
touch database/database.sqlite
```

Configure `.env`:

```env
DB_CONNECTION=sqlite
```

Run migrations:

```bash
php artisan migrate
```

Start the development server:

```bash
php artisan serve
```

API base URL:

`http://127.0.0.1:8000/api`

## API Endpoints

| Method | Endpoint | Description |
|---|---|---|
| POST | `/tasks` | Create a task |
| GET | `/tasks` | List all tasks |
| GET | `/tasks/{id}` | Retrieve a task |
| PUT | `/tasks/{id}` | Update a task |
| DELETE | `/tasks/{id}` | Delete a task |

## Task Structure

```json
{
  "id": 1,
  "title": "Complete project",
  "description": "Finish the REST API project",
  "status": "pending",
  "created_at": "2026-11-02T12:00:00.000000Z",
  "updated_at": "2026-11-02T12:00:00.000000Z"
}
```

## Validation Rules

- `title`: required string, maximum 255 characters.
- `description`: optional string.
- `status`: optional; accepted values are `pending` and `completed`.

## HTTP Status Codes

- `200 OK`: Successful request.
- `201 Created`: Resource successfully created.
- `204 No Content`: Resource successfully deleted.
- `404 Not Found`: Resource not found.
- `422 Unprocessable Entity`: Validation error.

## Author

**Qsoftware**

Software Development & REST API Solutions.