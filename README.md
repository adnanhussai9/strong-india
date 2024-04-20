# STRONG INDIA

## Getting Started

Follow these instructions to get the project up and running on your local machine.

### Prerequisites

-   PHP >= 7.4
-   Composer
-   Xampp
-   MySQL (for database)
-   .env file (copy paste from .env.example)

### Installation

`composer install`

`php artisan key:generate``

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=strongindia
DB_USERNAME=root
DB_PASSWORD=

`php artisan migrate`

`php artisan db:seed`

`php artisan serve`
`npm run dev`
