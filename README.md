\# Qsoftware REST API



A simple RESTful API built with Laravel and PHP for task management.



\## Features



\- Create tasks

\- List all tasks

\- Retrieve a task by ID

\- Update existing tasks

\- Delete tasks

\- Input validation

\- JSON responses

\- Appropriate HTTP status codes



\## Tech Stack



\- PHP

\- Laravel

\- SQLite

\- Eloquent ORM

\- Git and GitHub

\- Postman



\## Requirements



\- PHP version compatible with the selected Laravel version

\- Composer

\- SQLite support enabled in PHP



\## Installation



1\. Clone the repository:



&#x20;  ```bash

&#x20;  git clone YOUR\_REPOSITORY\_URL

&#x20;  ```



2\. Navigate to the project directory:



&#x20;  ```bash

&#x20;  cd PRJ-0003\_Qsoftware\_Rest\_Api

&#x20;  ```



3\. Install dependencies:



&#x20;  ```bash

&#x20;  composer install

&#x20;  ```



4\. Configure the environment:



&#x20;  ```bash

&#x20;  cp .env.example .env

&#x20;  php artisan key:generate

&#x20;  ```



5\. Configure SQLite in your `.env` file.



6\. Run database migrations:



&#x20;  ```bash

&#x20;  php artisan migrate

&#x20;  ```



7\. Start the development server:



&#x20;  ```bash

&#x20;  php artisan serve

&#x20;  ```



\## API Endpoints



| Method | Endpoint | Description |

|--------|----------|-------------|

| GET | /api/tasks | List all tasks |

| GET | /api/tasks/{id} | Retrieve a task |

| POST | /api/tasks | Create a task |

| PUT | /api/tasks/{id} | Update a task |

| DELETE | /api/tasks/{id} | Delete a task |



\## Example Request



Create a task:



```json

{

&#x20; "title": "Complete project",

&#x20; "description": "Finish the REST API portfolio project",

&#x20; "status": "pending"

}

```



\## Testing



API endpoints can be tested using Postman.



\## Purpose



This project demonstrates REST API development with Laravel, including CRUD operations, data validation, database integration, and HTTP response handling.



\## Author



Qsoftware



GitHub: https://github.com/jgquiterio



