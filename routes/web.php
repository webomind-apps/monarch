<?php

use App\Http\Controllers\Admin\AdvantageController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CareerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\ClinicsController;
use App\Http\Controllers\Admin\ContactUsController as AdminContactUsController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\EnquiryController;
use App\Http\Controllers\Admin\FinancialsController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\MajorServicesController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\PhotoGalleryController;
use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\Admin\PromotionController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Frontend\Appointment;
use App\Http\Controllers\Frontend\CareerFormController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\QueryController;
use App\Http\Controllers\Admin\RegistrationFormController as AdminRegistrationFormController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SmileGalleryController;
use App\Http\Controllers\Admin\WhoWeAreController;
use App\Http\Controllers\Frontend\ContactUsController;
use App\Http\Controllers\Frontend\RegistrationFormController;
use App\Models\Career;
use App\Models\Clinic;
use App\Models\Enquiry;
use App\Models\Location;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $numberOfClinics = Clinic::count();
    $clinics = Clinic::select('name')->get();
    $numberOfLocations = Location::count();
    $numberOfappointments = Enquiry::count();
    $numberOfcareersforms = Career::count();
    return view('admin.dashboard.index', compact('numberOfLocations', 'numberOfClinics', 'numberOfappointments', 'numberOfcareersforms', 'clinics'));
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';



//frontend pages routes
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/patient', [HomeController::class, 'patient'])->name('patient');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/services-details/{slug}', [HomeController::class, 'service_details'])->name('services_details');
Route::get('/services-description/{slug}', [HomeController::class, 'services_description'])->name('services_description');
Route::get('/find-location', [HomeController::class, 'find_location'])->name('find_location');
Route::get('/location/{slug}', [HomeController::class, 'detail_page'])->name('detail_page');
Route::get('/careers', [HomeController::class, 'careers'])->name('careers');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/footer', [HomeController::class, 'footer'])->name('footer');
Route::get('/map_locations', [HomeController::class, 'map_locations'])->name('map_locations');
//routes
Route::get('book-appointment', [HomeController::class, 'book_appointment'])->name('book_appointment');
Route::get('about/who-are-we', [HomeController::class, 'who_are_we'])->name('about.who_are_we');
Route::get('about/meet-the-doctors', [HomeController::class, 'meet_the_doctors'])->name('about.meet_the_doctors');
Route::get('about/photo-gallery', [HomeController::class, 'photo_gallery'])->name('about.photo_gallery');
Route::get('about/smile-gallery', [HomeController::class, 'smile_gallery'])->name('about.smile_gallery');
Route::get('patients/financials', [HomeController::class, 'financials'])->name('patients.financials');
Route::get('patients/promotions', [HomeController::class, 'promotions'])->name('patients.promotions');
Route::get('patients/registartion_form', [HomeController::class, 'registartion_form'])->name('patients.registartion_form');
Route::get('services/family-dentistry', [HomeController::class, 'family_dentistry'])->name('services.family_dentistry');
Route::get('services/orthodontics', [HomeController::class, 'orthodontics'])->name('services.orthodontics');
Route::get('services/sedation-dentistry', [HomeController::class, 'sedation_dentistry'])->name('services.sedation_dentistry');
Route::get('services/full-mouth-reconstruction', [HomeController::class, 'full_mouth_reconstruction'])->name('services.full_mouth_reconstruction');
Route::get('services/cosmetic-dentistry', [HomeController::class, 'cosmetic_dentistry'])->name('services.cosmetic_dentistry');
Route::get('services/periodontics', [HomeController::class, 'periodontics'])->name('services.periodontics');
Route::get('services/sleep-dentistry', [HomeController::class, 'sleep_dentistry'])->name('services.sleep_dentistry');
Route::get('services/family-dentistry/dental-exams-cleanings', [HomeController::class, 'dental_exams_cleanings'])->name('services.family_dentistry.dental_exams_cleanings');
Route::get('services/family-dentistry/night-athletic-mouth-guard', [HomeController::class, 'night_athletic_mouth_guard'])->name('services.family_dentistry.night_athletic_mouth_guard');
Route::get('services/family-dentistry/child-dentistry', [HomeController::class, 'child_dentistry'])->name('services.family_dentistry.child_dentistry');
Route::get('services/family-dentistry/dental-emergency', [HomeController::class, 'dental_emergency'])->name('services.family_dentistry.dental_emergency');
Route::get('services/family-dentistry/teeth-whitening', [HomeController::class, 'teeth_whitening'])->name('services.family_dentistry.teeth_whitening');
Route::get('services/family-dentistry/wisdom-teeth-extraction', [HomeController::class, 'wisdom_teeth_extraction'])->name('services.family_dentistry.wisdom_teeth_extraction');
Route::get('services/family-dentistry/root-canal', [HomeController::class, 'root_canal'])->name('services.family_dentistry.root_canal');
Route::get('services/family-dentistry/amalgam-free-filling', [HomeController::class, 'amalgam'])->name('services.family_dentistry.amalgam');
Route::get('services/family-dentistry/cosmetic-bonding', [HomeController::class, 'cosmetic_bonding'])->name('services.family_dentistry.cosmetic_bonding');
Route::get('services/family-dentistry/dental-veeners', [HomeController::class, 'dental_veener'])->name('services.family_dentistry.dental_veeners');
Route::get('services/family-dentistry/dental-crowns-caps', [HomeController::class, 'crowns_caps'])->name('services.family_dentistry.crowns_caps');
Route::get('services/family-dentistry/procelian-inlays-onlays', [HomeController::class, 'procelian'])->name('services.family_dentistry.procelian');
Route::get('services/family-dentistry/denture-treatment', [HomeController::class, 'denture'])->name('services.family_dentistry.denture');
Route::get('services/family-dentistry/bridges-and-dental-implants', [HomeController::class, 'bridges_implants'])->name('services.family_dentistry.bridges_implants');
Route::get('services/orthodontics/family-orthodontics', [HomeController::class, 'family_orthodontics'])->name('services.orthodontics.family_orthodontics');
Route::get('services/orthodontics/invisalign', [HomeController::class, 'invisalign'])->name('services.orthodontics.invisalign');
Route::get('services/sedation-dentistry/iv-sedation', [HomeController::class, 'iv_sedation'])->name('services.sedation_dentistry.iv_sedation');
Route::get('services/sedation-dentistry/laughing-gas', [HomeController::class, 'laughing_gas'])->name('services.sedation_dentistry.laughing_gas');
Route::get('blogs', [HomeController::class, 'blog'])->name('blogs');
Route::get('blog_detail/{slug}', [HomeController::class, 'blog_detail'])->name('blog_detail');

Route::get('career', [HomeController::class, 'career_page'])->name('career');
Route::post('appointment', [Appointment::class, 'store'])->name('appointment');
Route::post('career_form', [CareerFormController::class, 'store'])->name('career_form');
Route::post('contact_us', [ContactUsController::class, 'store'])->name('contact_us');
Route::post('regisration_form', [RegistrationFormController::class, 'store'])->name('regisration_form');


//admin routes
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');

    Route::group(['middleware' => ['auth','prevent-back-history']], function () {
        
        Route::resource('location', LocationController::class);
        Route::get('/destroyGalleryImage/{id}', [ClinicsController::class, 'destroyGalleryImage'])->name('destroyGalleryImage');
        Route::get('/destroyVideo/{id}', [ClinicsController::class, 'destroyVideo'])->name('destroyVideo');
        Route::resource('clinics', ClinicsController::class);
        Route::resource('services', ServicesController::class);
        Route::resource('major-services', MajorServicesController::class);
        Route::resource('plans', PlanController::class);
        Route::resource('advantages', AdvantageController::class);
        Route::resource('enquiry', EnquiryController::class);
        Route::resource('users', UserController::class);     
        Route::resource('careers', CareerController::class);
        Route::resource('query', QueryController::class);
        Route::resource('contact-us', AdminContactUsController::class);
        Route::resource('who-we-are', WhoWeAreController::class);
        Route::resource('photo-gallery', PhotoGalleryController::class);
        Route::get('/destroyPhotoImage/{id}', [PhotoGalleryController::class, 'destroyPhotoImage'])->name('destroyPhotoImage');
        Route::resource('smile-gallery', SmileGalleryController::class);
        Route::get('/destroySmileImage/{id}', [SmileGalleryController::class, 'destroySmileImage'])->name('destroySmileImage');
        Route::resource('financials', FinancialsController::class);
        Route::resource('promotions', PromotionController::class);
        Route::resource('doctors', DoctorController::class);
        Route::resource('sliders', SliderController::class);
        Route::resource('partners', PartnerController::class);
        Route::resource('registration-forms', AdminRegistrationFormController::class);
        Route::resource('blogs', BlogController::class);

    });
});
