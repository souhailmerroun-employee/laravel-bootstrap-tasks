# README

Follow these steps to setup the project:

1. Clone the repository.
2. Navigate to the project directory.
3. Copy the `.env.example` file and rename it to `.env`.
4. Update the `.env` file: 
   - Set `DB_CONNECTION=sqlite`.
   - Remove other DB connection details like `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD`.
5. Create a SQLite database file by running `touch database/database.sqlite`.

Then, execute the following commands:

```bash
composer install
php artisan key:generate
php artisan migrate
php artisan serve
```