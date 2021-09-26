# DC/79 website project

## Table of contents

- [About this project](#about-this-project)
- [Tools](#tools)
- [How to use it](#how-to-use-it)
  - [1. The frontend application](#1-the-frontend-application)
  - [2. The backend application](#2-the-backend-application)
- [How to install locally](#how-to-install-locally)
  - [Step 1. Clone the repository and install dependencies](#step-1-clone-the-repository-and-install-dependencies)
  - [Step 2. Initialise the application](#step-2-initialise-the-application)
- [License](#license)

## About this project

This is a mini CMS project containing 7 small CRUD backend pages to maintain the actual website using the MVC concept.

- Some of them are basic data saving and retrieving
- Some can upload images to storage
- One has a WYSIWYG HTML editor ([TinyMCE](https://www.tiny.cloud)) which is used to handle formatted texts to be saved and retireved from the database
- The guestbook uses Google reCAPTCHA v3 to ignore spam without user interaction

## Tools

- Laravel 8
- Bootstrap 5
- [TinyMCE](https://www.tiny.cloud) WYSIWYG HTML editor
- Google reCAPTCHA v3

## How to use it

There are 2 applications separated by Laravel's middleware routes.

### 1. The frontend application

which is a website retrieving data from the database and presenting it through Blade templates with Bootstrap.
You don't need to be registered/logged in to access this application. After following the [installation steps](#how-to-install-locally) you can open `http://localhost:8000` from your browser and click through the pages.

### 2. The backend application

is more like a mini CMS. You can modify the data of each page here.
For this part of the project, you need to be registered and logged in ([step 5](#serve) shows how you can do it).
Here you can modify the data shown in the Frontend application.

## How to install locally

### Step 1. Clone the repository and install dependencies

***

```console
girl@WithAPlan ~ % git clone https://github.com/girlWithAPlan/laravel8_website.git
girl@WithAPlan laravel8_website % cd laravel8_website
girl@WithAPlan laravel8_website % composer install
```

### Step 2. Initialise the application

***

#### 1. Generate your Application key

- Rename the `.env.example` file to `.env`
- run the `php artisan key:generate` command to generate your APP_KEY in the `.env` file

#### 2. Database migration

- Run `php artisan migrate:fresh --seed` to initialise your database
You can access the database from the project's directory by running `mysql -u root` (no password needed)

#### 3. Create a symlink for storage and create the directories for file handling

[Symbolic links in Laravel 8](https://laravel.com/docs/8.x/filesystem#the-public-disk)
Run the `php artisan storage:link` command to create a symlink for the project
In the `storage/app/public` directory create the following 2 directories for the Album feature to work

```console
girl@WithAPlan public % mkdir album_covers
girl@WithAPlan public % mkdir photos
```

#### 4. Node and npm

This project requires node and npm to be installed, if you don't have it already then you can find a quick guide [here](https://gist.github.com/isaacs/579814)
Then you can run `npm install` to install the asset dependecies and `npm run dev` to combine the style and javascript files

#### 5. Serve the application {#serve}

You can run the application by running `php artisan serve` and open `http://localhost:8000` from your browser.
To access the CMS application of this project, you need register on `http://localhost:8000/register` , or you can just use a test user to login `test@gmail.com - TestTest` (NOTE - it is not recommended to use this in production, so please change it)

#### 6. Extras

 If you want to try the GuestBook page as well, you can generate new reCAPTCHA keys and add them to the `.env` file (`RECAPTCHA_SITE_KEY` and `RECAPTCHA_SECRET_KEY`)
 Follow the [instructions](https://www.google.com/recaptcha/admin/create) to create a v3 key-pair

## License

This mini CMS website project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
