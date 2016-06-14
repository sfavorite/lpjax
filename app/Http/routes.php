<?php
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

function is_pjax() {
    if (isset($_SERVER['HTTP_X_PJAX']) && strtolower($_SERVER['HTTP_X_PJAX']) == 'true') {
        return true;
    }

        return false;
}


Route::get('/', function() {
    $pictures = array('goldengate.jpg', 'grass.jpg', 'hiker.jpg', 'mountain.jpg', 'sunset.jpg');

    $picture = $pictures[random_int(0, 4)];

    if (is_pjax()) {
        return view('welcome')->with('picture', $picture);
;
    }
        //return redirect('/');
        return view('welcome')->with('picture', $picture);

});

/*
Route::get('/explore', function() {
    if (is_pjax()) {
        $data = '<div class="title">My App</div> <a href="/">Explore</a>';
        return $data;
    }

    return 'false';
});
*/
