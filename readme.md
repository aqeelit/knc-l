

## Key Features
1. Laravel 5.8                        
2. React JS 16.9                       
3. Hi-Tech Learning                       
4. Social Login                  
5. Responsive Design                      
6. Course Management                     
7. Curriculum                
8. Payment Gateway                   
9. SEO Friendly                
10. Videos                 
11. Instructor Credits                        
12. Instructor Module                      
13. Admin Module                   
14. Page Management                       
15. Blogs                  
16. Website Security

|    Role       |        Email ID        |   Password    |
| ------------- | ---------------------  | ------------- |
|    Admin      | admin@ulearn.com       |    secret     |
|    Instructor | instructor@ulearn.com  |    secret     |
|    Student    | student@ulearn.com     |    secret     |


## Installation
In the root folder, find the .env file and change the following values

```sh
APP_NAME=
APP_URL=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

Through terminal or command prompt, update composer to install the dependencies:

```sh
composer update
```
Run the migration command to create the tables

```sh
php artisan migrate
```

Run the seeder to import mandatory values to the tables

```sh
php artisan db:seed
```


