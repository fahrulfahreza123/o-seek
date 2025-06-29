<?php

use App\Models\PantiAsuhan;
use App\Models\ProgramDonasi;
use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\OperatorController;
use App\Http\Middleware\CheckOperatorStatus;
use App\Http\Controllers\Operator_Controller;
use App\Http\Controllers\PantiPageController;
// use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PantiAsuhanController;
// use App\Http\Controllers\SinglePantiController;
use App\Http\Controllers\ProgramDonasiController;
use App\Http\Controllers\PantiAsuhanOperatorController;
use App\Http\Controllers\RegistrasiPantiAsuhanController;
use App\Http\Controllers\ProgramDonasiOperatorController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Models\PantiAsuhanOperator;

// Role dan Permission
Route::group(['middleware' => ['role:admin|operator']], function () {
    Route::get('/admin', [AuthController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::get('/edit-user', [UserController::class, 'edit']);
});

// Route::group(['middleware' => ['permission:create-user']], function () {
//     Route::get('/create-user', [UserController::class, 'create']);
// });

// Route::group(['middleware' => ['role:admin|operator', 'permission:edit-user']], function () {
//     Route::get('/edit-user', [UserController::class, 'edit']);
// });

//1
//------------------------ Auth Routes ----------------------------

// // Admin Routes
// Route::middleware(['auth', 'role:admin'])->group(function () {
//     Route::get('/DashboardAdmin', function () {
//         return view('administrator.dashboard.dashboard');
//     });
// });

// // Operator Routes
// Route::middleware(['auth', 'role:operator'])->group(function () {
//     Route::get('/DashboardOperator', function () {
//         return view('operator.dashboard.dashboard');
//     });
// });

// // User Routes
// Route::middleware(['auth', 'role:user'])->group(function () {
//     Route::get('/DashboardUser', function () {
//         return view('user.dashboard.dashboard');
//     });
// });

//========= forgot password ===============

Route::middleware('guest')->group(function () {
    Route::get('/forgot-password', [ForgotPasswordController::class, 'showForgotPasswordForm'])->name('forgot-password.form');
    Route::post('/forgot-password', [ForgotPasswordController::class, 'handleForgotPassword'])->name('forgot-password.handle');
});


//======== admin ===========
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard (protected by auth middleware)
Route::get('/DashboardAdmin', function () {
    return view('administrator.dashboard.dashboard');
})->middleware('auth');


//========== operator ===========
Route::get('/RegisterOperator', [Operator_Controller::class, 'showRegisterForm'])->name('register');
Route::post('/RegisterOperator', [Operator_Controller::class, 'register']);

Route::get('/FormRegisterOperator', [Operator_Controller::class, 'showRegisterFormPanti'])->name('show_register_panti');
Route::post('/FormRegisterOperator', [Operator_Controller::class, 'register_panti'])->name('register_panti');

Route::get('/LoginOperator', [Operator_Controller::class, 'showLoginForm'])->name('login_operator');
Route::post('/LoginOperator', [Operator_Controller::class, 'login'])->name('login_operator');

Route::middleware(['auth:operator', CheckOperatorStatus::class])->group(function () {
    Route::get('/DashboardOperator', [PantiAsuhanOperatorController::class, 'dashboard'])->name('dashboard.operator');
    Route::get('/ManajemenPantiOperator{id}', [PantiAsuhanOperatorController::class, 'show'])->name('panti_asuhan_operator.show');
    Route::put('/ManajemenPantiOperator{id}/update', [PantiAsuhanOperatorController::class, 'update'])->name('panti_asuhan_operator.update');
});

// Route::middleware('auth:operator')->group(function () {
// });
// Route::get('/ManajemenPantiOperator', [PantiAsuhanOperatorController::class, 'managementPantiOperator'])->name('panti_asuhan_operator.manajemen-panti-operator');
// Route::post('/ManajemenPantiOperator', [PantiAsuhanOperatorController::class, 'store'])->name('panti_asuhan_operator.store');

Route::middleware(['auth:operator'])->group(function () {
    Route::get('/TambahProgramDonasiOperator', [ProgramDonasiController::class, 'create'])->name('program_donasi.create');
    Route::post('/TambahProgramDonasiOperator', [ProgramDonasiController::class, 'store'])->name('program_donasi.store');
});

// Route::post('/logout', [Operator_Controller::class, 'logout'])->name('logout');

// Route::middleware(['auth'])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard'); // Halaman dashboard operator
//     })->name('dashboard');
// });

//---------------Route End Operator--------------- ! 


//---------------Route Start Landing Page--------------- ! 

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/about', [AboutController::class, 'index']);

Route::get('/panti_asuhan_all', [PantiPageController::class, 'index']);
Route::get('panti_asuhan_all/{panti_asuhan_operator}', [PantiPageController::class, 'show']);

// Route::get('/single_panti', [PantiPageController::class, 'show']);

Route::controller(DonasiController::class)->group(function () {
    Route::get('/donate', 'create')->name('donasi.create');
    Route::get('/donate/method_payment', 'createMethodPayment')->name('donasi.createMethodPayment');
    Route::post('/donate', 'store')->name('donasi.store');
    Route::post('/donate/method_payment', 'storeMethodPayment')->name('donasi.storeMethodPayment');

    // Tambahkan route untuk mendapatkan program donasi berdasarkan panti_asuhan_operator_id
    Route::get('/get-program-donasi/{pantiAsuhanOperatorId}', function ($pantiAsuhanOperatorId) {
        $programDonasis = ProgramDonasi::where('panti_asuhan_operators_id', $pantiAsuhanOperatorId)->get();
        return response()->json([
            'programDonasis' => $programDonasis
        ]);
    });
});

//---------------Route End Landing Page--------------- ! 

//---------------Route Start Admin & Operator--------------- !

// Route::get('/register', [Operator_Controller::class, 'showRegisterForm'])->name('register');
// Route::post('/register', [Operator_Controller::class, 'register']);
// Route::get('/login', [Operator_Controller::class, 'showLoginForm'])->name('login_operator');
// Route::post('/login', [Operator_Controller::class, 'login'])->name('login_operator');

//---------------Route End Admin & Operator--------------- ! 

//show nama
Route::get('/user', [UserController::class, 'showUserName']);


//register
// Route::get('/register', function () {
//     return view('administrator/register');
// });

// Route::post('/register', [AuthController::class, 'register']);

//2
//      LOGIN AMSYAR
// Route::get('/login', function () {
//     return view('administrator/login');
// });

// Route::post('/login', [AuthController::class, 'login']);
// Route::get('/login', [AuthController::class, 'showLoginForm']);


// //reset password
// Route::get('/reset-password-form', function () {
//     return view('administrator/reset-password-form');
// });

// //forgot password
// Route::get('/forgot-password', function () {
//     return view('administrator/forgot-password');
// });

// //enter security code
// Route::get('/enter-security-code', function () {
//     return view('administrator/enter-security-code');
// });


//========== operator 2 ===========
// Route::get('Operator.Login.LoginPage.login', [OperatorController::class, 'index'])->name('operator.index');
Route::get('/operator/create', [OperatorController::class, 'create'])->name('operator.create');
Route::post('/operator/store', [OperatorController::class, 'store'])->name('operator.store');

Route::get('administrator/laporan_data_donasi/validasi', [OperatorController::class, 'validasi'])->name('operator.validasi');



// Route::middleware('admin')->group(function() {
//     Route::resource('panti_asuhan', PantiAsuhanController::class);
//     // get index
//     // post store
//     // get detail

//     Route::controller(ManagementPantiController::class)->group(function () {
//         Route::get('/index', 'generateFilePanti');
//         Route::get('/index', 'index');
//         Route::get('/index', 'index');
//         Route::get('/index', 'index');
//     })

//     Route::controller(ManagementDonasiController::class)->group(function () {
//         Route::get('/index', 'index');
//         Route::get('/index', 'index');
//         Route::get('/index', 'index');
//         Route::get('/index', 'index');
//     })

//     Route::controller(LandingPageController::class)->group(function () {
//         Route::get('/index', 'index');
//     })
// })

// Route::middleware('operator')->group(function() {
//     Route::controller(LandingPageController::class)->group(function () {
//         Route::get('/index', 'index');
//     })

//     Route::controller(ManagementDonasiController::class)->group(function () {
//         Route::get('/index', 'index');
//         Route::get('/index', 'index');
//         Route::get('/index', 'index');
//         Route::get('/index', 'index');
//     })
// })

// Route::middleware('pengguna')->group(function() {\
//     Route::controller(LandingPageController::class)->group(function () {
//         Route::get('/index', 'index');
//     })
// })


//---------------Route Administrator--------------- ! 

//--------Login--------

//3
// Route::get('/LoginAdministrator', function () {
//     return view('Administrator.Login.login');
// });

// Route::get('/RegisterAdministrator', function () {
//     return view('Administrator.Login.register');
// });


// //--------Dashboard--------
// Route::get('/DashboardAdmin', function () {
//     return view('Administrator.Dashboard.dashboard');
// });



//--------Manajemen Donasi--------
Route::get('/LaporanDonasiAdministrator', function () {
    return view('Administrator.ManajemenDonasi.LaporanDonasi.laporan-donasi');
})->middleware('auth');
Route::get('/ProgramDonasi', function () {
    return view('Administrator.ManajemenDonasi.ProgramDonasi.program-donasi');
})->middleware('auth');

Route::get('/ProgramDonasi', [ProgramDonasiOperatorController::class, 'adminIndex'])->name('program-donasi.admin');

Route::get('/TambahProgramDonasi', function () {
    return view('Administrator.ManajemenDonasi.ProgramDonasi.tambah-program-donasi');
});

// Route untuk menampilkan form tambah Program Donasi
Route::get('/TambahProgramDonasi', function () {
    return view('Administrator.ManajemenDonasi.ProgramDonasi.tambah-program-donasi');
})->name('program-donasi.create');

// Route untuk menyimpan Program Donasi
Route::post('/ProgramDonasi', [ProgramDonasiController::class, 'store'])->name('program-donasi.store');

// Route untuk menampilkan daftar Program Donasi
Route::get('/ProgramDonasi', [ProgramDonasiOperatorController::class, 'adminIndex'])->name('program-donasi.admin');

//--------Manajemen Panti Asuhan--------

//MapPanti
Route::get('/Map', function () {
    return view('Administrator.ManajemenPantiAsuhan.MapPanti.map-panti-operator');
})->middleware('auth');

//Detail Panti Asuhan 
Route::get('/DetailPantiAsuhan', function () {
    return view('Administrator.ManajemenPantiAsuhan.DetailPantiAsuhan.DetailPantiAsuhan');
});
Route::get('/DetailPantiAsuhan/{id}', [PantiAsuhanController::class, 'showDetail'])->name('panti_asuhan.detail');

// Route untuk menampilkan tabel panti asuhan
// Route::get('ValidasiOperator', [AdminController::class, 'validasi'])->name('admin.validasi');
// Route::get('ValidasiOperator', [OperatorController::class, 'validasi'])->name('operator.validasi');

// Route untuk aksi terima dan tolak di admin
// Route::prefix('admin')->group(function () {
//     Route::post('/validate/{id}/accept', [AdminController::class, 'acceptPanti'])->name('admin.accept');
//     Route::post('/validate/{id}/reject', [AdminController::class, 'rejectPanti'])->name('admin.reject');
// });

Route::post('admin/panti/accept/{id}', [AdminController::class, 'acceptPanti'])->name('admin.panti.accept');
Route::post('admin/panti/reject/{id}', [AdminController::class, 'rejectPanti'])->name('admin.panti.reject');

//ValidasiOperator
Route::get('ValidasiOperator', [OperatorController::class, 'validasi'])->name('operator.validasi')->middleware('auth');
Route::get('/validasi-operator', [PantiAsuhanController::class, 'validasi'])->name('validasi-operator');
Route::get('/validasi-operator', [PantiAsuhanController::class, 'validasi'])->name('validasi-operator');


//DataPantiAsuhan
//folder view panti_asuhan
Route::resource('panti_asuhan', PantiAsuhanController::class)->middleware('auth');

//folder view registrasi_panti_asuhan
Route::resource('registrasi_panti_asuhan', RegistrasiPantiAsuhanController::class);

Route::get('/Created', function () {
    return view('Administrator.ManajemenPantiAsuhan.DataPantiAsuhan.created');
});


//--------Catatan Aktivitas Operator--------
Route::get('/CatatanAktivitasOperator', function () {
    return view('Administrator.CatatanAktivitasOperator.catatan-aktivitas-operator');
})->middleware('auth');





//---------------Route Operator--------------- ! 

//--------Login--------

//Form Sandi Page
Route::get('/FormSandi', function () {
    return view('Operator.Login.FormSandiPage.operator_sandi');
});

//Forgot Page
Route::get('/ForgotPassword', function () {
    return view('Operator.Login.ForgotPage.forgot');
});

//Form Register Page
// Route::get('/FormRegisterOperator', function () {
//     return view('Operator.Login.FormRegisterPage.form');
// });

//Login Page
// Route::get('/LoginOperator', function () {
//     return view('Operator.Login.LoginPage.login');
// });


//Register Page
// Route::get('/RegisterOperator', function () {
//     return view('Operator.Login.RegisterPage.register');
// });


//Verifikasi Page

//Forgot
Route::get('/VerifikasiForgot', function () {
    return view('Operator.Login.VerifikasiPage.Forgot.verifikasi-forgot');
});

//SignUp
Route::get('/VerifikasiSignUp', function () {
    return view('Operator.Login.VerifikasiPage.Signup.verifikasi-signup');
});



//--------Dashboard--------
// Route::get('/DashboardOperator', function () {
//     return view('operator.dashboard.dashboard');
// })->name('dashboard_operator');

// Route::get('/DashboardOperatorSementara', [Operator_Controller::class, 'dashboard'])->middleware('auth:operator')->name('dashboard_operator');



//--------Manajemen Donasi--------

//Laporan Donasi
Route::get('/LaporanDonasiOperator', function () {
    return view('Operator.ManajemenDonasi.LaporanDonasi.laporan');
});


//Program Donasi

//Table Program Donasi
Route::get('/ProgramDonasiOprator', function () {
    return view('Operator.ManajemenDonasi.ProgramDonasi.TableProgramDonasi.program');
});


Route::get('/ProgramDonasiOprator', [ProgramDonasiOperatorController::class, 'index'])->name('program_donasi.operator');
Route::delete('/program-donasi/{id}', [ProgramDonasiOperatorController::class, 'destroy'])->name('program-donasi.destroy');



//Tambah Program Donasi
// Route::get('/TambahProgramDonasiOperator', function () {
//     return view('Operator.ManajemenDonasi.ProgramDonasi.TambahProgramDonasi.tambah_program');
// });

//Edit Program Donasi
Route::get('/EditProgramDonasiOperator', function () {
    return view('Operator.ManajemenDonasi.ProgramDonasi.EditProgramDonasi.editprogramdonasi');
});
Route::get('/EditProgramDonasiOperator/{id}', [ProgramDonasiController::class, 'edit'])->name('edit.program.donasi.operator');
Route::put('/UpdateProgramDonasiOperator/{id}', [ProgramDonasiController::class, 'update'])->name('update.program.donasi.operator');

Route::post('/program_donasi/store1', [ProgramDonasiController::class, 'store1'])->name('program_donasi.store1');

//--------Manajemen Panti Operator--------
// Route::get('/ManajemenPantiOperator', function () {
//     return view('Operator.ManajemenPantiOperator.manajemen-panti-operator');
// });
// Route::get('/ManajemenPantiOperator', [Operator_Controller::class, 'managementPantiOperator'])->middleware('auth:operator');



//--------Profile Akun Operator--------

//Manajemen Akun
Route::get('/ManajemenAkun', function () {
    return view('Operator.ProfileAkunOperator.Akun.manajemen_akun');
});

//Change Password
Route::get('/Sandi', function () {
    return view('Operator.ProfileAkunOperator.ChangePassword.sandi');
});

//Edit Profile
Route::get('/EditProfile', function () {
    return view('Operator.ProfileAkunOperator.Edit.edit_profile');
});


//---------GIS------------------
Route::get('/panti-asuhans', function () {
    return response()->json(PantiAsuhan::all());
});

Route::get('/search-panti-asuhan', function (Illuminate\Http\Request $request) {
    $query = $request->get('query'); // Ambil parameter "query"

    // Cari berdasarkan nama_panti_asuhan (case-insensitive)
    $results = PantiAsuhan::where('nama_panti_asuhan', 'LIKE', "%{$query}%")->get();

    return response()->json($results);
});
