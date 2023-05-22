Question
----------
 Create a route in Laravel that handles a POST request to '/submit' URL.
 The route should retrieve the 'email' input parameter from the request and store it
 in a variable called $email. Then, return a JSON response with the following data:
 ['success' => true, 'message' => 'Form submitted successfully.']

 SOLUTION
 ----------

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
