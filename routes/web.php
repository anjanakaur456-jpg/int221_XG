<?php

use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return view('home');                         
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/student', function () {
    return view('student');
});


//ROUTE PARAMETERS
Route::get('/hello/{name}/{age}', function ($name, $age) {
    return "Hello " . $name . ", you are " . $age . " years old.";
});

//PASSING DATA TO THE VIEW IN LARAVEL
Route::get('/user', function () {
    return view('user')->with('name', 'Radhe Radhe');
});

//route parameter with view using array
Route::get('/user', function () {
    return view('user', ['name' => 'LPU', 'age' => 22]);
});

//HEADER IN LARAVEL
Route::get('/test', function () {
    return response("Hello")->header('X-Header', 'MyValue');
});

//set cookie
Route::get('/setcookie', function () {
    return response("Cookie Set")->cookie('name', 'Radhe Radhe');
});

//get cookie
Route::get('/getcookie', function () {
    return request()->cookie('name');
});

//json response
Route::get('/user', function () {
    return response()->json([
        'name' => 'Radha',
        'age' => 23
    ]);
 });





//redirect controller actions
// return redirect()->action([UserController::class, 'index');
//form
// public function store()
// {
//     // save data

//     return redirect('/home');
// }

//redirect()
Route::get('/first', function () {
    return redirect('/second');
    
});

Route::get('/second', function () {
    return "You are on second page";
});

//CREATE A PROGRAM USING LARAVEL TO PRINT THE MESSAGE “STUDENT REGISTERED SUCCESSFULLY IN EDUREV”. 
//IN THIS ROUTE NAME: /edurev
//Display student name: your name + student reg. no. via passing parameters in URL

//ROUTE PARAMETERS
Route::get('/edurev/{name}/{regno}', function ($name, $regno) {
    return "student " . $name . ", reg. no. " . $regno . " registered successfully in edurev.";
});

//Redirecting to Controller Actions


// use Illuminate\Http\Request;

// class HomeController extends Controller
// {
//     public function index()
//     {
//         return "Welcome to Home Controller";
//     }
// }

//use App\Http\Controllers\HomeController;

// Route::get('/test1', function () {
//     return redirect()->action([HomeController::class, 'index']);
// });



use App\Http\Controllers\productController;
Route::get("admin/product", [productController::class, 'index']);
Route::get("admin/about", [productController::class, 'about']);

use App\Http\Controllers\AboutController;
Route::get("lpu/about", [AboutController::class, 'store']);
Route::get("lpu/update", [AboutController::class, 'update']);

use App\Http\Controllers\contactController;
Route::get("lpu/contact", [contactController::class, 'contact']);   

use App\Http\Controllers\HomeController;
Route::get('/', [HomeController::class, 'index']);


// //named route(recheck)
// Route::get("/home", function () {
//     return redirect()->route("/home");
// });

// Laravel Redirections using name route

Route::get('/home', function () {
    return "Home Page";
})->name('home');

//controller middleware
//Route::get("/",[HomeController::class,"index"])->middleware(check);

//checkuserrole middleware
use App\Http\Middleware\CheckUserRole;
Route::get('/admin', function () {    
    return "Admin Panel";
    })->middleware(CheckUserRole::class);

//agecheck middleware
use App\Http\Middleware\ageCheck;
Route::get('/agecheck', function () {
    return "Age Check Passed";
})->middleware(ageCheck::class);

//admitcard middleware
// use App\Http\Middleware\admitcard;
// Route::get("file2",function(){
//     return "Now you Can Enter in Exam Hall";
// })->middleware(admitcard::class);

// Route::get("file3",function(){
//     return "Third Home Page";
// })->middleware("checkdata");

use App\Http\Controllers\PRODUCT;   
Route::resource('/products/all', PRODUCT::class);   

Route::get('/products/create',[PRODUCT::class, 'create']);
Route::get('/products/edit/{id}',[PRODUCT::class, 'edit']);
Route::get('/products/store',[PRODUCT::class, 'store']);
Route::get('/products/update/{id}',[PRODUCT::class, 'update']);
Route::get('/products/destroy/{id}',[PRODUCT::class, 'destroy']);
Route::get('/products/show/{id}',[PRODUCT::class, 'show']);

//blade template example+php output+js+css
Route::get('/b', function () {
    return view('b');
});

//template inheritance using blade+extending layout+yield+section
Route::get('/hom1', function () {
    return view('hom');
});

//parameter constraints of numbers only via pattern matching
Route::get('/add/{n1}/{n2}',function($n1,$n2){
return "sum of two numbers: ".$n1+$n2;
})->where('n1','[0-9]+');

//parameter constraints
Route::get('/ad/{s1}/{s2}',function($s1,$s2){
return "concatenation of two strings: ". $s1.$s2;
})->where('s1','[A-Za-z]+')->where('s2','[A-Za-z]+');

//Alphabets Only
Route::get('/name/{name}', function ($name) { 
return $name;
})->where('name', '[A-Za-z]+');


//secure route
use App\Http\Middleware\CheckAuth;
Route::get('/dashboard', function () {
    return "Secure Page";
})->middleware(CheckAuth::class);


//secure multiple routes+group middleware
Route::get('/login', function () {
return 'Please log in first.';
})->name('login');

Route::middleware('auth')->group(function () {
Route::get('/home', fn () => 'Home');
Route::get('/dashboard', fn () => 'Secure Page');
});

//prefix route + group route
Route::prefix("admin")->group(function()
{
    Route::get("/dashboard",function(){
        return "dashboard";
    });
    Route::get("/profile",function(){
        return "profile";
    });
});

//domain route
 //1. Fixed Domain
Route::domain('admin.lvh.me')->group(function () {
    Route::get('/admin', function () {       
    return "Admin Panel";
    });
});
 //2. Dynamic Subdomain
Route::domain('{user}.lvh.me')->group(function () {    
Route::get('/user/{user}', function ($user) {       
return "Hello " . $user;
    });
});

//URL Generation-Current URL
Route::get('/test', function () {
        return url()->current();
        });

 //Full URL (with query)
Route::get('/testurl', function () {
        return url()->full();
        });

// 3. Using Request
Route::get('/testrequest', function () {
        return request()->url();
        });


