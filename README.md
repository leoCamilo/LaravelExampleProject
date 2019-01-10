# LaravelExampleProject

Example project built in [Laravel framework](https://laravel.com/) for learning purpose, using the [material template](https://www.creative-tim.com/product/material-dashboard) created by [creative-tim](https://www.creative-tim.com/), this project contains a bunch of CRUD operations of many types of data and a RESTful API for external endpoint consult.

here are some screenshots:

<p align="center">
  <img src="/screenshots/news_1.png" width="46%">
  <img src="/screenshots/news_2.png" width="46%">
  <img src="/screenshots/office.png" width="46%">
  <img src="/screenshots/study_1.png" width="46%">
  <img src="/screenshots/video_lessons.png" width="46%">
</p>

### test:

To test this project you need php and composer with laravel installed, you can find the guild for laravel 5.0 [here](https://laravel.com/docs/5.0)

you need to create the `.env` file, witch contains the config info, like the mysql database name and user credentials, after this file is created and mysql credentials configured, just run these comands:
```
php artisan key:generate
php artisan migrate
php artisan serve
```

after this your server is runing on `http://localhost:8000`
the default login is:
```
user: admin
pass: admin
```

now just enjoy =D any doubts just create an issue and I'll answer you fast as possible. 
