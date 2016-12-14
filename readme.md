#Historial Clínico
## Proyecto Base: Laravel -Gentella
https://github.com/FlorientR/laravel-gentelella

## Laravel 5.3

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

### Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs/5.3).


# Installation

## Step 1

### With GIT
Clone git repository

```
git clone https://github.com/ShimonureYue/HistorialClinico.git
```

Go to the project folder 
```
cd HistorialClinico
```

Update composer 
```
composer update
```

## Step 2
Copy ```.env.example``` file to ```.env```

For Unix
```
cp .env.example .env
```
For Windows
```
copy .env.example .env
```

Next, run this follow commands

!! YOU NEED TO INSTALL NODE.JS FOR USE NPM !! 

```
php artisan key:generate
npm install --global bower gulp
npm install
bower install
gulp
```
