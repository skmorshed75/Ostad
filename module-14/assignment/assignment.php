<!-- 
MODULE - 14
Submitted by : Sheikh Mohammed Morshed
Date : 22/05/2023

ASSIGNMENT :
------------
Question 1:
-----------
You have a Laravel application with a form that submits user information using a POST request. Write the code to retrieve the 'name' input field value from the request and store it in a variable called $name.

SOLUTION :
------------>
<?php

use Illuminate\Http\Request;

// Your controller method where the form is being submitted
public function store(Request $request)
{
    $name = $request->input('name');
}
?>

<!--
Question 2:
-----------
In your Laravel application, you want to retrieve the value of the 'User-Agent' header from the current request. Write the code to accomplish this and store the value in a variable called $userAgent.

SOLUTION :
------------>
<?php
use Illuminate\Http\Request;

// Your controller method or middleware where you want to retrieve the User-Agent header
public function getUserAgent(Request $request)
{
    $userAgent = $request->header('User-Agent');
}
?>
<!--

Question 3:
----------
You are building an API endpoint in Laravel that accepts a GET request with a 'page' query parameter. Write the code to retrieve the value of the 'page' parameter from the current request and store it in a variable called $page. If the parameter is not present, set $page to null.

SOLUTION :
------------>
<?php
use Illuminate\Http\Request;

// Your controller method where the API endpoint is defined
public function yourApiEndpoint(Request $request)
{
    $page = $request->query('page', null);
}
?>
<!--

Question 4:
-----------
Create a JSON response in Laravel with the following data:
{
    "message": "Success",
    "data": {
        "name": "John Doe",
        "age": 25
    }
}

SOLUTION :
------------>
<?php
use Illuminate\Http\JsonResponse;

public function yourControllerMethod()
{
    $data = [
        'name' => 'John Doe',
        'age' => 25
    ];

    return response()->json([
        'message' => 'Success',
        'data' => $data
    ]);
}

?>
<!--

Question 5:
-----------
You are implementing a file upload feature in your Laravel application. Write the code to handle a file upload named 'avatar' in the current request and store the uploaded file in the 'public/uploads' directory. Use the original filename for the uploaded file.

SOLUTION :
------------>
<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

public function handleFileUpload(Request $request)
{
    if ($request->hasFile('avatar')) {
        $file = $request->file('avatar');
        $fileName = $file->getClientOriginalName();
        
        $file->storeAs('uploads', $fileName, 'public');        
        return response()->json(['message' => 'File uploaded successfully']);
    }    
    return response()->json(['message' => 'No file was uploaded'], 400);
}
?>
<!--

Question 6:
------------
Retrieve the value of the 'remember_token' cookie from the current request in Laravel and store it in a variable called $rememberToken. If the cookie is not present, set $rememberToken to null.

SOLUTION :
------------>
<?php
use Illuminate\Http\Request;

public function yourControllerMethod(Request $request)
{
    $rememberToken = $request->cookie('remember_token', null);
}

?>
<!--

Question 7:
------------
Create a route in Laravel that handles a POST request to the '/submit' URL. Inside the route closure, retrieve the 'email' input parameter from the request and store it in a variable called $email. Return a JSON response with the following data:
{
    "success": true,
    "message": "Form submitted successfully."
}

SOLUTION :
------------>

<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\JsonResponse;

Route::post('/submit', function (Request $request) {
    $email = $request->input('email');

    // Process the email value as needed, such as storing it in a database
    return response()->json([
        'success' => true,
        'message' => 'Form submitted successfully.'
    ]);
});
?>
<!--