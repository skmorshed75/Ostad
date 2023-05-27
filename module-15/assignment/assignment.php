<?php
/* 
MODULE - 15
Submitted by : Sheikh Mohammed Morshed
Date : 25/05/2023

ASSIGNMENT :
------------

Instructions:

Complete the following coding tasks independently.

Implement the tasks using Laravel framework and follow best practices.

Submit your solution within the given time frame.


Task 1: Request Validation :
-----------------------------
Implement request validation for a registration form that contains the following fields: name, email, and password. Validate the following rules:
name: required, string, minimum length 2.
email: required, valid email format.
password: required, string, minimum length 8.
*/

//IN PHP FILE
$errors = []; // Initialize an empty array to store validation errors

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate the name field
    if (empty($_POST["name"])) {
        $errors["name"] = "Name is required";
    } elseif (strlen($_POST["name"]) < 2) {
        $errors["name"] = "Name must be at least 2 characters long";
    }

    // Validate the email field
    if (empty($_POST["email"])) {
        $errors["email"] = "Email is required";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Invalid email format";
    }

    // Validate the password field
    if (empty($_POST["password"])) {
        $errors["password"] = "Password is required";
    } elseif (strlen($_POST["password"]) < 8) {
        $errors["password"] = "Password must be at least 8 characters long";
    }

    // If there are no validation errors
    if (empty($errors)) {
        // Process the registration
        // ...
        // Your registration logic goes here
        // ...
    }
}

// Display the registration form with validation errors (if any)
?>

<!- HTML form -->
<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php echo isset($_POST["name"]) ? $_POST["name"] : ""; ?>">
    <?php if (isset($errors["name"])) echo "<p>{$errors["name"]}</p>"; ?>

    <label for="email">Email:</label>
    <input type="text" id="email" name="email" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ""; ?>">
    <?php if (isset($errors["email"])) echo "<p>{$errors["email"]}</p>"; ?>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" value="">
    <?php if (isset($errors["password"])) echo "<p>{$errors["password"]}</p>"; ?>

    <input type="submit" value="Register">
</form>


<?php
/*
Task 2: Request Redirect
-------------------------
Create a route /home that redirects to /dashboard using a 302 redirect.
*/

// Define the route for /home
$app->get('/home', function () use ($app) {
    // Perform any necessary logic here
    
    // Redirect to /dashboard using a 302 redirect
    return $app->redirect('/dashboard');
});

// Define the route for /dashboard
$app->get('/dashboard', function () {
    // Display the dashboard page
    // Add your dashboard logic here
    echo "Welcome to the dashboard!";
});

// Run the application
$app->run();


/*
Task 3: Global Middleware
-------------------------
Create a global middleware that logs the request method and URL for every incoming request. Log the information to the Laravel log file.
*/
SOLUTION :
----------

Generate the Middleware : Open your terminal and navigate to your Laravel project directory. Then run the following command to generate the middleware: php artisan make:middleware LogRequests


Implement the Middleware : Open the app/Http/Middleware/LogRequests.php file and update its handle method as shown below:

<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class LogRequests
{
    public function handle($request, Closure $next)
    {
        // Log the request method and URL
        Log::info('Request Method: ' . $request->method());
        Log::info('Request URL: ' . $request->fullUrl());

        return $next($request);
    }
}

Register the Middleware : To make this middleware global and apply it to every incoming request, you need to register it in the global middleware stack :

protected $middleware = [
    // Other middleware entries...
    \App\Http\Middleware\LogRequests::class,
];
?>

<?PHP
Task 4: Route Middleware
-------------------------
Create a route group for authenticated users only. This group should include routes for /profile and /settings. Apply a middleware called AuthMiddleware to the route group to ensure only authenticated users can access these routes.

SOLUTION :
----------
Define the Middleware : First, let's create the AuthMiddleware if it doesn't already exist. Open your terminal and run the following command to generate the middleware : php artisan make:middleware AuthMiddleware

Implement the Middleware : Open the app/Http/Middleware/AuthMiddleware.php file and update its handle method to check if the user is authenticated:
<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            return $next($request);
        }

        return redirect('/login'); // Redirect to the login page if the user is not authenticated
    }
}
    
Define the Route Group : Open your routes/web.php file and add the route group for authenticated users as follows:
use App\Http\Middleware\AuthMiddleware;

Route::middleware([AuthMiddleware::class])->group(function () {
    Route::get('/profile', function () {
        // Logic for the profile route
    });

    Route::get('/settings', function () {
        // Logic for the settings route
    });
});
    

 
Task 5: Controller
-------------------
Create a controller called ProductController that handles CRUD operations for a resource called Product. Implement the following methods:
index(): Display a list of all products.
create(): Display the form to create a new product.
store(): Store a newly created product.
edit($id): Display the form to edit an existing product.
update($id): Update the specified product.
destroy($id): Delete the specified product.

SOLUTION :
----------
Generate the Controller : Open your terminal and run the following command to generate the ProductController : php artisan make:controller ProductController --resource

Implement the CRUD Methods : Open the app/Http/Controllers/ProductController.php file and update its contents as follows:
<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
        ]);
        Product::create($request->all());
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
        ]);
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}

Define the Routes : Open your routes/web.php file and define the routes for the ProductController as follows: 

use App\Http\Controllers\ProductController;
Route::resource('products', ProductController::class);
    

Task 6: Single Action Controller
--------------------------------
Create a single action controller called ContactController that handles a contact form submission. Implement the __invoke() method to process the form submission and send an email to a predefined address with the submitted data.

SOLUTION :
----------
Generate the Controller : Open your terminal and run the following command to generate the ContactController : php artisan make:controller ContactController --invokable

Implement the __invoke() Method : Open the app/Http/Controllers/ContactController.php file and update its contents as follows:
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        // Send email
        Mail::raw($message, function ($message) use ($name, $email) {
            $message->to('contact@example.com')
                    ->subject('Contact Form Submission')
                    ->from($email, $name);
        });

        // Redirect back with success message
        return redirect()->back()->with('success', 'Thank you for contacting us. We will get back to you soon.');
    }
}

Define the Route : Open your routes/web.php file and define the route for the ContactController as follows:
use App\Http\Controllers\ContactController;
Route::post('/contact', ContactController::class);


Task 7: Resource Controller
-----------------------------
Create a resource controller called PostController that handles CRUD operations for a resource called Post. Ensure that the controller provides the necessary methods for the resourceful routing conventions in Laravel.

SOLUTION :
----------
Generate the Controller : Open your terminal and run the following command to generate the PostController: php artisan make:controller PostController --resource

Implement the Resourceful Methods : Open the app/Http/Controllers/PostController.php file and update its contents as follows:
<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Post::create($request->all());
        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post = Post::findOrFail($id);
        $post->update($request->all());
        return redirect()->route('posts.index')->with('success', 'Post updated successfully.');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}

Define the Routes : Open your routes/web.php file and define the routes for the PostController as follows: 
use App\Http\Controllers\PostController;
Route::resource('posts', PostController::class);
    
 
Task 8: Blade Template Engine
-------------------------------
Create a Blade view called welcome.blade.php that includes a navigation bar and a section displaying the text "Welcome to Laravel!".

SOLUTION :
----------
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Laravel</title>
    <!-- Add your CSS stylesheets and other head elements here -->
</head>
<body>
    <!-- Navigation Bar -->
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <!-- Add more navigation links as needed -->
        </ul>
    </nav>

    <!-- Content Section -->
    <section>
        <h1>Welcome to Laravel!</h1>
        <!-- Add more content as needed -->
    </section>

    <!-- Add your JavaScript scripts and other body elements here -->
</body>
</html>
