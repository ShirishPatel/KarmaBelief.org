<?php

use App\Http\Controllers\AboutCounterController;
use App\Http\Controllers\AboutInquiryController;
use App\Http\Controllers\AboutTechnologieController;
use App\Http\Controllers\AiMlHomeHeroController;
use App\Http\Controllers\AiMlHomeHeroGalleryController;
use App\Http\Controllers\AiMlHomeHeroProcessController;
use App\Http\Controllers\AiMlHomeHeroTagGalleryController;
use App\Http\Controllers\AwardTestimonialsController;
use App\Http\Controllers\BlogCategoriesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CaseStudyCategoryController;
use App\Http\Controllers\CaseStudyTechnologyController;
use App\Http\Controllers\ClientStoriesController;
use App\Http\Controllers\ConfigurationController;
use App\Http\Controllers\CustomDevelopmentHomeHeroController;
use App\Http\Controllers\CustomDevelopmentProcessController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeHeroSectionController;
use App\Http\Controllers\NewsLetterController;
use App\Http\Controllers\OurProgressController;
use App\Http\Controllers\OurValueController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SmartSolutionController;
use App\Http\Controllers\SuccessController;
use App\Http\Controllers\TermPolicyController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\WhyChooseUsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::any('/blog-images-upload', [BlogController::class, 'blogImageUpload'])->name('blogImageUpload');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Admin profile Routes
    Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('profile-update/{id}', [ProfileController::class, 'profileUpdate'])->name('profile.update');
    Route::post('profile-password-update/{id}', [ProfileController::class, 'passwordUpdate'])->name('password.update');

    //Website configuration Routes
    Route::get('settings', [ConfigurationController::class, 'index'])->name('settings.index');
    Route::post('settings', [ConfigurationController::class, 'update'])->name('settings_update');

    // Testimonials Routes
    Route::resource('testimonial', TestimonialController::class);
    Route::post('testimonial/status/{id}', [TestimonialController::class, 'status'])->name('testimonial.status');
    Route::post('testimonial/poster/store', [TestimonialController::class, 'posterstore'])->name('testimonials-poster.store');

    // Blog Routes
    Route::resource('blogs', BlogController::class);
    Route::post('blogs/status/{id}', [BlogController::class, 'status'])->name('blogs.status');

    // Contact Us Routes
    Route::get('news-letter', [NewsLetterController::class, 'index'])->name('newsletter');
    Route::delete('news-letter/destroy/{id}', [NewsLetterController::class, 'destroy'])->name('contact.destroy');

    //Hero section
    Route::resource('home-hero-sections', HomeHeroSectionController::class);
    //our values
    Route::get('our-value-sections', [OurValueController::class, 'sectionIndex'])->name('our-value-sections.index');
    Route::post('our-value-sections/store', [OurValueController::class, 'sectionStore'])->name('our-value-sections.store');

    Route::resource('our-value', OurValueController::class);
    //smart solutions
    Route::get('smart-solution-sections', [SmartSolutionController::class, 'index'])->name('smart-solution-sections.index');
    Route::post('smart-solution-sections/store', [SmartSolutionController::class, 'smartstore'])->name('smart-solution-sections.store');
    Route::resource('solutions', SmartSolutionController::class);

    //whychoose us
    Route::resource('why-choose-us-list', WhyChooseUsController::class);
    Route::post('why-choose-us/store', [WhyChooseUsController::class, 'whystore'])->name('why-choose-us.store');
    Route::post('why-choose-us/button/save', [WhyChooseUsController::class, 'updateButtonData'])->name('why-choose-btn.store');

    //About Us
    Route::resource('about-technologie', AboutTechnologieController::class);

    //Mission / vision
    Route::post('mission-vission/store', [AboutCounterController::class, 'missionstore'])->name('mission-vission.missionstore');
    Route::resource('about-counter', AboutCounterController::class);

    //success
    Route::resource('success', SuccessController::class);

    //services
    Route::resource('services', ServicesController::class);

    //client-stories-section
    Route::post('client-stories/store', [ClientStoriesController::class, 'clientstore'])->name('client-stories.store');
    Route::resource('client-stories-section', ClientStoriesController::class);
    Route::put('/client-stories-section/status/{id}', [ClientStoriesController::class, 'status'])->name('client-stories-section.status');

    //our progress about us

    // routes/web.php
    Route::resource('our-progress-section', OurProgressController::class);
    Route::post('our-progress', [OurProgressController::class, 'storeOrUpdate'])->name('our-progress.store');
    Route::put('/our-progress-section/status/{id}', [OurProgressController::class, 'status'])->name('our-progress-section.status');

    //About inquiry
    Route::resource('about-inquiry', AboutInquiryController::class);
    Route::post('custom-development/inquiry/store', [AboutInquiryController::class, 'c_d_store'])->name('c_d_inquiry.store');
    Route::post('dynamic/inquiry/store', [AboutInquiryController::class, 'dynamicsStore'])->name('dynamic-inquiry.store');
    //award and
    Route::resource('award-testimonial', AwardTestimonialsController::class);

    Route::resource('blog-categories', BlogCategoriesController::class);
    Route::put('blog-category/status/{id}', [BlogCategoriesController::class, 'toggleStatus'])->name('blog-category.toggleStatus');

    //custom developmewnt
    Route::resource('c-d-home-hero', CustomDevelopmentHomeHeroController::class);
    Route::post('c-d-expertise/store', [CustomDevelopmentHomeHeroController::class, 'expertiseStore'])->name('expertise.store');
    Route::post('c-d-services/store', [CustomDevelopmentHomeHeroController::class, 'servicesStore'])->name('services.store');

    //process
    Route::resource('c-d-process', CustomDevelopmentProcessController::class);

    //ai & ml
    Route::resource('ai-ml', AiMlHomeHeroController::class);
    Route::post('ai-ml-about/store', [AiMlHomeHeroController::class, 'aboutStore'])->name('about.store');
    Route::post('ai-ml-services/store', [AiMlHomeHeroController::class, 'servicesStore'])->name('ai-ml-services.store');

    //PROCESS
    Route::resource('ai-ml-process', AiMlHomeHeroProcessController::class);

    //Gallery
    Route::resource('ai-ml-gallery', AiMlHomeHeroGalleryController::class);
    Route::resource('ai-ml-tag-gallery', AiMlHomeHeroTagGalleryController::class);

    //case studies
    Route::resource('case-studies', CaseStudyCategoryController::class);
    Route::post('case-studies/status/{id}', [CaseStudyCategoryController::class, 'status'])->name('case-studies.status');

    Route::resource('case-studies-technology', CaseStudyTechnologyController::class);
    Route::post('case-studies-technology/status/{id}', [CaseStudyTechnologyController::class, 'status'])->name('case-studies-technology.status');

    Route::resource('project', ProjectController::class);
    Route::post('project/status/{id}', [ProjectController::class, 'status'])->name('project.status');

    // Terms & Policies Routes
    Route::resource('terms-policy', TermPolicyController::class);
    Route::post('terms-policy/status/{id}', [TermPolicyController::class, 'status'])->name('terms_policy.status');


});
