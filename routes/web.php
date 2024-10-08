<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use App\Http\Controllers\BlogController;

Route::get('/clear-config-cache', function () {
	$exitCode = Artisan::call('config:cache');
	return 'Configuration cache cleared!';
});

Route::get('/', function () {
	return view('new_home');
});
Route::get('/events', function () {
	return view('new_events');
});
Route::get('/features', function () {
	return view('new_features');
});
Route::get('/blog', 'BlogViewController@index')->name('blog.index');

Route::get('/blog/{slug}', 'BlogViewController@show')->name('blog.show');

Route::get('/all/blog', 'BlogViewController@showall')->name('blog.all');

Route::get('/blogs/search', 'BlogViewController@search')->name('blogs.search');

Route::get('/blog/capturing-the-moment-that-matter-click-invitations-event-photographer', function () {
	return view('new_bloginner3');
});
// Route::get('/', function () { return view('home'); });
Route::get('/about', function () {
	return view('new_about');
});

Route::get('/sm', 'TwilioController@sendmsg');
Route::get('/testmail', 'PanelController@testmail');

// Route::get('/privacy-policy', function () {
// 	return view('privacy-policy');
// });
Route::get('/terms-of-use', function () {
	// return view('new_privacypolicy');
	return redirect('/privacy-policy');
});
Route::get('/contact', function () {
	return view('new_contact');
});
Route::get('/tutorial', function () {
	return view('new_tutorial');
});
Route::get('/website/{idevent}', 'WebsiteController@index');
Route::get('/web', 'PanelController@ip');
Route::post('/api/web', 'WebsiteController@apiWeb');

Route::get('/sendInvite-email', 'PanelController@sendEmail');
Route::get('/sendInvite-whatsapp', 'PanelController@sendWhatsapp');
Route::get('/sendInvite-sms', 'PanelController@sendSMS');
Route::get('/testmail', 'PanelController@sendtestEmail');

Route::post('/sendcontact', 'AuthController@sendcontact');
Route::get('/sendcontact', 'AuthController@sendcontact');

Route::get('/attending/{cardId}/{guestcode}/{lang}', 'OperationController@attending');
Route::get('/gift-suggestion/{cardId}/{guestcode}/{lang}', 'OperationController@giftsuggestion');
Route::get('/check-in/{cardId}/{guestcode}/{lang}', 'OperationController@checkin');
Route::get('/add-photos/{cardId}/{guestcode}/{lang}', 'OperationController@addphotos');
Route::get('/add-photos-all/{id}', 'OperationController@addphotosall');
Route::get('/add-photos/ack/{cardId}/{guestcode}/{lang}', 'OperationController@addphotosack');
Route::get('/sorry-cant/{cardId}/{guestcode}/{lang}', 'OperationController@sorrycant');
Route::get('/show-gifts/{cardId}/{guestcode}/{lang}', 'OperationController@showgifts');


Route::get('/mail-invitation/{idguest}/{idevent}', 'PanelController@mailinvitation');
Route::get('/mail-acknowledgment/{idguest}/{idevent}', 'PanelController@mailacknowledgment');
Route::get('/mail-messaging/{idguest}/{idevent}', 'PanelController@mailmessaging');

Route::post('/test-invitation', 'OperationController@testinvitation');
Route::post('/test-acknowledgment', 'OperationController@testacknowledgment');
Route::post('/test-messaging', 'OperationController@testmessaging');
Route::post('/show-opgifts', 'GiftController@showopgifts');
Route::post('/pick-gift', 'GiftController@pickgift');

Route::post('/send-acknowledgement-email', 'AcknowledgementController@sendacknowledgementemail');
Route::post('/send-acknowledgement-sms', 'AcknowledgementController@sendacknowledgementsms');
Route::post('/send-acknowledgement-whatsapp', 'AcknowledgementController@sendacknowledgementwhatsapp');

Route::post('/send-messaging-email', 'MessagingController@sendmessagingemail');
Route::post('/send-messaging-sms', 'MessagingController@sendmessagingsms');
Route::post('/send-messaging-whatsapp', 'MessagingController@sendmessagingwhatsapp');


Route::post('/show-event', 'PanelController@showevent');
Route::post('/save-images', 'PanelController@saveimages')->name('save.images');
Route::post('/save-videos', 'PanelController@savevideos')->name('save.videos');
Route::post('/photos-qrCode/{id}', 'PanelController@photosqr')->name('photos.qrCode');
Route::post('/save-videogallery', 'PanelController@savevideogallery')->name('save.videogallery');
Route::post('/decline', 'PanelController@decline');
Route::post('/show-opguests', 'GuestController@showopguests');
Route::post('/change-check', 'GuestController@changecheck');
Route::get('/guest-checked/{cardID}/{guestCode}/{lang}', 'GuestController@guestcheck');
Route::post('/show-meals', 'MealController@showmeals');
Route::post('/edit-opguest', 'GuestController@editopguest');
Route::post('/confirm-guest', 'GuestController@confirmGuest');
Route::post('/guest-decline', 'GuestController@GuestDecline');
Route::get('/get-guest', 'GuestController@getGuest');
Route::post('/GuestEdit/{id}', 'GuestController@guestedit')->name('attending.edit');
Route::post('/get-table', 'TableController@getTables');
Route::get('/get-seats', 'TableController@getSeats');
Route::get('/save-seats', 'TableController@saveSeats');
Route::get('/CheckInQr/{cId}/{gCode}/{lang}', 'GuestController@CheckInQr');
Route::post('/guestCanSelectSeats', 'PanelController@guestCanSelectSeats');


Route::post('/my-members', 'GuestController@mymembers');
Route::post('/my-group', 'GuestController@mygroup');
Route::post('/del-member-attending', 'GuestController@delmemberattending');
Route::post('/new-guest', 'GuestController@newguest');
Route::post('/opened-answered', 'GuestController@openedanswered');


Route::get('/cardInvitation/{id}/{guestCode}', 'PanelController@cardInvite');
Route::get('/cardInvitation/{id}/{guestCode}/{lang}', 'PanelController@cardInviteLang');
Route::get('/cardInvitation/{id}/{guestCode}/{name}/{lang}', 'PanelController@cardInviteLangName');
Route::get('/cardInvitations/{id}/{guestCode}/{name}/{lang}', 'PanelController@cardInviteLangNameNew');
Route::get('/cardPreview/{data}', 'PanelController@cardPreview');
Route::get('/cardPreviewNew/{id}', 'PanelController@cardPreviewNew');
Route::get('/babyShowerPreview/{id}', 'PanelController@babyShowerPreview');
Route::get('/cakeCardPreview/{id}', 'PanelController@cakeCardPreview');

Route::post('/save-options', 'PanelController@saveOptions')->name('save.options');


Route::get('/get-csrf-token', 'PanelController@getCSRFToken');

Route::get('/event/get-card/{event_id}', 'PanelController@getCard');
Route::get('/get-templates/{id}', 'PanelController@getTemplates');
Route::get('/get-template/{id}', 'PanelController@getTemplateWithId');
Route::post('/save-blob', 'PanelController@saveBlob');
Route::post('/save-blob/back', 'PanelController@saveBlobBack');
Route::get('/get-json', 'PanelController@getJson');
Route::get('/get-json/back', 'PanelController@getJsonBack');
Route::post('/setting-submit', 'PanelController@SaveSetting');
Route::post('/upload-stamp', 'PanelController@uploadStamp'); 
Route::post('/toggle-two-sided', 'PanelController@toggleTwoSided'); 

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);
Route::get('langPanel/{lang}', ['as' => 'lang.switchPanel', 'uses' => 'LanguageController@switchLangPanel']);

Route::get('testPrint', 'TableController@printCard');
Route::get('testPrint/{data}', 'TableController@printCard2');

Route::post('/upload-image', 'PanelController@uploadImg');

Route::group(['middleware' => 'auth'], function () {
	//Route::get('/panel', function () { return view('panel.panel'); })->name('panel');
	Route::get('/panel', 'PanelController@openPanel')->name('panel');
	Route::get('/profile', function () {
		return view('panel.profile');
	})->name('profile');
	Route::get('/guest-list', function () {
		return view('panel.guestlist');
	})->name('guest-list');

	Route::get('/translate/{page}', 'PanelController@translatePage')->name('event');
	Route::get('/event/{idevent}/{other?}/{lang?}', 'PanelController@page')->name('event');


	//-----------------------------------------------------------
	//new route added for animaiton
	//Route::get('/event/card/{cardId}', 'PanelController@animation')->name('event');

	Route::post('/event/card', 'PanelController@postCard');
	//-----------------------------------------------------------

	Route::post('/my-profile', 'AuthController@myprofile');
	Route::post('/update-profile', 'AuthController@updateprofile');

	Route::post('/new-event', 'PanelController@newevent');
	Route::post('/edit-event', 'PanelController@editevent');
	Route::post('/edit-eventmail', 'PanelController@editeventmail');
	Route::post('/edit-plan', 'PanelController@editplan');
	Route::post('/del-event', 'PanelController@delevent');
	Route::post('/myevents', 'PanelController@myevents');
	Route::post('/pay', 'PanelController@pay');
	Route::post('/pay-datas', 'PanelController@paydatas');
	Route::post('/pay-check', 'PanelController@paycheck');
	Route::get('/get-animations', 'PanelController@getAnimations');
	Route::post('/animation-save', 'PanelController@saveAnimation');
	Route::post('/send-meal-invitations', 'PanelController@sendMealInvitations');

	Route::post('/show-images', 'PanelController@showimages');

	Route::post('/del-photogallery', 'PanelController@delphotogallery');
	Route::post('/del-videogallery', 'PanelController@delvideogallery');

	Route::post('/send-invitations', 'TwilioController@sendinvitations');

	Route::post('/new-meal', 'MealController@newmeal');
	Route::post('/edit-meal', 'MealController@editmeal');
	Route::post('/del-meal', 'MealController@delmeal');


	Route::post('/new-table', 'TableController@newtable');
	Route::post('/edit-table', 'TableController@edittable');
	Route::post('/add-seats-table', 'TableController@addSeats');
	Route::post('/del-table', 'TableController@deltable');
	Route::post('/show-tables', 'TableController@showtables');
	Route::post('/set-tables', 'TableController@settables');
	Route::post('//set-guest-seat', 'TableController@settablesseat');
	Route::get('/print-table/{idevent}', 'TableController@print');
	Route::post('/remove-guest', 'TableController@removeGuest');

	Route::post('/new-gift', 'GiftController@newgift');
	Route::post('/edit-gift', 'GiftController@editgift');
	Route::post('/del-gift', 'GiftController@delgift');
	Route::post('/show-gifts', 'GiftController@showgifts');
	Route::post('/save-transfer', 'GiftController@savetransfer');



	Route::post('/edit-guest', 'GuestController@editguest');
	Route::post('/del-guest', 'GuestController@delguest');
	Route::post('/del-guest-for-admin', 'GuestController@delguestforadmin');
	Route::post('/decline-guest', 'GuestController@declineguest');
	Route::post('/undecline-guest', 'GuestController@undeclineguest');
	Route::post('/show-guests', 'GuestController@showguests');
	Route::get('/get-guests-qr/{id}/{date}', 'GuestController@getguestsqr');
	Route::post('/show-guests-declined', 'GuestController@showguestsDeclined');
	Route::post('/show-guests-checked-in', 'GuestController@showguestsCheckedIn');
	Route::post('/show-guests-a-to-z', 'GuestController@showguestsAtoZ');
	Route::post('/show-guests-z-to-a', 'GuestController@showguestsZtoA');
	Route::post('/show-guests-attending', 'GuestController@showguestsAttending');
	Route::post('/show-guests-notconfirm', 'GuestController@showguestsNotConfim');
	Route::post('/show-guests-notopen', 'GuestController@showguestsNotOpen');
	Route::post('/show-guests-opened', 'GuestController@showguestsOpened');
	Route::post('/show-guests-for-admin', 'GuestController@showguestsforadmin');
	Route::post('/all-guests', 'GuestController@allguests');
	Route::post('/all-guests-not-nested', 'GuestController@allguestsnotnested');
	Route::post('/importfoe', 'GuestController@importfromoe');
	Route::post('/importfcsv', 'GuestController@importfromcsv');






	/*
	   |--------------------------------------------------------------------------
	   | ADMIN
	   |--------------------------------------------------------------------------
	   |
	   */

	// Route::get('/admin', function () { return view('admin.admin'); })->name('admin');
	//Route::get('/admin/login', function () { return "fadsf"; });
	// Route::get('/admin/events', function () { return view('admin.events'); })->name('adminevents');
	// Route::get('/admin/guest-list', function () { return view('admin.guestlist'); })->name('adminguestlist');
	// Route::get('/admin/codes', function () { return view('admin.codes'); })->name('administration');
	// Route::get('/admin/prices', function () { return view('admin.prices'); })->name('administration');

	// Route::post('/all-profiles', 'AdminController@allprofiles');
	// Route::post('/my-prices', 'AdminController@myprices');
	// Route::post('/save-prices', 'AdminController@saveprices');

	// Route::post('/mycodes', 'AdminController@mycodes');
	// Route::post('/del-code', 'AdminController@delcode');
	// Route::post('/new-code', 'AdminController@newcode');

	// Route::get('/admin/translation', 'AdminController@translation');

	Route::post('website/image/store', 'WebsiteMakeController@storeWebsite')->name('image.store');

	Route::post('counter/store', 'WebsiteMakeController@storeCounter')->name('counter.store');

	Route::post('/saveWebsite', 'WebsiteMakeController@saveWebsite')->name('website.save');
	Route::post('/updateWebsite', 'WebsiteMakeController@updateWebsite')->name('website.update');


	Route::post('/web-new/add-new', 'WebsiteController@saveWebComponent');
	Route::get('/web-new/get/{event_id}', 'WebsiteController@getWebComponent');
	Route::post('/web-new/update', 'WebsiteController@updateWebComponent');
	Route::get('/web-new/delete/{event_id}/{componentID}', 'WebsiteController@deleteWebComponent');
	Route::post('/web-new/upload-image-details', 'WebsiteController@uploadImages');
	Route::post('/web-new/upload-image-details2', 'WebsiteController@uploadImages2');
});

Route::get('/events/{id}/show-gallery', 'WebsiteController@showGallery');
Route::get('/getWebsite', 'WebsiteMakeController@getWebsite')->name('website.get');
Route::post('/events/{id}/uploadImage', 'WebsiteMakeController@uploadImage')->name('image.upload');


//AUTENTICAZIONE E REGISTRAZIONE
Route::get('/register', function () {
	return view('auth.new_register');
});
Route::get('/login', function () {
	return view('auth.new_login');
});
Route::get('/reset', function () {
	return view('auth.reset');
});
Route::get('/success', function () {
	return view('auth.success');
});
Route::get('/confirm/{code}', 'AuthController@confirm');
Route::get('/new-password/{code}', function () {
	return view('auth.newpassword');
});
Route::get('/privacy', function () {
	return view('new_privacypolicy');
});
Route::get('/privacy-policy', function () {
	return view('new_privacypolicy');
});

Route::post('/login', 'AuthController@dologin');
Route::post('/recoverp', 'AuthController@dorecover');
Route::post('/changep', 'AuthController@dochangep');
Route::post('/register', 'AuthController@register');
Route::post('/editpassword', 'AuthController@editpassword');
Route::post('/logout', 'AuthController@doLogout');


//TUTTE LE ALTRE ROUTES PORTANO ALLA HOME
// Route::get('{slug?}', function () {
// 	return redirect('/');
// })->where('slug', '.+');
