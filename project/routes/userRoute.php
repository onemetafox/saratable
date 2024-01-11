<?php
use App\Http\Controllers;
use App\Http\Controllers\User\ForgotController;
use App\Http\Controllers\User\KYCController;
use App\Http\Controllers\User\MessageController;
use App\Http\Controllers\User\OTPController;
use App\Http\Controllers\User\ReferralController;
use App\Http\Controllers\User\RegisterController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\LoginController as UserLoginController;
use App\Http\Controllers\Subscription\AuthorizeController as SubAuthorizeController;
use App\Http\Controllers\Subscription\FlutterwaveController as SubFlutterwaveController;
use App\Http\Controllers\Subscription\InstamojoController as SubInstamojoController;
use App\Http\Controllers\Subscription\ManualController as AppManualController;
use App\Http\Controllers\Subscription\MollieController as SubMollieController;
use App\Http\Controllers\Subscription\PaypalController as SubPaypalController;
use App\Http\Controllers\Subscription\PaystackController;
use App\Http\Controllers\Subscription\PaytmController as SubPaytmController;
use App\Http\Controllers\Subscription\RazorpayController as SubRazorpayController;
use App\Http\Controllers\Subscription\StripeController as SubStripeController;
use App\Http\Controllers\User\BookingController;
use App\Http\Controllers\User\BookingRequestController;
use App\Http\Controllers\User\EnquiryController;
use App\Http\Controllers\User\GalleryController;
use App\Http\Controllers\User\ListingController;
use App\Http\Controllers\User\SubscriptionController;

Route::prefix('user')->group(function() {

    Route::get('/login', [UserLoginController::class,'showLoginForm'])->name('user.login');
    Route::post('/login', [UserLoginController::class,'login'])->name('user.login.submit');

    Route::get('/forgot', [ForgotController::class,'showforgotform'])->name('user.forgot');
    Route::post('/forgot', [ForgotController::class,'forgot'])->name('user.forgot.submit');

    Route::get('/otp', [OTPController::class,'showotpForm'])->name('user.otp');
    Route::post('/otp', [OTPController::class,'otp'])->name('user.otp.submit');

    Route::get('/register', [RegisterController::class,'showRegisterForm'])->name('user.register');
    Route::post('/register', [RegisterController::class,'register'])->name('user.register.submit');
    Route::get('/register/verify/{token}', [RegisterController::class,'token'])->name('user.register.token');

    Route::group(['middleware' => ['otp','banuser']],function () {

      Route::get('/dashboard', [UserController::class,'index'])->name('user.dashboard');
      Route::get('/username/{number}', [UserController::class,'username'])->name('user.username');
      Route::get('/transactions', [UserController::class,'transaction'])->name('user.transaction');

      Route::get('/2fa-security', [UserController::class,'showTwoFactorForm'])->name('user.show2faForm');
      Route::post('/createTwoFactor', [UserController::class,'createTwoFactor'])->name('user.createTwoFactor');
      Route::post('/disableTwoFactor', [UserController::class,'disableTwoFactor'])->name('user.disableTwoFactor');

      Route::get('/listing/analytics', [UserController::class,'analytics'])->name('user.listing.analytics');
      Route::get('/analytics/{id}', [UserController::class,'analyticsDetails'])->name('user.listing.analytics.details');
      Route::get('/profile', [UserController::class,'profile'])->name('user.profile.index');
      Route::post('/profile', [UserController::class,'profileupdate'])->name('user.profile.update');

      Route::get('/kyc-form', [KYCController::class,'kycform'])->name('user.kyc.form');
      Route::post('/kyc-form', [KYCController::class,'kyc'])->name('user.kyc.submit');

      Route::get('/listing/type', [ListingController::class,'type'])->name('user.listing.type');
      Route::get('/listing', [ListingController::class,'index'])->name('user.listing.index');
      Route::get('/listing/create', [ListingController::class,'create'])->name('user.listing.create');
      Route::post('/listing/store', [ListingController::class,'store'])->name('user.listing.store');
      Route::get('/listing/edit/{id}', [ListingController::class,'edit'])->name('user.listing.edit');
      Route::post('/listing/update/{id}', [ListingController::class,'update'])->name('user.listing.update');
      Route::get('/saved/listing', [ListingController::class,'saved_listing'])->name('user.saved.listing');
      Route::get('/saved/listing/{id}', [ListingController::class,'savedDelete'])->name('user.saved.listing.delete');
      Route::get('/listing/delete/{id}', [ListingController::class,'delete'])->name('user.listing.delete');

      Route::get('/gallery/show', [GalleryController::class,'show'])->name('user.gallery.show');
      Route::post('/gallery/store', [GalleryController::class,'store'])->name('user.gallery.store');
      Route::get('/gallery/delete', [GalleryController::class,'destroy'])->name('user.gallery.delete');

      Route::post('/booking/store', [BookingController::class,'store'])->name('user.booking.store');
      Route::get('/my-bookings',[BookingController::class,'myBooking'])->name('user.my.booking');

      Route::get('/hotel/request',[BookingRequestController::class,'hotel'])->name('user.booking.hotel.request');
      Route::get('/restaurant/request',[BookingRequestController::class,'restaurant'])->name('user.booking.restaurant.request');
      Route::get('/beauty/request',[BookingRequestController::class,'beauty'])->name('user.booking.beauty.request');
      Route::get('/booking/status/{id1}/{id2}', [BookingRequestController::class,'status'])->name('user.booking.status');
      Route::get('/booking/conversation/{id}',[BookingRequestController::class,'conversation'])->name('user.booking.conversation');
      Route::post('/booking/conversation/{id}', [BookingRequestController::class,'conversationStore'])->name('user.booking.conversation.store');

      Route::get('/customer-enquiry', [EnquiryController::class,'customerEnquiry'])->name('user.customer.enquiry');
      Route::get('/my-enquiry',[EnquiryController::class,'myEnquiry'])->name('user.my.enquiry');

      Route::get('/pricing-plans', [SubscriptionController::class,'index'])->name('user.pricing.plans');

      Route::group(['middleware'=>'kyc:Deposits'],function(){
        Route::get('/referrals',[ReferralController::class,'referred'])->name('user.referral.index');
        Route::get('/referral-commissions',[ReferralController::class,'commissions'])->name('user.referral.commissions');
      });

      Route::get('support-tickets', [MessageController::class,'index'])->name('user.message.index');
      Route::post('support-tickets/store', [MessageController::class,'store'])->name('user.message.store');
      Route::post('support-tickets/conversation/{id}', [MessageController::class,'conversation'])->name('user.message.conversation');
      Route::get('admin/message/{id}/delete', [MessageController::class,'adminmessagedelete'])->name('user.message.delete1');

      Route::get('/change-password', [UserController::class,'changePasswordForm'])->name('user.change.password.form');
      Route::post('/change-password', [UserController::class,'changePassword'])->name('user.change.password');

      Route::get('/package',[SubscriptionController::class,'index'])->name('user.package.index');
      Route::get('/package/subscription/{id}',[SubscriptionController::class,'subscription'])->name('user.package.subscription');

      Route::post('/subscription/stripe-submit', [SubStripeController::class,'store'])->name('subscription.stripe.submit');
      Route::get('/subscription/stripe-submit/success', [SubStripeController::class,'success'])->name('subscription.stripe.success');
      Route::post('/subscription/free', [SubscriptionController::class,'store'])->name('subscription.free.submit');

      Route::post('/subscription/paypal-submit', [SubPaypalController::class,'store'])->name('subscription.paypal.submit');
      Route::get('/subscription/paypal/deposit/notify', [SubPaypalController::class,'notify'])->name('subscription.paypal.notify');
      Route::get('/subscription/paypal/deposit/cancel', [SubPaypalController::class,'cancel'])->name('subscription.paypal.cancel');

      Route::post('/subscription/instamojo-submit',[SubInstamojoController::class,'store'])->name('subscription.instamojo.submit');
      Route::get('/subscription/instamojo-notify',[SubInstamojoController::class,'notify'])->name('subscription.instamojo.notify');

      Route::post('/subscription/paytm-submit', [SubPaytmController::class,'store'])->name('subscription.paytm.submit');
      Route::post('/subscription/paytm-callback', [SubPaytmController::class,'paytmCallback'])->name('subscription.paytm.notify');

      Route::post('/subscription/razorpay-submit', [SubRazorpayController::class,'store'])->name('subscription.razorpay.submit');
      Route::post('/subscription/razorpay-notify', [SubRazorpayController::class,'notify'])->name('subscription.razorpay.notify');

      Route::post('/subscription/molly-submit', [SubMollieController::class,'store'])->name('subscription.molly.submit');
      Route::get('/subscription/molly-notify', [SubMollieController::class,'notify'])->name('subscription.molly.notify');

      Route::post('/subscription/flutter/submit', [SubFlutterwaveController::class,'store'])->name('subscription.flutter.submit');
      Route::post('/subscription/flutter/notify', [SubFlutterwaveController::class,'notify'])->name('subscription.flutter.notify');

      Route::post('/subscription/paystack/submit', [PaystackController::class,'store'])->name('subscription.paystack.submit');
      Route::post('/subscription/authorize-submit', [SubAuthorizeController::class,'store'])->name('subscription.authorize.submit');
      Route::post('/subscription/manual-submit', [AppManualController::class,'store'])->name('subscription.manual.submit');

      Route::get('/affilate/code', [UserController::class,'affilate_code'])->name('user-affilate-code');

      Route::get('/notf/show', 'User\NotificationController@user_notf_show')->name('customer-notf-show');
      Route::get('/notf/count','User\NotificationController@user_notf_count')->name('customer-notf-count');
      Route::get('/notf/clear','User\NotificationController@user_notf_clear')->name('customer-notf-clear');

    });

    Route::get('/logout', [UserLoginController::class,'logout'])->name('user.logout');

  });
