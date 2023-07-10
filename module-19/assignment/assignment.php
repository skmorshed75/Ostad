<?php
/* 
MODULE - 19
Submitted by : Sheikh Mohammed Morshed
Date : 10/07/2023

ASSIGNMENT :
------------

Simple Blog Project using Laravel Eloquent ORM & Axios 

Requirements:
    Blog Post List By 
    Blog Post Details 
    Free comments system  

Design and Layout:
Use HTML, CSS, and Bootstrap orTailwind css


SOLUTION :
-----------
Step 1: Set up Laravel Project
-------------------------------
    Install Laravel by following the official documentation: https://laravel.com/docs/installation
    Set up your database connection in the .env file.

Step 2: Create Model and Migration
----------------------------------
    Generate a model and migration file for the Post entity using the following command: php artisan make:model Post -m

Step 3: Define Columns in Migration
------------------------------------
    In the generated migration file, define the columns you want for the posts table. For example:

    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->timestamps();
        });
    }

    Run the migration to create the posts table in the database: php artisan migrate
    
Step 4: Define Routes and Controllers
-------------------------------------
    Create routes in the routes/web.php file to handle CRUD operations for the Post model. For example:
    use App\Http\Controllers\PostController;

    Route::get('/posts', [PostController::class, 'index']);
    Route::post('/posts', [PostController::class, 'store']);
    Route::get('/posts/{id}', [PostController::class, 'show']);
    Route::put('/posts/{id}', [PostController::class, 'update']);
    Route::delete('/posts/{id}', [PostController::class, 'destroy']);

    - Create a controller PostController using the following command: php artisan make:controller PostController

    - In the PostController, define the methods to handle CRUD operations using Laravel Eloquent ORM. For example:
    namespace App\Http\Controllers;

    use App\Models\Post;
    use Illuminate\Http\Request;

    class PostController extends Controller
    {
        public function index()
        {
            $posts = Post::all();
            return response()->json($posts);
        }

        public function store(Request $request)
        {
            $post = Post::create($request->all());
            return response()->json($post, 201);
        }

        public function show($id)
        {
            $post = Post::findOrFail($id);
            return response()->json($post);
        }

        public function update(Request $request, $id)
        {
            $post = Post::findOrFail($id);
            $post->update($request->all());
            return response()->json($post);
        }

        public function destroy($id)
        {
            $post = Post::findOrFail($id);
            $post->delete();
            return response()->json(null, 204);
        }
    }

Step 5: Set up Axios and Frontend
------------------------------------
    -- Set up your frontend using HTML, CSS, and JavaScript.
    -- Include Axios in your HTML file using a script tag or through a package manager like npm or yarn.
    -- Make requests to the API endpoints defined in the Laravel routes using Axios. For example:
    // Get all posts
    axios.get('/posts')
    .then(response => {
        console.log(response.data);
        // Handle the response data
    })
    .catch(error => {
        console.error(error);
        // Handle the error
    });

    // Create a post
    axios.post('/posts', {
        title: 'My New Post',
        content: 'This is the content of my new post.'
    })
    .then(response => {
        console.log(response.data);
        // Handle the created post
    })
    .catch(error => {
        console.error(error);
        // Handle the error
    });

    // Update a post
    axios.put('/posts/{id}', {
        title: 'Updated Title',
        content: 'Updated content'
    })
    .then(response => {
        console.log(response.data);
        // Handle the updated post
    })
    .catch(error => {
        console.error(error);
        // Handle the error
    });

    // Delete a post
    axios.delete('/posts/{id}')
    .then(() => {
        // Handle successful deletion
    })
    .catch(error => {
        console.error(error);
        // Handle the error
    });


Step 5: To fulfill the requirements of a blog post list, blog post details, and a free comments system using HTML, CSS, and either Bootstrap or Tailwind CSS, you can follow the steps below:
---------------------------------------------------------------------------------------------
    -- Create an HTML file for your blog project, e.g., index.html.
    -- Set up the basic HTML structure with the appropriate <head> and <body> tags.

Step 6: Include CSS Framework
-----------------------------
    -- Choose either Bootstrap or Tailwind CSS for styling your blog project.
    -- Include the CSS framework by adding a link to the stylesheet in the <head> section of your HTML file. For Bootstrap, you can use a CDN link: <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/css/bootstrap.min.css" rel="stylesheet">
    -- Alternatively, for Tailwind CSS, you can use a CDN link: <link href="https://cdn.tailwindcss.com/2.2.17/tailwind.min.css" rel="stylesheet">

Step 7: Create Blog Post List
------------------------------
    -- Inside the <body> tag, create a section to display the blog post list.
    -- Use HTML and CSS classes from the chosen framework to structure and style the blog post list.
    -- You can use a <div> element with a class like container (Bootstrap) or mx-auto (Tailwind CSS) to create a centered container for your blog post list.
    -- Use appropriate HTML tags like <h2> for headings, <p> for post descriptions, and <a> for linking to individual blog post pages.

Step 8: Create Blog Post Details
----------------------------------
    -- For each blog post in the list, create a separate page or section to display the blog post details.
    -- You can link each blog post in the list to its corresponding page or section.
    -- Include the title, content, author, date, and any other relevant information for each blog post.
    -- Apply appropriate styling and layout using HTML and CSS classes from the chosen framework.

Step 9: Implement Free Comments System
----------------------------------------
    -- Create a section at the bottom of each blog post page or in a separate comments page to implement the free comments system.
    -- Use HTML form elements like <input>, <textarea>, and <button> to allow users to enter their comments.
    -- Apply styling to the form and comment section using CSS classes from the chosen framework.
    -- You can use JavaScript to handle form submission and send comments to the server asynchronously.

Step 10: Apply Custom Styling
-----------------------------
    -- Customize the appearance of your blog project using additional CSS rules specific to your design.
    -- Add your custom CSS rules within a <style> tag or link an external CSS file to the HTML file.

Step 11: Test and Refine
-----------------------
    -- Test your blog project by opening the HTML file in a web browser.
    -- Ensure that the blog post list, post details, and comments system function correctly and display properly.
    -- Make any necessary refinements to the HTML structure, CSS styles, or functionality based on your testing.