<b> Laravel CRUD Application </b>

<p>
This project is a simple CRUD (Create, Read, Update, Delete) application built using Laravel. It allows users to perform basic database operations with a clean and responsive UI.
</p>

<b> Features </b>

✅ Create new records
✅ Read and display records
✅ Update existing records
✅ Delete records
✅ Validation for input fields
✅ User-friendly interface

Installation

1. Clone the repository
    git clone <https://github.com/mohammadatif786/curd.git
    cd curd

2. Install dependencies
    composer install
    npm install

3. Set up environment
    Copy .env.example and rename it to .env, then update the database credentials.
    cp .env.example .env

4. Generate application key
    php artisan key:generate

5. Run migrations and seed database (if applicable)
    php artisan migrate --seed

6. Serve the application
    php artisan serve
    Open http://127.0.0.1:8000 in your browser.

Usage

1. Navigate to the dashboard to add, view, edit, and delete records.
2. Forms have built-in validation to prevent incorrect data entry.
3. Data is dynamically updated without requiring a full-page refresh (if using AJAX).

Technologies Used

1. Laravel – Backend framework
2. Blade – Templating engine
3. MySQL – Database
4. Bootstrap – Frontend styling (if applicable)

License
This project is open-source and free to use.