# README

## Instructions to Run

1. Install dependencies:
    ```bash
    composer install
    ```

2. Copy environment file:
    ```bash
    cp .env.example .env
    ```

3. Run database migrations and seeders:
    ```bash
    php artisan migrate:fresh --seed
    ```

4. Start the server:
    ```bash
    php artisan serve
    ```
