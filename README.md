# Personal Data Management System

This is a simple web application for managing personal data including basic information and educational experiences. The project allows for insertion, viewing, editing, and deletion of records using PHP for backend operations and JavaScript (jQuery) for frontend interactions. It utilizes MySQL database for data storage.

## Features

- Insert new personal data with educational experiences.
- View a list of records sorted alphabetically by surname.
- Edit existing records including both personal information and educational details.
- Delete records with confirmation.
- Responsive design for desktop, tablet, and smartphone devices.

## Technologies Used

- **Backend**: PHP, MySQL
- **Frontend**: HTML, CSS, JavaScript (jQuery)
- **Database**: MySQL (via phpMyAdmin)
- **Development Environment**: XAMPP (Apache, MySQL, PHP)

## Files Structure

- **`index.html`**: Main HTML file containing the frontend interface.
- **`insert.php`**: PHP script to handle insertion of new records.
- **`fetch.php`**: PHP script to fetch all records from the database.
- **`fetch_single.php`**: PHP script to fetch a single record for editing.
- **`update.php`**: PHP script to handle updating of records.
- **`delete.php`**: PHP script to handle deletion of records.
- **`db.php`**: PHP script to establish database connection.
- **`assets/`**: Directory containing CSS and JavaScript files.
- **`vendor/`**: Directory for external libraries (if used).

## Setup Instructions

1. **Clone the repository**
https://github.com/anitatehrani/Personal-Data-Management-System.git

2. **Set up Database**

- Import the `database.sql` file into your MySQL database using phpMyAdmin.

3. **Configure Database Connection**

- Modify the `db.php` file to set your MySQL database credentials (`$servername`, `$username`, `$password`, `$dbname`).

4. **Run the Application**

- Start XAMPP and make sure Apache and MySQL are running.
- Navigate to `http://localhost/personal-data-management/index.html` in your web browser.

## Usage

- **Insert Data**: Fill out the form on the homepage and click "Save".
- **View Data**: All records are displayed in a table sorted by surname.
- **Edit Data**: Click "Edit" on a record to modify both personal information and educational details.
- **Delete Data**: Click "Delete" on a record to remove it from the database after confirmation.
