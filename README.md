## Running the Project

To run this project, ensure you have the following prerequisites:

- PHP 7.3 or higher
- Composer
- Node.js 18

Follow these steps to get started:

1. **Clone the repository:**
    ```sh
    git clone https://github.com/H-pun/grocerystore
    cd grocerystore
    ```

2. **Install PHP dependencies:**
    ```sh
    composer install
    ```

3. **Install Node.js dependencies:**
    ```sh
    npm install
    ```

4. **Set up environment variables:**
    Copy the `.env.example` file to `.env` and update the necessary configurations.
    ```sh
    cp .env.example .env
    ```

5. **Generate application key:**
    ```sh
    php artisan key:generate
    ```

6. **Run database migrations:**
    ```sh
    php artisan migrate
    ```

7. **Seed the database:**
    ```sh
    php artisan db:seed
    ```

8. **Start the development server:**
    ```sh
    php artisan serve
    ```

Your Laravel application should now be running on `http://localhost:8000`.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
