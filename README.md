# GitHub Issues Viewer App

This web application allows GitHub users to view their open issues from a specified repository.

## Features

- List all open issues assigned to the logged-in GitHub user.
- View detailed information about a specific issue.
- Navigate back to the list of issues from the detailed view.
- Uses GitHub API for fetching issue data.
- Bootstrap integration for responsive design.

## Prerequisites

Before you begin, ensure you have the following installed:

- PHP (>= 7.4)
- Composer
- SQLite or any other supported database driver by Laravel (if not using SQLite)

## Setup Instructions

1. **Clone the repository:**

   ```bash
   git clone https://github.com/your_github_username/github-issues-app.git
   cd github-issues-app
2. **Install dependencies:**

    ```bash
    Copy code
    composer install

3. **Setup Environment Variables:**
Create a copy of .env.example and rename it to .env:
    ```bash
    Copy code
    cp .env.example .env

Edit the .env file and configure the following settings:

    APP_NAME - Name of your application.
    APP_ENV - Environment mode (local or production).
    APP_KEY - Generate using php artisan key:generate.
    GITHUB_PERSONAL_TOKEN - Your GitHub Personal Access Token with necessary scopes.
    GITHUB_USERNAME - Your Github Username
    GITHUB_REPO - The repository you want to access

4. **Generate Application Key:**
   ```bash
    Copy code
    php artisan key:generate

5. **Run Migrations (if using SQLite):**

If you are using SQLite as your database, run the migrations to create the necessary tables:

    
    Copy code
    php artisan migrate
    
6. **Start the Development Server:**

    ```bash
    Copy code
    php artisan serve
The application will be available at http://localhost:8000.

## Usage
Access the application in your web browser.
Log in using your GitHub credentials.
Navigate to view all open issues assigned to you in a specific GitHub repository.
Click on an issue to view its details.
Use the back button to return to the list of issues.

## Additional Notes
Ensure that your .env file is properly configured, especially the GITHUB variables.
This application uses Bootstrap for styling. You can customize the styles further as needed in resources/sass or resources/css files.
Troubleshooting
If you encounter any issues, check the Laravel documentation or GitHub API documentation for assistance.
Verify your internet connection and GitHub Personal Access Token validity.

## License
This project is licensed under the MIT License - see the LICENSE file for details.
