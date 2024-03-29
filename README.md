[![PITC](./public/logo/logo.png)](https://primeitclub.com)

# About Prime IT Club

Prime IT Club is a student-run club working towards the goal of bridging the gap between academia and industry.

## Contribute

Do you want to help? That’s awesome.

Here are some of the things you can do to help.

### Contribute as a developer

-   Read [Local Installation Guide](#local-installation-guide) to set up the local development environment

### Used frameworks:

-   [Laravel](https://laravel.com/)
-   [tailwindcss](https://tailwindcss.com/)
-   [Alpine.js](https://alpinejs.dev/)

### Local Installation Guide

Please check the official Laravel installation guide for server requirements before you start.

-   [Official Documentation](https://laravel.com/docs/9.x)

Fork the repository and clone it (or download the zip file and extract it)

Example : (replace `username` with your github username)

    git clone https://github.com:{username}/itc.git

Change directory to the project directory

    cd itc

Install composer dependencies

    composer install

Install npm dependencies

    npm install

Copy the example `.env.example` in `.env` file

    cp .env.example .env

Open and make the required configuration changes in the `.env` file

-   `DB_DATABASE`
-   `DB_USERNAME`
-   `DB_PASSWORD`

Generate an app encryption key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Seed the database (OPTIONAL)

    php artisan db:seed

Seeds `User`,`Blog Category` and `Event Category`

| Email           | Password |
| --------------- | -------- |
| super@admin.com | password |

Start the local development server

    php artisan serve

Or use [Laravel sail](https://laravel.com/docs/10.x/sail)

    ./vendor/bin/sail up

Now you can visit:

-   http://localhost:8000 (visitor)
-   http://localhost:8000/admin (admin)

on your web-broswer to access the website.

### Special thanks to

-   [Prajesh Man Pradhan](https://github.com/prajeshpradhan)
-   [Pramila Shrestha](https://www.linkedin.com/in/pramila-shrestha-91b67a198/)
-   [Susit Ratna Tuladhar](https://github.com/SusitTuladhar)
-   [Umang Shakya](https://www.linkedin.com/in/umang-shakya-0a52411b3/)
-   [Rajila Sthapit](https://www.linkedin.com/in/rajila-sthapit-9a8b24237/)
-   [Rikesh Sherpa](https://github.com/derikesh)
-   [Sanish Maharjan](https://www.linkedin.com/in/sanis-maharjan-8579031a5/)
-   [Subarna Sapkota](https://github.com/subarna0077)
-   [Bihochan Poudel](#)
-   [Riddima Sthapit](#)
-   [Shreebisha Shrestha](#)
-   [Pranab Raj Kc Pandey](https://github.com/PranabZz)
-   [Basanta Rai](https://github.com/iambasanta)
