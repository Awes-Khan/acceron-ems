# Laravel Employee Data Management
[![Laravel Version](https://img.shields.io/badge/Laravel-10.2.3-orange.svg)](https://laravel.com/) [![PHP Version](https://img.shields.io/badge/PHP-v8.2-blue.svg)](https://www.php.net/releases/8_2_0.php)

This project is a Laravel-based web application that allows you to upload employee data from an Excel sheet and insert it into a database. It also provides an API endpoint to retrieve employee data based on specific search criteria.

## Features

1. Upload Employee Data: The application provides a feature to upload an Excel sheet containing employee data. The data from the Excel sheet is extracted and inserted into the database.

2. API for Employee Data Retrieval: The application exposes an API endpoint to retrieve employee data based on specific search parameters. The available request parameters for the API are:

    - ```search```: Employee code to search for a specific employee. (optional)
    - ```job_title```: Job title of the employee. (optional)
    - ```department```: Department of the employee. (optional)
    - ```gender```: Gender of the employee. (optional)
    - ```Country```: Country of the employee. (optional)
    - ```City```: City of the employee. (optional)
    - ```from_hiring_date```: Starting date to filter employees based on their hiring date. (optional)
    - ```to_hiring_date```: Ending date to filter employees based on their hiring date. (optional)
    - ```sort_by```: Sorting criteria for the retrieved employee data. (optional)

    Note: All the listed parameters can be empty, allowing for more flexible searches.

## Installation

1. Clone the repository:

   ```
   git clone https://github.com/Awes-Khan/acceron-ems.git
   ```

3. Navigate to the project directory:

    ```
   cd acceron-ems
    ```

5. Install the dependencies using Composer:

    ```
   composer install
    ```

4. Create a copy of the ```.env.example``` file and rename it to ```.env```. Update the necessary configuration values such as the database connection details.

    ```
   cp .env.example .env
    ```

6. Generate a new application key:

    ```
   php artisan key:generate
    ```

7. Run the database migrations to create the required tables:

    ```
   php artisan migrate
    ```

8. Start the local development server:


    ```
    php artisan serve

    npm run dev
     ```

9. Access the application in your web browser at `http://localhost:8000`.

## Usage

### Uploading Employee Data

1. Navigate to the `http://localhost:8000/import` to visit the "Upload Employee Data" webpage.

2. Choose an Excel sheet containing the employee data and click on the "Submit" button.

3. The application will extract the data from the Excel sheet and insert it into the database.

### Retrieving Employee Data via API

To retrieve employee data using the API endpoint, make a POST request to the following URL:

    http://localhost:8000/api/search

Include the desired query parameters in the request body as JSON to filter and sort the employee data. For example:

```json
{
    "search": "E02003",
    "job_title": "Analyst",
    "department": "Sales",
    "gender": "Male",
    "Country": "United States",
    "City": "Chicago",
    "from_hiring_date": "2023-01-01",
    "to_hiring_date": "2023-06-01",
    "sort_by": "hiring_date"
}
```

## Screenshots
### Uploaded Employee Data
![Success Image](
https://github.com/Awes-Khan/acceron-ems/blob/main/public/image.png)

### API Request Success
![API Screenshot](
https://github.com/Awes-Khan/acceron-ems/blob/main/public/image-1.png)

### PhpMyAdmin - All Data Uploaded
![PHPMyadmin](
https://github.com/Awes-Khan/acceron-ems/blob/main/public/image-2.png)
