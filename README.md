## Setup
1. Clone repository
2. Rename .env.example => .env
3. Setup database connection in .env
	1. To use default sqlite database `touch ./database/database.sqlite`
4. Install vendors `composer install`
5. Generate application encryption key `php artisan key:generate`
6. Run migrations `php artisan migrate:refresh --seed`
7. Start local web server `php artisan serve`
8. Open page in web browser `http://127.0.0.1:8000` 
