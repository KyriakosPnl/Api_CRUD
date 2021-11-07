# Api_CRUD

This simple project was designed to perform the **Create Read Update and Delete** operations via API.
The project was developed using **php** and the _**Laravel 8.69**_ framework.

I used _**kanban**_ as a development methodology, and also used the _**jira**_ software for the first time.

The API represents a mysql table. Every row of the table represents an online course.

###  Key steps of the development:

* Installed a new laravel project using composer.
* Created the Course model and migration.
* Created the controller and routes using Laravel resource routing, which assigns the typical "CRUD" routes to a controller.
* Seeded the database with dummy data using Laravels Seeder.
* Developed the Create Read Update and Delete functions.
* Tested the API endpoints using _**Postman**_.
* Created views for display purposes using Laravels Blade and Bootstrap. 

###  ROUTES:


 Method    | URI                      | Name           | Action                                                     | Middleware 
-----------|--------------------------|----------------|------------------------------------------------------------|------------
 GET|HEAD  | /                        |                | Closure                                                    | web        
 GET|HEAD  | api/course              | course.index  | App\Http\Controllers\CourseController@index               | web        
 POST      | api/course               | course.store   | App\Http\Controllers\CourseController@store                | web        
 GET|HEAD  | api/course/create        | course.create  | App\Http\Controllers\CourseController@create               | web       
 GET|HEAD  | api/course/{course}      | course.show    | App\Http\Controllers\CourseController@show                 | web        
 PUT|PATCH | api/course/{course}      | course.update  | App\Http\Controllers\CourseController@update               | web        
 DELETE    | api/course/{course}      | course.destroy | App\Http\Controllers\CourseController@destroy              | web        
 GET|HEAD  | api/course/{course}/edit | course.edit    | App\Http\Controllers\CourseController@edit                 | web        
       
