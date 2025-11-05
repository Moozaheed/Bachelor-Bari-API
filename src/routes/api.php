use App\Http\Controllers\Api\AuthController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// A protected test route
Route::middleware('auth:sanctum')->get('/profile', function (Request $request) {
    return $request->user();
});
