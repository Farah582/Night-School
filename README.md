# Night-School
Route::get('/admin/login', [AuthController::class, 'adminLogin']);
Route::post('/admin/user-login', [AuthController::class, 'adminLogger']);
