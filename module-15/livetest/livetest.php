Question
----------
Create a single action controller called AboutController using the appropriate artisan command. Implement the single action controller to return a view called about when accessed via a GET request to the /about URL.

SOLUTION
----------
1) Open command line interface (CLI) or terminal.

2) Navigate to the root directory of Laravel project.

3) Run the following artisan command to generate the single action controller:

- php artisan make:controller AboutController --invokable

4) Open the generated AboutController file, located at app/Http/Controllers/AboutController.php.

5) Replace the content of the AboutController file with the following code:

<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class AboutController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\View\View
     */
    public function __invoke(Request $request)
    {
        return view('about');
    }
}
?>

6) Create the about.blade.php view file. In Laravel, views are typically stored in the resources/views directory. Create a new file named about.blade.php in the resources/views directory and add desired content to the view.

7) Now, you can access the /about URL via a GET request, and it will return the about view.
