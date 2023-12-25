# Laravel Jetstream Chat Application
This is a real-time chat application built using Laravel Jetstream and powered by Pusher for live updates.

## Table of Contents
* Requirements
* Installation
* Configuration
* Usage
* Contributing
* License
## Requirements
Make sure your development environment meets the following requirements:

* PHP >= 7.3
* Composer
* Node.js >= 14
* NPM or Yarn
* Laravel >= 8
* Pusher account (for real-time updates)
## Installation
Clone the repository:

`git clone https://github.com/nojus124/ChatAppProject.git`

Navigate to the project directory:

`cd your-chat-app`

Install PHP Dependencies:

`composer install`

Install Front-end Dependencies:

`npm install`

Copy Environment File:

`cp .env.example .env`

Generate Application Key:

`php artisan key:generate`

Configure Database:

Update the .env file with your database credentials:


```
DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=your_database_name

DB_USERNAME=your_database_username

DB_PASSWORD=your_database_password
```

Run Database Migrations:


`php artisan migrate`

Install and Configure Laravel Jetstream:

`php artisan jetstream:install livewire`

Compile Front-end Assets:

`npm run dev`

## Configuration
Configure Pusher:

Update the .env file with your Pusher credentials:

```
BROADCAST_DRIVER=pusher

PUSHER_APP_ID=your_pusher_app_id
PUSHER_APP_KEY=your_pusher_app_key
PUSHER_APP_SECRET=your_pusher_app_secret
PUSHER_APP_CLUSTER=your_pusher_app_cluster
```

Obtain these credentials by creating a Pusher account and creating a new app.

### Update Broadcasting Configuration:

Update the broadcasting.php configuration file (config/broadcasting.php) with your Pusher credentials.

## Usage
### Serve the Application:

`php artisan serve`

## Visit the Application:

Open your web browser and navigate to:

http://localhost:8000

Contributing
Feel free to contribute to this project. Create a pull request with your enhancements or bug fixes.

License
This Laravel Jetstream Chat Application is open-sourced software licensed under the MIT license.
