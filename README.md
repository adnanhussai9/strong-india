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

`php artisan key:generate`

DB_CONNECTION=mysql <br>
DB_HOST=127.0.0.1 <br>
DB_PORT=3306 <br>
DB_DATABASE=strongindia <br>
DB_USERNAME=root <br>
DB_PASSWORD=

`php artisan migrate`

`php artisan db:seed`

`php artisan serve`
`npm run dev`
