# PC Builder App (University Team Project)

Role: Frontend Contributor  
Aston University – Year 2 Team Project (Oct 2024 – Mar 2025)  
This is a forked team repository showcasing collaborative work on a full-stack custom PC e-commerce builder.  
I contributed to aspects of the frontend UI using React and participated in planning and review discussions.

> For transparency, this is a joint submission originally built by Team 32. Full credit to all listed contributors.

## Overview

This project is a full-stack e-commerce platform designed to provide users with a seamless experience for building and purchasing custom PCs. The platform includes features such as product browsing, compatibility checks, user authentication, and an admin dashboard for managing products and orders.

## Features

- **Custom PC Builder**: Users can select components and check compatibility in real-time.
- **Product Reviews**: Customers can leave feedback and ratings for products.
- **Admin Dashboard**: Manage products, orders, and customer data.
- **Reactive Design**: Optimized for desktop with low latency.
- **Secure Checkout**: Includes payment processing and order tracking.

## Technologies Used

- **Frontend**: React, Mantine UI, Tailwind CSS
- **Backend**: Laravel (PHP)
- **Database**: MySQL
- **Other Tools**: Vite, Artillery for performance testing, Scrapy for data scraping, Selenium for end to end tests

## Setup Instructions

### Prerequisites

- Node.js (v16 or higher)
- PHP (v8.1 or higher)
- Composer
- MySQL
- Laravel CLI

### Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/your-repo/Year-2-Team-Project.git
   cd Year-2-Team-Project
   ```

2. Install dependencies:
   ```bash
   npm install
   composer install
   ```

3. Configure the environment:
   - Copy `.env.example` to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Update database credentials and other environment variables in `.env`.

4. Run database migrations and seeders:
   ```bash
   php artisan migrate --seed
   ```

5. Start the development server:
   ```bash
   npm run dev
   php artisan serve
   ```

6. Access the application:
   - Local: `http://localhost:8000`
   - Hosted: [https://cs2team32.cs2410-web01pvm.aston.ac.uk/](https://cs2team32.cs2410-web01pvm.aston.ac.uk/)

## Testing

- Run end-to-end tests:
  ```bash
  cd tests/selenium-tests
  source venv/bin/activate  # For Linux/Mac
  venv\Scripts\activate     # For Windows
  pytest
  ```

- Run performance tests:
  ```bash
  cd tests/artillery
  artillery run test.yaml
  ```

## Contributors

- **Robert Oros** (230237144)
- **Asrar Redwan** (230367027)
- **Nwokike John** (230252745)
- **Mihail Vacarciuc** (230238428)
- **Alhouseini Amen** (230237878)
- **Kai Lowe-Jones** (230234682)
- **Musah Iddrisu** (230222232)
- **Hasnain Imran** (230209037)
- **Alharbi Abdullah** (230046409)



