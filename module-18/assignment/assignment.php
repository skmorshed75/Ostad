<?php
/* 
MODULE - 18
Submitted by : Sheikh Mohammed Morshed
Date : 25/06/2023

ASSIGNMENT :
------------

Task 1:
Create a new migration file to add a new table named "categories" to the database. The table should have the following columns:
id (primary key, auto-increment)
name (string)
created_at (timestamp)
updated_at (timestamp)
---------------------------------------------------------------------------------------------

Solution :
1. Run the following command to create a new migration file from the Terminal :
    php artisan make:migration create_categories_table --create=categories

2. Open the newly created migration file and update its contents with the following code:

CODE :
<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}

/*

Task 2:
Create a new model named "Category" associated with the "categories" table. Define the necessary properties and relationships.
-----------------------------------------------------------------------------------------------

Solution : 
1. Run the following command to create a new model from Terminal :
    php artisan make:model Category

*/
<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Category extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categories';

    /**
     * The primary key column.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        // Additional default attribute values, if any
    ];

    /**
     * Get the associated products for the category.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
/*


Task 3 :
Write a migration file to add a foreign key constraint to the "posts" table. The foreign key should reference the "categories" table on the "category_id" column.
--------------------------------------------------------------------------------------------

Solution :
1. Run the following command to create a new migration file from Terminal :
    php artisan make:migration add_foreign_key_to_posts_table
*/
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id');

            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
        });
    }
}
/*

Finally, run the migration using the following command: php artisan migrate


Task 4:
Create a relationship between the "Post" and "Category" models. A post belongs to a category, and a category can have multiple posts.
--------------------------------------------------------------------------------------------------

Solution :
1. Open the "Post" model file (app/Models/Post.php) and update its contents:
*/
<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
    /**
     * Get the category that owns the post.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
/*

2. Open the "Category" model file (app/Models/Category.php) and update its contents:
*/
<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Category extends Model
{
    /**
     * Get the posts associated with the category.
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
/*

3. With the relationship defined, you can now access the related models from either side of the relationship. For example, to retrieve the category of a post or the posts belonging to a category:
*/

// Retrieve the category of a post
$post = Post::find(1);
$category = $post->category; // Access the related category

// Retrieve the posts belonging to a category
$category = Category::find(1);
$posts = $category->posts; // Access the related posts
/*


Task 5:
Write a query using Eloquent ORM to retrieve all posts along with their associated categories. Make sure to eager load the categories to optimize the query.
----------------------------------------------------------------------------------------------

Solution : Eloquent Query
*/
$posts = Post::with('category')->get();
foreach ($posts as $post) {
    echo "Post Title: " . $post->title . "\n";
    echo "Post Content: " . $post->content . "\n";
    echo "Category Name: " . $post->category->name . "\n";
    echo "\n";
}
/*


Task 6:
Implement a method in the "Post" model to get the total number of posts belonging to a specific category. The method should accept the category ID as a parameter and return the count.
------------------------------------------------------------------------------------------------

Solution :
*/
<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
    /**
     * Get the category that owns the post.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the total number of posts for a specific category.
     *
     * @param int $categoryId
     * @return int
     */
    public static function getCountByCategory($categoryId)
    {
        return self::where('category_id', $categoryId)->count();
    }
}

/*
To use this method, you can call it on the "Post" model like this:
*/
$categoryId = 1; // Replace with the desired category ID
$count = Post::getCountByCategory($categoryId);


/*
Task 7:
Create a new route in the web.php file to handle the following URL pattern: "/posts/{id}/delete". Implement the corresponding controller method to delete a post by its ID. Soft delete should be used.
------------------------------------------------------------------------------------------------

Solution :
1. Open the web.php file located in the routes directory of your Laravel project. Add the following route definition to create a route for the URL pattern "/posts/{id}/delete":
*/
use App\Http\Controllers\PostController;
Route::delete('/posts/{id}/delete', [PostController::class, 'delete'])->name('posts.delete');
/*

2. Create or open the PostController class located in the app/Http/Controllers directory. 

3: Add the delete() method to the PostController class:
*/
<?php
namespace App\Http\Controllers;
use App\Models\Post;
class PostController extends Controller
{
    /**
     * Delete a post by its ID using soft delete.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully.');
    }
}
/*


Task 8:
Implement a method in the "Post" model to get all posts that have been soft deleted. The method should return a collection of soft deleted posts.
-------------------------------------------------------------------------------------------------

Solution :
To implement a method in the "Post" model to retrieve all soft deleted posts :
*/
<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model
{
    use SoftDeletes;

    /**
     * Get all soft deleted posts.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function getAllSoftDeleted()
    {
        return self::onlyTrashed()->get();
    }
}
/*

To use this method, you can call it on the "Post" model like this:
*/
$softDeletedPosts = Post::getAllSoftDeleted();
/*


Task 9:
Write a Blade template to display all posts and their associated categories. Use a loop to iterate over the posts and display their details.
-------------------------------------------------------------------------------------------

Solution : Writing a blade template :
*/
@foreach ($posts as $post)
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->content }}</p>
    <p>Category: {{ $post->category->name }}</p>
    <hr>
@endforeach
/*


Task 10:
Create a new route in the web.php file to handle the following URL pattern: "/categories/{id}/posts". Implement the corresponding controller method to retrieve all posts belonging to a specific category. The category ID should be passed as a parameter to the method.
---------------------------------------------------------------------------------------------

Solution :
1: Open the web.php file located in the routes directory of your Laravel project. Add the following route definition to create a route for the URL pattern "/categories/{id}/posts": 
*/
use App\Http\Controllers\CategoryController;
Route::get('/categories/{id}/posts', [CategoryController::class, 'getPosts'])->name('categories.posts');
/*

2. Create or open the CategoryController class located in the app/Http/Controllers directory. Add the getPosts() method to the CategoryController class:
*/
<?php
namespace App\Http\Controllers;
use App\Models\Category;
class CategoryController extends Controller
{
    /**
     * Retrieve all posts belonging to a specific category.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\View
     */
    public function getPosts($id)
    {
        $category = Category::findOrFail($id);
        $posts = $category->posts()->get();

        return view('category.posts', compact('category', 'posts'));
    }
}
/*


Task 11:
Implement a method in the "Category" model to get the latest post associated with the category. The method should return the post object.
-----------------------------------------------------------------------------------------------

Solution :
To implement a method in the "Category" model to retrieve the latest post associated with the category, you can define a relationship between the "Category" and "Post" models and then add a custom method to retrieve the latest post. Here's an example implementation:
*/
<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Category extends Model
{
    /**
     * Get the latest post associated with the category.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function latestPost()
    {
        return $this->hasOne(Post::class)->latest();
    }
}
/*
To use this method, you can call it on a category instance like this:
*/
$category = Category::find(1); // Replace with the desired category ID
$latestPost = $category->latestPost;
/*


Task 12:
Write a Blade template to display the latest post for each category. Use a loop to iterate over the categories and display the post details.
-----------------------------------------------------------------------------------------------

Solution :
To display the latest post for each category in a Blade template, you can use a loop to iterate over the categories and access the latest post associated with each category. Here's an example template:
*/
@foreach ($categories as $category)
    <h2>{{ $category->name }}</h2>
    <h3>{{ $category->latestPost->title }}</h3>
    <p>{{ $category->latestPost->content }}</p>
    <hr>
@endforeach
/*

