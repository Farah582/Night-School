# Night-School
Route::get('/admin/login', [AuthController::class, 'adminLogin']);
Route::post('/admin/user-login', [AuthController::class, 'adminLogger']);

Route::get('/', [AuthController::class, 'index']);
Route::get('/student/register', [AuthController::class, 'studentRegister']);
