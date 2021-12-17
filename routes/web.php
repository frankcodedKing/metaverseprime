<?php

use App\Mail\Adminmail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('testemail', function () {
    return new Adminmail ;
});

Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\VisitorController::class, 'index'])->name('index');
Route::get('/about', [App\Http\Controllers\VisitorController::class, 'about'])->name('about');
Route::get('/invest', [App\Http\Controllers\VisitorController::class, 'invest'])->name('invest');
Route::get('/affiliate', [App\Http\Controllers\VisitorController::class, 'affiliate'])->name('affiliate');
Route::get('/viewnews', [App\Http\Controllers\VisitorController::class, 'news'])->name('news');
Route::get('/faq', [App\Http\Controllers\VisitorController::class, 'faq'])->name('faq');
Route::get('/contact', [App\Http\Controllers\VisitorController::class, 'contact'])->name('contact');
Route::get('/terms', [App\Http\Controllers\VisitorController::class, 'terms'])->name('terms');
Route::get('/postcontact', [App\Http\Controllers\VisitorController::class, 'postcontact'])->name('postcontact');
Auth::routes();


//ADMIN
Route::get('/nanoadmin', [App\Http\Controllers\adminController::class, 'adminindex'])->name('adminindex');
Route::get('/pages', [App\Http\Controllers\adminController::class, 'pages'])->name('pages');
Route::get('/users', [App\Http\Controllers\adminController::class, 'users'])->name('users');
Route::get('/pendingwithdrawals', [App\Http\Controllers\adminController::class, 'pendingwithdrawals'])->name('pendingwithdrawals');
Route::get('/approvedwithdrawals', [App\Http\Controllers\adminController::class, 'approvedwithdrawals'])->name('approvedwithdrawals');
Route::get('/approveddeposits', [App\Http\Controllers\adminController::class, 'approveddeposits'])->name('approveddeposits');
Route::get('/pendingdeposits', [App\Http\Controllers\adminController::class, 'pendingdeposits'])->name('pendingdeposits');
Route::get('/runninginvestments', [App\Http\Controllers\adminController::class, 'runninginvestments'])->name('runninginvestments');
Route::post('/post_referral_setting', [App\Http\Controllers\adminController::class, 'post_referral_setting'])->name('post_referral_setting');
Route::get('/refsetting', [App\Http\Controllers\adminController::class, 'refsetting'])->name('refsetting');


// email and top earners routes

Route::get('/viewuser/{id}', [App\Http\Controllers\adminController::class, 'viewuser'])->name('viewuser');

Route::get('/emailmgt', [App\Http\Controllers\adminController::class, 'emailmgt'])->name('emailmgt');


Route::get('/sendemail', [App\Http\Controllers\adminController::class, 'sendbulkemail'])->name('sendbulkemail');


Route::get('/sendemail/{id}', [App\Http\Controllers\adminController::class, 'sendemail'])->name('sendemail');


Route::post('/sendmail', [App\Http\Controllers\adminController::class, 'sendmail'])->name('sendmail');



//referals
Route::get('/viewuserreferrals{id}', [App\Http\Controllers\adminController::class, 'viewuserreferrals'])->name('viewuserreferrals');

Route::get('/referrals', [App\Http\Controllers\adminController::class, 'referrals'])->name('referrals');
Route::get('/payreferral', [App\Http\Controllers\adminController::class, 'payreferral'])->name('payreferral');

Route::get('/delreferral', [App\Http\Controllers\adminController::class, 'delreferral'])->name('delreferral');



Route::get('/investmentplans', [App\Http\Controllers\adminController::class, 'investmentplans'])->name('investmentplans');



//routes to preven error
Route::get('/savecompanydetails', [App\Http\Controllers\adminController::class, 'pages'])->name('savecompanydetaills');
Route::get('/savecompanyabout', [App\Http\Controllers\adminController::class, 'pages'])->name('savecompanyabout');
Route::get('/savecompanyfaq', [App\Http\Controllers\adminController::class, 'pages'])->name('savecompanyfaq');

Route::get('/savenews', [App\Http\Controllers\adminController::class, 'pages'])->name('savenews');



//admin post request
Route::post('/savecompanydetails', [App\Http\Controllers\adminController::class, 'savecompanydetails'])->name('savecompanydetails');
Route::post('/savecompanyabout', [App\Http\Controllers\adminController::class, 'savecompanyabout'])->name('savecompanyabout');

//faqs delete and edit
// Route::get('/viewnews', [App\Http\Controllers\adminController::class, 'viewnews'])->name('viewnews');
Route::get('/viewfaqs', [App\Http\Controllers\adminController::class, 'viewfaqs'])->name('viewfaqs');
Route::post('/editfaqs', [App\Http\Controllers\adminController::class, 'editfaqs'])->name('editfaqs');
Route::get('/deletefaqs{id}', [App\Http\Controllers\adminController::class, 'deletefaqs'])->name('deletefaqs');
Route::post('/savecompanyfaq', [App\Http\Controllers\adminController::class, 'savecompanyfaq'])->name('savecompanyfaq');

Route::get('/admingetrdelete/{id}', [App\Http\Controllers\adminController::class, 'adminuserdelete'])->name('adminuserdelete');
Route::get('/admingetlock/{id}', [App\Http\Controllers\adminController::class, 'adminunblock'])->name('adminunblock');
Route::get('/admingetck/{id}', [App\Http\Controllers\adminController::class, 'adminblock'])->name('adminblock');


// admin edit user name etc


Route::get('/approve_deposit{id}', [App\Http\Controllers\adminController::class, 'approve_deposit'])->name('approve_deposit');


Route::post('/updateuser', [App\Http\Controllers\adminController::class, 'updateuser'])->name('updateuser');
Route::post('/depositupdate', [App\Http\Controllers\adminController::class, 'depositupdate'])->name('depositupdate');
Route::get('/deletedeposit/{id}', [App\Http\Controllers\adminController::class, 'deletedeposit'])->name('deletedeposit');
Route::post('/adddeposit', [App\Http\Controllers\adminController::class, 'adddeposit'])->name('adddeposit');
Route::post('/editwithdrawal', [App\Http\Controllers\adminController::class, 'editwithdrawal'])->name('editwithdrawal');
Route::post('/deletewithdrawal/{id}', [App\Http\Controllers\adminController::class, 'deletewithdrawal'])->name('deletewithdrawal');
Route::post('/addwithdrawal', [App\Http\Controllers\adminController::class, 'addwithdrawal'])->name('addwithdrawal');
Route::get('/markwithdrawalpaid', [App\Http\Controllers\adminController::class, 'markwithdrawalpaid'])->name('markwithdrawalpaid');



Route::post('/editinvestment', [App\Http\Controllers\adminController::class, 'editinvestment'])->name('editinvestment');
Route::post('/deleteinvestment/{id}', [App\Http\Controllers\adminController::class, 'deleteinvestment'])->name('deleteinvestment');

Route::get('/deleteinvestmentplan/{id}', [App\Http\Controllers\adminController::class, 'deleteinvestmentplan'])->name('deleteinvestmentplan');
Route::post('/editinvestmentplan/{id}', [App\Http\Controllers\adminController::class, 'editinvestmentplan'])->name('editinvestmentplan');
Route::post('/createinvestmentplan', [App\Http\Controllers\adminController::class, 'createinvestmentplan'])->name('createinvestmentplan');


// newssection
Route::post('/savenews', [App\Http\Controllers\adminController::class, 'savenews'])->name('savenews');
Route::get('/news', [App\Http\Controllers\adminController::class, 'news'])->name('news');

Route::post('/editnews', [App\Http\Controllers\adminController::class, 'editnews'])->name('editnews');
Route::get('/deletenews/{id}', [App\Http\Controllers\adminController::class, 'deletenews'])->name('deletenews');


//top earners
Route::get('/topearners', [App\Http\Controllers\adminController::class, 'topearners'])->name('topearners');
Route::get('/deltopearners{id}', [App\Http\Controllers\adminController::class, 'deltopearners'])->name('deltopearners');
Route::get('/addtopearners{id}', [App\Http\Controllers\adminController::class, 'addtopearners'])->name('addtopearners');

//payment settings
Route::get('/payments_settings', [App\Http\Controllers\adminController::class, 'payments_settings'])->name('payments_settings');
Route::post('/post_payments_settings', [App\Http\Controllers\adminController::class, 'post_payments_settings'])->name('post_payments_settings');



//user dashboard starts
Route::get('/userdashb', [App\Http\Controllers\Userdashcontroller::class, 'userdashb'])->name('userdashb');
Route::get('/userdash_pending_deposit', [App\Http\Controllers\Userdashcontroller::class, 'userdash_pending_deposit'])->name('userdash_pending_deposit');
Route::get('/userdash_approved_deposit', [App\Http\Controllers\Userdashcontroller::class, 'userdash_approved_deposit'])->name('userdash_approved_deposit');
Route::get('/userdash_pedinging_withdrawal', [App\Http\Controllers\Userdashcontroller::class, 'userdash_pedinging_withdrawal'])->name('userdash_pedinging_withdrawal');
Route::get('/userdashb_approved_withdrawal', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_approved_withdrawal'])->name('userdashb_approved_withdrawal');

Route::get('/userdashb_investment_plans', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_investment_plans'])->name('userdashb_investment_plans');
Route::get('/userdashb_current_investment', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_current_investment'])->name('userdashb_current_investment');
Route::get('/userdashb_expected_profit', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_expected_profit'])->name('userdashb_expected_profit');
Route::get('/userdashb_investment_history', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_investment_history'])->name('userdashb_investment_history');


Route::get('/userdashb_referrals', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_referrals'])->name('userdashb_referrals');
Route::get('/userdashb_active_referrals', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_active_referrals'])->name('userdashb_active_referrals');
Route::get('/userdashb_inactive_referrals', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_inactive_referrals'])->name('userdashb_inactive_referrals');



Route::get('/userdashb_account_summary', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_account_summary'])->name('userdashb_account_summary');


Route::get('/userdashb_top_earners', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_top_earners'])->name('userdashb_top_earners');



Route::get('/userdashb_deposit', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_deposit'])->name('userdashb_deposit');
Route::get('/userdashb_withdrawal', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_withdrawal'])->name('userdashb_withdrawal');


Route::get('/userdashb_profile', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_profile'])->name('userdashb_profile');
Route::get('/userdashb_wallet_address', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_wallet_address'])->name('userdashb_wallet_address');
Route::get('/userdashb_message', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_message'])->name('userdashb_message');
Route::get('/userdashb_notification', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_notification'])->name('userdashb_notification');

//plan processing
Route::post('/userdashb_plan', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_plan'])->name('userdashb_plan');

Route::post('/userdashb_withdrawal_post', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_withdrawal_post'])->name('userdashb_withdrawal_post');

//profile
Route::post('/userdashb_personal_detail', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_personal_detail'])->name('userdashb_personal_detail');

Route::post('/userdashb_personal_address', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_personal_address'])->name('userdashb_personal_address');

Route::post('/userdashb_social_media', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_social_media'])->name('userdashb_social_media');

Route::get ('/userdashb_message_detail', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_message_detail'])->name('userdashb_message_detail');

Route::get ('/userdashb_notification', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_notification'])->name('userdashb_notification');

Route::get ('/userdashb_notification_detail', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_notification_detail'])->name('userdashb_notification_detail');

Route::get ('/userdashb_password_reset', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_password_reset'])->name('userdashb_password_reset');

Route::get ('/userdashb_password_reset_save', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_password_reset_save'])->name('userdashb_password_reset_save');

Route::post ('/userdashb_deposit_request', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_deposit_request'])->name('userdashb_deposit_request');

//profile pic upload
Route::post ('/userdashb_profile_pic', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_profile_pic'])->name('userdashb_profile_pic');

Route::get ('/userdashb_charts', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_charts'])->name('userdashb_charts');

Route::get ('/userdashb_map', [App\Http\Controllers\Userdashcontroller::class, 'userdashb_map'])->name('userdashb_map');
