# Night-School
Route::get('/admin/login', [AuthController::class, 'adminLogin']);
Route::post('/admin/user-login', [AuthController::class, 'adminLogger']);

Route::get('/', [AuthController::class, 'index']);
Route::get('/student/register', [AuthController::class, 'studentRegister']);

Route::get('/teacher/login', [AuthController::class, 'teacherLogin']);
Route::get('/teacher/register', [AuthController::class, 'teacherRegister']);
