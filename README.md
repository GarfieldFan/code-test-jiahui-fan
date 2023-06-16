### This application is build by Jiahui Fan,
## Contact email: gary.g.van@outlook.com
### This platform is using Laravel

start project with 

```
php artisan serve
```

User is able to enter any string into the text field, and any number at the number field
Result up coming after press the Get button

the Result will show the string after shift.

## Q1. Build a word jumble function

jumble function has been create inside the helper.php file, and I have make helper.php file to globle within the application.

location: app/helper.php

## Q2. Build Unit Tests for the Jumble function

location: tests/Unit/ExampleTest

## Q3. Build The Jumble Service

API only process with post request, and with variable n within the url, from data inside the body content name message

url: /api/jumble/{n}

location: routes/api

## Q4. Build the Jumble Container

## Q5. Design/Build a rate limit on the API (Bonus)

location: app/Http/Middleware/RateLimitMiddleware
