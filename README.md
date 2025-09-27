# Portfolio Website

## Overview
This is a personal portfolio website built using Laravel, Blade, and TailwindCSS. The website features a futuristic, responsive, and interactive design, showcasing various sections including Home, About, Projects, and Contact.

## Features
- **Responsive Design**: The website is fully responsive and adapts to different screen sizes.
- **Interactive Elements**: Includes animations and interactive components for a modern user experience.
- **Dark Mode Toggle**: Users can switch between light and dark themes.
- **Project Showcase**: Displays a grid of projects with descriptions and links.

## Technologies Used
- **Laravel**: PHP framework for building the web application.
- **Blade**: Templating engine for rendering views.
- **TailwindCSS**: Utility-first CSS framework for styling.
- **AOS.js**: Library for scroll animations (if included).
- **Framer Motion**: Library for animations (if included).

## Installation

### Prerequisites
- PHP >= 7.3
- Composer
- Node.js and npm

### Steps
1. Clone the repository:
   ```
   git clone <repository-url>
   ```
2. Navigate to the project directory:
   ```
   cd portfolio-website
   ```
3. Install PHP dependencies:
   ```
   composer install
   ```
4. Install Node.js dependencies:
   ```
   npm install
   ```
5. Build the assets:
   ```
   npm run dev
   ```
6. Set up your `.env` file:
   ```
   cp .env.example .env
   php artisan key:generate
   ```
7. Run the migrations (if any):
   ```
   php artisan migrate
   ```
8. Start the development server:
   ```
   php artisan serve
   ```

## Project Structure
- `app/Http/Controllers/PortfolioController.php`: Handles requests for different sections.
- `resources/views/layouts/app.blade.php`: Main layout file.
- `resources/views/components/navbar.blade.php`: Navigation bar component.
- `resources/views/home.blade.php`: Hero section markup.
- `resources/views/about.blade.php`: About Me section markup.
- `resources/views/projects.blade.php`: Projects section markup.
- `resources/views/contact.blade.php`: Contact section markup.
- `resources/css/app.css`: Custom styles.
- `routes/web.php`: Web routes definition.
- `tailwind.config.js`: TailwindCSS configuration.
- `package.json`: npm configuration.
- `composer.json`: Composer configuration.

## License
This project is open-source and available under the MIT License.