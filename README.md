<b> Laravel CRUD Application </b>

<p>
This project is a simple CRUD (Create, Read, Update, Delete) application built using Laravel. It allows users to perform basic database operations with a clean and responsive UI.
</p>

<b> Features </b>
 
<p> ✅  Create new records </p>
<p> ✅  Read and display records </p>
<p> ✅  Update existing records </p>
<p> ✅  Delete records </p>
<p> ✅  Validation for input fields </p>
<p> ✅  User-friendly interface </p>

<b> Installation </b>

1. <b> Clone the repository </b> <br>
    git clone <https://github.com/mohammadatif786/curd.git 
    <br>
    cd curd

2. <b> Install dependencies </b><br>
    composer install <br>
    npm install

3. <b> Set up environment </b><br>
    Copy .env.example and rename it to .env, then update the database credentials. <br>
    cp .env.example .env

4. <b> Generate application key </b> <br>
    php artisan key:generate

5. <b> Run migrations and seed database (if applicable) </b> <br>
    php artisan migrate --seed  

6. <b> Serve the application </b> <br>
    php artisan serve <br>
    Open http://127.0.0.1:8000 in your browser.

<b> Usage </b>

1. Navigate to the dashboard to add, view, edit, and delete records.
2. Forms have built-in validation to prevent incorrect data entry.
3. Data is dynamically updated without requiring a full-page refresh (if using AJAX).

<b> Technologies Used </b>

1. Laravel – Backend framework
2. Blade – Templating engine
3. MySQL – Database
4. Bootstrap – Frontend styling (if applicable)

<b> License </b>

<p> This project is open-source and free to use. </p>