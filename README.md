# Getting Started with Detik Event API
This project was created using laravel

## TODO:
#### 1. Generate scheme table
Run -> `php artisan migrate`

#### 2. Seeding data "event" and "ticket"
Run -> `php artisan db:seed --class=EventsTableSeeder` (seeding data event) \
Run -> `LIMIT_DATA=10 EVENT_ID=1 php artisan db:seed --class=TicketsTableSeeder` (seeding data event)

#### 3. Run Server
Run -> `php artisan serve`

#### 4. Testing endpoint
Please import collection postman [https://www.getpostman.com/collections/4b303979ed4a6441a969]
