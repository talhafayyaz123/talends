<?php

/**
 * Here is where you can register web routes for your application. These
 * routes are loaded by the RouteServiceProvider within a group which
 * contains the "web" middleware group. Now create something great!
 *
 * @category Worketic
 *
 * @package Worketic
 * @author  Amentotech <theamentotech@gmail.com>
 * @license http://www.amentotech.com amentotech
 * @link    http://www.amentotech.com
 */

Route::fallback(
    function () {
        return View('errors.404 ');
    }
);
// Authentication route
Auth::routes();
// Cache clear route
Route::get(
    'cache-clear',
    function () {
        \Artisan::call('config:cache');
        \Artisan::call('cache:clear');
        \Artisan::call('config:clear');
        \Artisan::call('optimize:clear');
        \Artisan::call('route:clear');
        return redirect()->back();
    }
);
// Home
if (empty(Request::segment(1))) {
    if (Schema::hasTable('users') && Schema::hasTable('site_managements')) {
        Route::get('/', 'HomeController@index')->name('home');
       
    } else {
        if (!empty(env('DB_DATABASE'))) {
            Route::get('/',
                function () {
                    return Redirect::to('/install');
                }
            );
        } else {
            return trans('lang.configure_database');
        }
    }
}

Route::get(
    '/home',
    function () {
        return Redirect::to('/');
    }
)->name('home');

Route::get('why-talends', 'HomeController@whyTalends')->name('whyTalends');

Route::get('find-right-talends', 'HomeController@FindRightTalends')->name('FindRightTalends');

Route::get('government', 'HomeController@government')->name('government');
Route::get('browse-jobs', 'HomeController@browseJobs')->name('browseJobs');
Route::get('find-talends', 'HomeController@findTalents')->name('findTalends');
Route::get('find-interns', 'HomeController@findInterns')->name('findInterns');
Route::get('companies', 'HomeController@Companies')->name('Companies');
Route::get('sitemap.xml', 'SitemapXmlController@index')->name('sitemap.index');


Route::get('connect', 'HomeController@connectDetail');
Route::get('careers', 'HomeController@careersDetail');
Route::get('why_agency_plan', 'HomeController@whyAgencyPlan')->name('whyAgencyPlan');

Route::get('company/registration', 'HomeController@companyRegistration')->name('companyRegistraton');
Route::post('/registration/success', 'HomeController@companyRegistrationSuccess')->name('companyRegistratonSuccess');
Route::get('registration/again/payment/{id}/{package_id}', 'Auth\RegisterController@registrationAgainPayment')->name('registrationAgainPayment');

Route::get('stripe/registration/success/{id}', 'HomeController@stripeCompanyRegistrationSuccess')->name('companyRegistratonSuccess');


Route::post('store/admin/lead', 'HomePagesController@storeAdminLead')->name('storeAdminLead');
Route::get('admin/lead/success', 'HomePagesController@adminLeadSuccess')->name('adminLeadSuccess');


Route::get('company-detail/{id}', 'HomeController@CompanyDetail')->name('CompanyDetail');
Route::get('company-service-detail/{id}', 'HomeController@CompanyServiceDetail')->name('CompanyServiceDetail');

Route::get('freelancer/detail/{id}', 'HomeController@FreelancerDetail')->name('FreelancerDetail');
Route::get('freelancer/experience-education/{id}', 'HomeController@experienceEducation')->name('freelancerExperience');
Route::get('freelancer/get-freelancer-educations', 'FreelancerController@getFreelancerEducations');
Route::get('freelancer/project-awards/{id}', 'HomeController@projectAwardsSettings')->name('freelancerProjectAwards');


Route::get('articles/{category?}', 'ArticleController@articlesList')->name('articlesList');
Route::get('article/{slug}', 'ArticleController@showArticle')->name('showArticle');
Route::get('profile/{slug}', 'PublicController@showUserProfile')->name('showUserProfile');
Route::get('categories', 'CategoryController@categoriesList')->name('categoriesList');
Route::get('page/{slug}', 'PageController@show')->name('showPage');
Route::post('store/project-offer', 'UserController@storeProjectOffers');
if (Helper::getAccessType() == 'both' || Helper::getAccessType() == 'jobs') {
    Route::get('jobs', 'JobController@listjobs')->name('jobs');
    Route::get('job/{slug}', 'JobController@show')->name('jobDetail');
}

if (Helper::getAccessType() == 'both' || Helper::getAccessType() == 'services') {
    Route::get('services', 'ServiceController@index')->name('services');
    Route::get('service/{slug}', 'ServiceController@show')->name('serviceDetail');
}
Route::get('user/password/reset/{verify_code}', 'PublicController@resetPasswordView')->name('getResetPassView');
Route::post('user/update/password', 'PublicController@resetUserPassword')->name('resetUserPassword');
// Authentication|Guest Routes
Route::post('register/login-register-user', 'PublicController@loginUser')->name('loginUser');
Route::get('register/verify-user-code/{code}', 'PublicController@verifyUserCode');

Route::post('registration/verify-user-code', 'PublicController@verifyUserRegistrationCode');

Route::get('admin/again/registration/payment/{package_id}/{user_id}', 'UserPaymentController@againRegistrationPayment')->name('againRegistrationPayment');


Route::post('register/form-step1-custom-errors', 'PublicController@RegisterStep1Validation');
Route::post('register/form-step2-custom-errors', 'PublicController@RegisterStep2Validation');
Route::post('register/single-form-custom-errors', 'PublicController@singleFormValidation');
Route::get('search-results', 'PublicController@getSearchResult')->name('searchResults');
Route::post('user/add-wishlist', 'UserController@addWishlist');
Route::post('agency/register/custom-errors', 'PublicController@CompanyRegisterValidation');
Route::post('hire/agency/login-check', 'PublicController@HireAgencyLoginCheck');
Route::post('hire/agency/register-validation', 'PublicController@HireAgencyRegisterValidations');

Route::post('hire/agency/captcha-validation', 'PublicController@registerAgencyCaptchaValidation');

Route::get('gamail/login/{email}', 'PublicController@gmailLoginUser')->name('loginUser');


// Admin Routes
Route::group(
    ['middleware' => ['role:admin']  ],
    function () {
        Route::get('admin/conversations/search', 'MessageController@getConversations');
        Route::get('admin/view/conversations', 'MessageController@getConversations')->name('viewConversations');
        Route::post('admin/conversation/delete-message', 'MessageController@deleteMessage');
        Route::post('admin/conversation/delete', 'MessageController@deleteConversation');
        Route::post('admin/update/user-verify', 'UserController@updateUserVerification');
       
        Route::get('admin/hiring_requests', 'CompanyController@companyHiringRequests')->name('adminHiringRequests');
        Route::get('admin/hiring_request_detail/{id}', 'CompanyController@companyHiringRequestDetail')->name('adminHiringRequestDetail');


        Route::get('admin/user_payments', 'UserPaymentController@getPayments')->name('userPayments');
        Route::get('admin/user_payment_detail/{id}', 'UserPaymentController@getPaymentDetail')->name('userPaymentDetail');

        //seo pages crud
        Route::get('admin/seo_meta_tags', 'SeoMetaTagsController@index');
        Route::get('admin/meta-tags/edit-tags/{id}', 'SeoMetaTagsController@edit')->name('editMetaTag');
        Route::post('admin/store-meta-tags', 'SeoMetaTagsController@store');
        Route::get('admin/seo_meta_tags/search', 'SeoMetaTagsController@index');
        Route::post('admin/seo_tags/delete-tags', 'SeoMetaTagsController@destroy');
        Route::post('admin/delete-checked-seo_tags', 'SeoMetaTagsController@deleteSelected');
        Route::post('admin/seo_tags/update-seo_tags/{id}', 'SeoMetaTagsController@update');
    
        
        // Article Category Routes
        Route::get('admin/article/categories', 'ArticleCategoryController@index')->name('articleCategories');
        Route::get('admin/article/categories/edit-cats/{id}', 'ArticleCategoryController@edit')->name('editArticleCategories');
        Route::post('admin/article/store-category', 'ArticleCategoryController@store');
        Route::get('admin/article/categories/search', 'ArticleCategoryController@index');
        Route::post('admin/article/categories/delete-cats', 'ArticleCategoryController@destroy');
        Route::post('admin/article/categories/update-cats/{id}', 'ArticleCategoryController@update');
        Route::post('admin/articles/categories/upload-temp-image', 'ArticleCategoryController@uploadTempImage');
        Route::post('admin/article/delete-checked-cats', 'ArticleCategoryController@deleteSelected');
        // Articles Routes
        Route::get('admin/articles', 'ArticleController@index')->name('articles');
        Route::get('admin/articles/edit-article/{id}', 'ArticleController@edit')->name('editArticle');
        Route::post('admin/articles/store-article', 'ArticleController@store');
        Route::get('admin/articles/search', 'ArticleController@index');
        Route::post('admin/articles/delete-article', 'ArticleController@destroy');
        Route::post('admin/articles/update-article/{id}', 'ArticleController@update');
        Route::post('admin/articles/upload-temp-image', 'ArticleController@uploadTempImage');
        Route::post('admin/article/delete-checked-article', 'ArticleController@deleteSelected');

        Route::post('admin/clear-cache', 'SiteManagementController@clearCache');
        Route::get('admin/clear-allcache', 'SiteManagementController@clearAllCache');
        Route::get('admin/import-updates', 'SiteManagementController@importUpdate');
        Route::get('admin/import-demo', 'SiteManagementController@importDemo');
        Route::get('admin/remove-demo', 'SiteManagementController@removeDemoContent');
        Route::get('admin/payouts', 'UserController@getPayouts')->name('adminPayouts');
        Route::post('admin/update-payout-status', 'UserController@updatePayoutStatus');
        Route::get('admin/payouts/download/{year}/{month}/{ids?}', 'UserController@generatePDF');
        Route::get('users', 'UserController@userListing')->name('userListing');
        Route::get('admin/home-page-settings', 'SiteManagementController@homePageSettings')->name('homePageSettings');
        Route::post('admin/get-page-option', 'SiteManagementController@getPageOption');
        // Skill Routes
        Route::get('admin/skills', 'SkillController@index')->name('skills');
        Route::get('admin/skills/edit-skills/{id}', 'SkillController@edit')->name('editSkill');
        Route::post('admin/store-skill', 'SkillController@store');
        Route::post('admin/skills/update-skills/{id}', 'SkillController@update');
        Route::get('admin/skills/search', 'SkillController@index');
        Route::post('admin/skills/delete-skills', 'SkillController@destroy');
        Route::post('admin/delete-checked-skills', 'SkillController@deleteSelected');
        // Department Routes
        Route::get('admin/departments', 'DepartmentController@index')->name('departments');
        Route::get('admin/departments/edit-dpts/{id}', 'DepartmentController@edit')->name('editDepartment');
        Route::post('admin/store-department', 'DepartmentController@store');
        Route::get('admin/departments/search', 'DepartmentController@index');
        Route::post('admin/departments/delete-dpts', 'DepartmentController@destroy');
        Route::post('admin/departments/update-dpts/{id}', 'DepartmentController@update');
        Route::post('admin/delete-checked-dpts', 'DepartmentController@deleteSelected');
        // Language Routes
        Route::get('admin/languages', 'LanguageController@index')->name('languages');
        Route::get('admin/languages/edit-langs/{id}', 'LanguageController@edit')->name('editLanguages');
        Route::post('admin/store-language', 'LanguageController@store');
        Route::get('admin/languages/search', 'LanguageController@index');
        Route::post('admin/languages/delete-langs', 'LanguageController@destroy');
        Route::post('admin/languages/update-langs/{id}', 'LanguageController@update');
        Route::post('admin/delete-checked-langs', 'LanguageController@deleteSelected');
        // Category Routes
        Route::get('admin/categories', 'CategoryController@index')->name('categories');
        Route::get('admin/categories/edit-cats/{id}', 'CategoryController@edit')->name('editCategories');
        Route::post('admin/store-category', 'CategoryController@store');
        Route::get('admin/categories/search', 'CategoryController@index');
        Route::post('admin/categories/delete-cats', 'CategoryController@destroy');
        Route::post('admin/categories/update-cats/{id}', 'CategoryController@update');
        Route::post('admin/categories/upload-temp-image', 'CategoryController@uploadTempImage');
        Route::post('admin/delete-checked-cats', 'CategoryController@deleteSelected');


        Route::get('admin/agency_services', 'CategoryController@agencyServices')->name('agencyServices');
        Route::post('admin/agency_services/upload-temp-image', 'CategoryController@uploadAgencyServiceTempImage');
        Route::post('admin/store-agency-service', 'CategoryController@storeAgencyService');
        Route::post('admin/agency_services/delete-cats', 'CategoryController@destroyAgencyServices');
        Route::get('admin/agency_services/search', 'CategoryController@agencyServices');
      
        Route::post('admin/delete-agency-services-checked-cats', 'CategoryController@deleteAgencyServicesSelected');
        Route::get('admin/agency-services/edit-cats/{id}', 'CategoryController@editAgencyServices')->name('editAgencyCategories');
        Route::post('admin/agency-services/update-cats/{id}', 'CategoryController@updateAgencyServices');
       


        // Sub Category Routes
        Route::get('admin/sub_categories', 'CategoryController@subCategories')->name('subCategories');
        Route::post('admin/sub_store-category', 'CategoryController@storeSubCategory');
        Route::post('admin/sub_categories/delete-sub-cats', 'CategoryController@destroySubCategories');
        Route::get('admin/sub_categories/search', 'CategoryController@subCategories');
        Route::get('admin/sub_categories/edit-sub-cats/{id}', 'CategoryController@editSubCategory')->name('editSubCategory');
        Route::post('admin/sub_categories/update-sub-cats/{id}', 'CategoryController@updateSubCategory');


        // Badges Routes
        Route::get('admin/badges', 'BadgeController@index')->name('badges');
        Route::get('admin/badges/edit-badges/{id}', 'BadgeController@edit')->name('editbadges');
        Route::post('admin/store-badge', 'BadgeController@store');
        Route::get('admin/badges/search', 'BadgeController@index');
        Route::post('admin/badges/delete-badges', 'BadgeController@destroy');
        Route::post('admin/badges/update-badges/{id}', 'BadgeController@update');
        Route::post('admin/badges/upload-temp-image', 'BadgeController@uploadTempImage');
        Route::post('admin/delete-checked-badges', 'BadgeController@deleteSelected');
        // Location Routes
        Route::get('admin/locations', 'LocationController@index')->name('locations');
        Route::get('admin/locations/edit-locations/{id}', 'LocationController@edit')->name('editLocations');
        Route::post('admin/store-location', 'LocationController@store');
        Route::post('admin/locations/delete-locations', 'LocationController@destroy');
        Route::post('/admin/locations/update-location/{id}', 'LocationController@update');
        Route::post('admin/get-location-flag', 'LocationController@getFlag');
        Route::post('admin/locations/upload-temp-image', 'LocationController@uploadTempImage');
        Route::post('admin/delete-checked-locs', 'LocationController@deleteSelected');
        // Review Options Routes
        Route::get('admin/review-options', 'ReviewController@index')->name('reviewOptions');
        Route::get('admin/review-options/edit-review-options/{id}', 'ReviewController@edit')->name('editReviewOptions');
        Route::post('admin/store-review-options', 'ReviewController@store');
        Route::post('admin/review-options/delete-review-options', 'ReviewController@destroy');
        Route::post('admin/review-options/update-review-options/{id}', 'ReviewController@update');
        Route::post('admin/delete-checked-rev-options', 'ReviewController@deleteSelected');
        // Delivery Time Routes
        Route::get('admin/delivery-time', 'DeliveryTimeController@index')->name('deliveryTime');
        Route::get('admin/delivery-time/edit-delivery-time/{id}', 'DeliveryTimeController@edit')->name('editDeliveryTime');
        Route::post('admin/store-delivery-time', 'DeliveryTimeController@store');
        Route::post('admin/delivery-time/delete-delivery-time', 'DeliveryTimeController@destroy');
        Route::post('admin/delivery-time/update-delivery-time/{id}', 'DeliveryTimeController@update');
        Route::post('admin/delete-checked-delivery-time', 'DeliveryTimeController@deleteSelected');
        // Response Time Routes
        Route::get('admin/response-time', 'ResponseTimeController@index')->name('ResponseTime');
        Route::get('admin/response-time/edit-response-time/{id}', 'ResponseTimeController@edit')->name('editResponseTime');
        Route::post('admin/store-response-time', 'ResponseTimeController@store');
        Route::post('admin/response-time/delete-response-time', 'ResponseTimeController@destroy');
        Route::post('admin/response-time/update-response-time/{id}', 'ResponseTimeController@update');
        Route::post('admin/delete-checked-response-time', 'ResponseTimeController@deleteSelected');


        //Front Footer

        
        Route::get('admin/settings/front-footer/{type}', 'HomePagesController@frontFooter')->name('frontFooter');
        Route::get('admin/settings/footer/social_content', 'HomePagesController@footerSocialContent')->name('footerSocialContent');
        Route::post('admin/store/footer_social_content', 'HomePagesController@storeFooterSocialContent');

        Route::get('admin/settings/home-page-settings/{type}', 'HomePagesController@HomePageSettings')->name('HomePageSettings');
        Route::post('admin/store-banner_settings', 'HomePagesController@storeBannerSettings');

        Route::post('admin/store-team_on_demand', 'HomePagesController@storeTeamOnDemandSettings');
       
        // success stories
        Route::post('admin/store-featured_success_stories', 'HomePagesController@storeFeaturedSuccessStories');
        Route::post('admin/update-featured_success_stories/{id}', 'HomePagesController@updateFeaturedSuccessStories');

        Route::post('admin/store_home_page-right_opportunity', 'HomePagesController@storeRightOpportunity');

        Route::post('admin/store_trusted_by_banner', 'HomePagesController@storeTrustedByBanner');

        Route::post('admin/store_freelancer_sidebar', 'HomePagesController@storeFreelancerSidebar');

        Route::post('admin/store_why_need_agency_banner', 'HomePagesController@storeWhyNeedAgencyBanner');


        Route::post('admin/update-homepage-banner-settings/{id}', 'HomePagesController@updateBannerSettings');
        
        Route::post('admin/store-why_choose_talends', 'HomePagesController@storeWhyChooseTalendsSettings');
        Route::post('admin/interne_university_collaboration', 'HomePagesController@storeInterneUniversityCollaboration');


        Route::post('admin/store-footer-how-work', 'HomePagesController@storeFooterHowWork');
        
        Route::post('admin/join_community', 'HomePagesController@storeFooterJoinCommunity');
        Route::post('admin/update-join-community/{id}', 'HomePagesController@updateJoinCommunity');


        
        Route::post('admin/store/agency_profile', 'HomePagesController@storeAgencyProfile');
         Route::post('admin/update-agency-profile/{id}', 'HomePagesController@updateAgencyProfile');

        Route::post('admin/update-footer-how-work/{id}', 'HomePagesController@updateFooterHowWork');
        
        Route::post('admin/store-footer-menu1/{type}', 'SiteManagementController@storeFooterMenu1');
        Route::post('admin/store-header-menu/{type}', 'SiteManagementController@storeHeaderMenu');
        
        

        // Site Management Routes
        Route::get('admin/settings', 'SiteManagementController@Settings')->name('settings');
        Route::post('admin/store/email-settings', 'SiteManagementController@storeEmailSettings');
        Route::post('admin/store/home-settings', 'SiteManagementController@storeHomeSettings');
        Route::get('admin/get-section-display-setting', 'SiteManagementController@getSectionDisplaySetting');
        Route::get('admin/get-chat-display-setting', 'SiteManagementController@getchatDisplaySetting');
        Route::post('admin/store/section-settings', 'SiteManagementController@storeSectionSettings');
        Route::post('admin/store/service-section-settings', 'SiteManagementController@storeServiceSectionSettings');
        Route::post('admin/store/settings', 'SiteManagementController@storeGeneralSettings');
        Route::post('admin/store/general-home-settings', 'SiteManagementController@storeGeneralHomeSettings');
        Route::post('admin/store/menu-settings', 'SiteManagementController@storeMenuSettings');
        Route::post('admin/store/chat-settings', 'SiteManagementController@storeChatSettings');
        Route::post('admin/store/innerpage-settings', 'SiteManagementController@storeInnerPageSettings');
        Route::post('admin/get/innerpage-settings', 'SiteManagementController@getInnerPageSettings');
        Route::get('admin/get/registration-settings', 'SiteManagementController@getRegistrationSettings');
        Route::get('admin/get/site-payment-option', 'SiteManagementController@getSitePaymentOption');
        // Route::get('admin/theme-style-settings', 'SiteManagementController@ThemeStyleSettings');
        Route::post('admin/store/theme-styling-settings', 'SiteManagementController@storeThemeStylingSettings');
        Route::get('admin/get-theme-color-display-setting', 'SiteManagementController@getThemeColorDisplaySetting');
        Route::post('admin/store/registration-settings', 'SiteManagementController@storeRegistrationSettings');
        Route::post('admin/upload-temp-image/{file_name}', 'SiteManagementController@uploadTempImage');
        Route::post('admin/pages/upload-temp-image/{file_name}', 'PageController@uploadTempImage');
        Route::post('admin/store/upload-icons', 'SiteManagementController@storeDashboardIcons');
        Route::post('admin/store/footer-settings', 'SiteManagementController@storeFooterSettings');
        Route::post('admin/store/access-type-settings', 'SiteManagementController@storeAccessTypeSettings');
        Route::post('admin/store/social-settings', 'SiteManagementController@storeSocialSettings');
        Route::post('admin/store/search-menu', 'SiteManagementController@storeSearchMenu');
        Route::post('admin/store/commision-settings', 'SiteManagementController@storeCommisionSettings');
        Route::post('admin/store/payment-settings', 'SiteManagementController@storePaymentSettings');
        Route::post('admin/store/stripe-payment-settings', 'SiteManagementController@storeStripeSettings');
        Route::post('admin/store/paytab-payment-settings', 'SiteManagementController@storePaytabSettings');
        Route::get('admin/email-templates', 'EmailTemplateController@index')->name('emailTemplates');
        Route::get('admin/email-templates/filter-templates', 'EmailTemplateController@index')->name('emailTemplates');
        Route::get('admin/email-templates/{id}', 'EmailTemplateController@edit')->name('editEmailTemplates');
        Route::post('admin/email-templates/update-content', 'EmailTemplateController@updateTemplateContent');
        Route::post('admin/email-templates/update-templates/{id}', 'EmailTemplateController@update');
        Route::post('admin/store/breadcrumbs-settings', 'SiteManagementController@storeBreadcrumbsSettings');
        Route::post('admin/get/breadcrumbs-settings', 'SiteManagementController@getBreadcrumbsSettings');
        Route::post('admin/get/project-settings', 'SiteManagementController@getprojectSettings');
        Route::post('admin/store/project-settings', 'SiteManagementController@storeProjectSettings');
        Route::post('admin/store/bank-detail', 'SiteManagementController@storeBankDetail');
        Route::post('admin/store/order-settings', 'SiteManagementController@storeOrderSettings');
      
       // Home page  Government
       Route::get('admin/pages/government', 'HomePagesController@index')->name('GovernmentPage');
       Route::post('admin/store-government', 'HomePagesController@store');
       Route::post('admin/update-government/{id}', 'HomePagesController@update');
 
       // Home Page About Talends
       Route::get('admin/pages/about-talends', 'HomePagesController@aboutTalends')->name('aboutTalends');
       Route::get('admin/pages/why_agency_plan', 'HomePagesController@whyAgencyPlan')->name('adminWhyAgencyPlan');

       Route::get('admin/pages/find-right-talends', 'HomePagesController@findRightTalends')->name('findRightTalends');
       Route::get('admin/pages/find-right-talend_testimonials', 'HomePagesController@findRightTalendsTestimonials')->name('findRightTalendsTestimonials');
       Route::post('admin/save-about-talends', 'HomePagesController@storeTalends');
       Route::post('admin/update-about-talends/{id}', 'HomePagesController@updateTalends');

       Route::get('admin/privacy/policy', 'SiteManagementController@privacyPolicy')->name('adminPrivacyPolicy');
       Route::get('admin/add_more-user_agreement/{no}', 'SiteManagementController@addMorePrivacyPolicy')->name('addMorePrivacyPolicy');
       Route::post('admin/privacy-policy', 'SiteManagementController@storePrivacyPolicy')->name('storePrivacyPolicy');

       //User Agreement
       Route::get('admin/user/agreement', 'SiteManagementController@userAgreement')->name('userAgreement');
       Route::get('admin/add_more-user_agreement/{no}', 'SiteManagementController@addMoreUserAgreement')->name('addMoreUserAgreement');
       Route::post('user-agreement', 'SiteManagementController@storeUserAgreement');


     
       Route::post('admin/save-why-agency-plan', 'HomePagesController@storeWhyAgencyPlan');
        Route::post('admin/update-why-agency-plan/{id}', 'HomePagesController@updateWhyAgencyPlan');

     
       Route::post('admin/update-find_right_talends/{id}', 'HomePagesController@updatefindRightTalends');


       Route::post('admin/save-find-right-talends', 'HomePagesController@storeFindRightTalends');

       Route::post('admin/save-right-talend_testimonial', 'HomePagesController@storeRightTalendsTestimonial');
       Route::post('admin/update-right-talend_testimonial/{id}', 'HomePagesController@updateRightTalendsTestimonial');

        // Pages Routes
        Route::get('admin/pages', 'PageController@index')->name('pages');
        Route::get('admin/create/pages', 'PageController@create')->name('createPage');
        Route::get('admin/pages/edit-page/{id}', 'PageController@edit')->name('editPage');
        Route::post('admin/store-page', 'PageController@store');
        Route::get('admin/pages/search', 'PageController@index');
        Route::post('admin/pages/delete-page', 'PageController@destroy');
        // Route::post('admin/pages/update-page/{id}', 'PageController@update');
        Route::post('admin/update-page', 'PageController@update');
        Route::post('admin/delete-checked-pages', 'PageController@deleteSelected');
        //All Jobs
        Route::get('admin/jobs', 'JobController@jobsAdmin')->name('allJobs');
        Route::get('admin/jobs/search', 'JobController@jobsAdmin');
        //All Services
        Route::get('admin/services', 'ServiceController@adminServices')->name('allServices');
        Route::get('admin/service-orders', 'ServiceController@adminServiceOrders')->name('ServiceOrders');
        //All packages
        Route::get('admin/packages', 'PackageController@create')->name('createPackage');
        Route::get('admin/packages/search', 'PackageController@create');
        Route::get('admin/packages/edit/{slug}', 'PackageController@edit')->name('editPackage');
        Route::post('admin/packages/update/{slug}', 'PackageController@update');
        Route::post('admin/store/package', 'PackageController@store');
        Route::post('admin/packages/delete-package', 'PackageController@destroy');
        Route::post('package/get-package-options', 'PackageController@getPackageOptions');
        Route::post('admin/packages/upload-temp-image', 'PackageController@uploadTempImage');

        Route::get('admin/profile', 'UserController@adminProfileSettings')->name('adminProfile');
        Route::post('admin/store-profile-settings', 'UserController@storeProfileSettings');
        Route::post('admin/upload-temp-image', 'UserController@uploadTempImage');
        Route::post('admin/submit-user-refund', 'UserController@submitUserRefund');

        Route::get('admin/orders', 'UserController@showOrders')->name('orderList');
        Route::post('admin/order/change-status', 'UserController@changeOrderStatus');

        Route::get('get-pages-list', 'PageController@getPagesList');
        Route::get('get-saved-pages-order', 'SiteManagementController@getPagesOrder');
        Route::get('admin/get-menu-color-setting', 'SiteManagementController@getMenuColorSetting');
        
        Route::get('get-parent-menu-list', 'SiteManagementController@getParentMenuList');
        Route::get('get-saved-custom-menus-list', 'SiteManagementController@getSavedMenusList');
    }
);

Route::group(
    ['middleware' => ['role:employer|admin']],
    function () {
        Route::get('job/edit-job/{job_slug}', 'JobController@edit')->name('editJob');
        Route::post('job/get-stored-job-skills', 'JobController@getJobSkills');
        Route::post('job/get-job-settings', 'JobController@getAttachmentSettings');
        Route::post('job/update-job', 'JobController@update');
        Route::post('skills/get-job-skills', 'SkillController@getJobSkills');
        Route::post('job/delete-job', 'JobController@destroy');
    }
);
Route::group(
    ['middleware' => ['role:freelancer|admin|intern']],
    function () {
        if (Helper::getAccessType() == 'both' || Helper::getAccessType() == 'services') {
            Route::get('freelancer/services/{status}', 'FreelancerController@showServices')->name('ServiceListing');
            Route::get('freelancer/service/{id}/{status}', 'FreelancerController@showServiceDetail')->name('ServiceDetail');

            Route::get('internee/services/{status}', 'InterneController@showInterneServices')->name('InterneserviceListing');
            Route::get('internee/service/{id}/{status}', 'InterneController@showInterneServiceDetail')->name('InterneServiceDetail');

        }
        Route::post('services/change-status', 'ServiceController@changeStatus');
        Route::get('freelancer/dashboard/edit-service/{id}', 'ServiceController@edit')->name('edit_service');
        Route::post('services/post-service', 'ServiceController@store');
        Route::post('service/upload-temp-image', 'ServiceController@uploadTempImage');
        Route::post('freelancer/dashboard/delete-service', 'ServiceController@destroy');
        Route::post('service/get-service-settings', 'ServiceController@getServiceSettings');
        Route::post('service/update-service', 'ServiceController@update');
    }
);
//Employer Routes
Route::group(
    ['middleware' => ['role:employer']],
    function () {
        Route::post('skills/get-job-skills', 'SkillController@getJobSkills');
        Route::get('employer/dashboard/post-job', 'JobController@postJob')->name('employerPostJob');
        Route::get('employer/dashboard/manage-jobs', 'JobController@index')->name('employerManageJobs');
        Route::get('employer/jobs/{status}', 'EmployerController@showEmployerJobs');
        Route::get('employer/dashboard/job/{slug}/proposals', 'ProposalController@getJobProposals')->name('getProposals');
        Route::get('employer/dashboard', 'EmployerController@employerDashboard')->name('employerDashboard');
        Route::get('employer/profile', 'EmployerController@index')->name('employerPersonalDetail');
        Route::post('employer/upload-temp-image', 'EmployerController@uploadTempImage');
        Route::post('employer/store-profile-settings', 'EmployerController@storeProfileSettings');
        Route::post('job/post-job', 'JobController@store');
        Route::post('user/submit-review', 'UserController@submitReview');
        Route::post('proposal/hire-freelancer', 'ProposalController@hiredFreelencer');
        Route::get('employer/services/{status}', 'EmployerController@showEmployerServices');
        Route::get('employer/service/{service_id}/{id}/{status}', 'EmployerController@showServiceDetail');
        Route::get('employer/payout-settings', 'EmployerController@payoutSettings')->name('employerPayoutsSettings');
        Route::get('employer/payouts', 'EmployerController@getPayouts')->name('getEmployerPayouts');
    }
);
// Freelancer Routes
Route::group(
    ['middleware' => ['role:freelancer|company|intern']],
    function () {
        Route::get('/get-freelancer-skills', 'SkillController@getFreelancerSkills');
        Route::get('/get-skills', 'SkillController@getSkills');
        Route::get('freelancer/dispute/{slug}', 'UserController@raiseDispute');
        Route::post('freelancer/store-dispute', 'UserController@storeDispute');
        Route::get('freelancer/dashboard/experience-education', 'FreelancerController@experienceEducationSettings')->name('experienceEducation');
        Route::get('freelancer/dashboard/project-awards', 'FreelancerController@projectAwardsSettings')->name('projectAwards');
        Route::post('freelancer/store-profile-settings', 'FreelancerController@storeProfileSettings')->name('freelancerProfileSetting');
        Route::post('freelancer/store-experience-settings', 'FreelancerController@storeExperienceEducationSettings');
        Route::post('freelancer/store-project-award-settings', 'FreelancerController@storeProjectAwardSettings');
        Route::get('freelancer/get-freelancer-skills', 'FreelancerController@getFreelancerSkills');
        Route::get('freelancer/get-freelancer-experiences', 'FreelancerController@getFreelancerExperiences');
        Route::get('freelancer/get-freelancer-projects', 'FreelancerController@getFreelancerProjects');
        Route::get('freelancer/get-freelancer-educations', 'FreelancerController@getFreelancerEducations');
        Route::get('freelancer/get-freelancer-awards', 'FreelancerController@getFreelancerAwards');
        Route::get('freelancer/jobs/{status}', 'FreelancerController@showFreelancerJobs');
        Route::get('freelancer/job/{slug}', 'FreelancerController@showOnGoingJobDetail')->name('showOnGoingJobDetail');
        Route::get('freelancer/proposals', 'FreelancerController@showFreelancerProposals')->name('showFreelancerProposals');
        Route::get('freelancer/dashboard', 'FreelancerController@freelancerDashboard')->name('freelancerDashboard');

        ///////////////////
        //internee routes
        Route::get('internee/proposals', 'InterneController@showInterneProposals')->name('showInterneProposals');
        Route::get('internee/job/{slug}', 'InterneController@showOnGoingJobDetail')->name('showOnGoingInterneJobDetail');
        Route::get('internee/jobs/{status}', 'InterneController@showInterneeJobs')->name('showInterneeOnGoingJobDetail');
        Route::get('internee/dispute/{slug}', 'UserController@raiseInterneDispute');

        
        //////////////////
        Route::get('company/dashboard', 'FreelancerController@companyDashboard')->name('companyDashboard');
        Route::get('company/hiring_requests', 'CompanyController@companyHiringRequests')->name('companyHiringRequests');
        Route::get('company/hiring_request_detail/{id}', 'CompanyController@companyHiringRequestDetail')->name('companyHiringRequestDetail');

        Route::get('company/jobs/{status}', 'CompanyController@showCompanyJobs');
        Route::get('company/job/{slug}', 'CompanyController@showOnGoingJobDetail')->name('showOnGoingCompanyJobDetail');
        Route::get('company/dispute/{slug}', 'UserController@raiseCompanyDispute');


        Route::get('freelancer/profile', 'FreelancerController@index')->name('personalDetail');
        Route::get('company/profile', 'CompanyController@index')->name('companyProfile');
        Route::get('company/dashboard/experience-education', 'CompanyController@experienceEducationSettings')->name('companyExperienceEducation');

        Route::get('company/settings/expertise', 'CompanyController@companyExpertise')->name('companyExpertise');
        Route::post('company/store-profile-settings', 'CompanyController@storeProfileSettings')->name('CompanyProfileSetting');
        Route::post('company/store-experience-settings', 'CompanyController@storeExperienceEducationSettings');
       
        Route::get('company/dashboard/project-awards', 'CompanyController@projectAwardsSettings')->name('companyProjectAwards');
        Route::post('company/store-project-award-settings', 'CompanyController@storeProjectAwardSettings');

        Route::get('company/dashboard/work-detail', 'CompanyController@companyWorkDetail')->name('companyWorkDetail');
        Route::post('company/store-work-detail', 'CompanyController@storeCompanyWorkDetail');


        /////////intern routes
        Route::get('intern/profile', 'InterneController@index')->name('interneProfile');
        Route::get('intern/dashboard', 'InterneController@interneDashboard')->name('interneDashboard');
        Route::post('interne/store-profile-settings', 'InterneController@storeProfileSettings')->name('interneProfileSetting');
        Route::get('interne/dashboard/experience-education', 'InterneController@experienceEducationSettings')->name('interneExperienceEducation');
        Route::post('interne/store-experience-settings', 'InterneController@storeExperienceEducationSettings');
        Route::get('interne/dashboard/project-awards', 'InterneController@projectAwardsSettings')->name('interneProjectAwards');
        Route::post('interne/store-project-award-settings', 'InterneController@storeProjectAwardSettings');
        Route::get('interne/payout-settings', 'InterneController@payoutSettings')->name('InterneePayoutsSettings');


        
        Route::post('company/store-expertise', 'CompanyController@storeExpertise')->name('storeExpertise');
        Route::get('company/add_more-expertise/{no}', 'CompanyController@addMoreExpertise')->name('addMoreExpertise');


        Route::post('freelancer/upload-temp-image', 'FreelancerController@uploadTempImage');
        Route::get('freelancer/dashboard/post-service', 'ServiceController@create')->name('freelancerPostService');
        Route::get('freelancer/payout-settings', 'FreelancerController@payoutSettings')->name('FreelancerPayoutsSettings');
        Route::get('freelancer/payouts', 'FreelancerController@getPayouts')->name('getFreelancerPayouts');
    }
);
// Employer|Freelancer Routes
Route::group(
    ['middleware' => ['role:employer|freelancer|admin|company|intern']],
    function () {
        Route::post('job/upload-temp-image', 'JobController@uploadTempImage');
        Route::get('admin/fail/registration/email/{package_id}/{user_id}', 'UserPaymentController@sendFailRegistrationEmail')->name('sendFailRegistrationEmail');
        Route::post('proposal/upload-temp-image', 'ProposalController@uploadTempImage');
        Route::get('job/proposal/{job_slug}', 'ProposalController@createProposal')->name('createProposal');
        Route::get('profile/settings/manage-account', 'UserController@accountSettings')->name('manageAccount');
        Route::get('profile/settings/reset-password', 'UserController@resetPassword')->name('resetPassword');
        Route::post('profile/settings/request-password', 'UserController@requestPassword');
        Route::get('profile/settings/email-notification-settings', 'UserController@emailNotificationSettings')->name('emailNotificationSettings');
        Route::get('profile/settings/payment-verification', 'UserController@paymentVerificationSettings')->name('paymentVerification');
        Route::post('profile/settings/save-email-settings', 'UserController@saveEmailNotificationSettings');
        Route::post('profile/settings/save-account-settings', 'UserController@saveAccountSettings');
        Route::get('profile/settings/delete-account', 'UserController@deleteAccount')->name('deleteAccount');
        Route::get('profile/settings/email-verification', 'UserController@emailVerificationSettings')->name('emailVerification');
        Route::post('user/resend-verification-code', 'UserController@resendCode');
        Route::post('user/verify-user-code', 'UserController@reVerifyUserCode');
        Route::post('profile/settings/delete-user', 'UserController@destroy');
        Route::post('admin/delete-user', 'UserController@deleteUser');
        Route::get('profile/settings/get-manage-account', 'UserController@getManageAccountData');
        Route::get('profile/settings/get-user-notification-settings', 'UserController@getUserEmailNotificationSettings');
        Route::get('profile/settings/get-user-searchable-settings', 'UserController@getUserSearchableSettings');
        Route::get('{role}/saved-items', 'UserController@getSavedItems')->name('getSavedItems');
        Route::post('profile/get-wishlist', 'UserController@getUserWishlist');
        Route::post('job/add-wishlist', 'JobController@addWishlist');
        Route::get('proposal/{slug}/{status}', 'ProposalController@show');
        Route::post('proposal/download-attachments', 'UserController@downloadAttachments');
        Route::post('proposal/send-message', 'UserController@sendPrivateMessage');
        Route::post('proposal/get-private-messages', 'UserController@getPrivateMessage');
        Route::get('proposal/download/message-attachments/{id}', 'UserController@downloadMessageAttachments');
        Route::get('user/package/checkout/{id}', 'UserController@checkout');
        Route::get('user/order/bacs/{id}/{order}/{type}/{project_type?}', 'UserController@bankCheckout');
        Route::post('user/generate-order/bacs/{id}/{type}', 'UserController@generateOrder');
        Route::get('employer/{type}/invoice', 'UserController@getEmployerInvoices')->name('employerInvoice');
        Route::get('freelancer/{type}/invoice', 'UserController@getFreelancerInvoices')->name('freelancerInvoice');
        Route::get('internee/{type}/invoice', 'UserController@getInterneeInvoices')->name('InterneeInvoice');
        Route::get('show/invoice/{id}', 'UserController@showInvoice');
        Route::post('service/upload-temp-message_attachments', 'ServiceController@uploadTempMessageAttachments');
        // Route::post('user/verify/emailcode', 'UserController@verifyUserEmailCode');
        Route::post('user/update-payout-detail', 'UserController@updatePayoutDetail');
        Route::get('user/get-payout-detail', 'UserController@getPayoutDetail');
        Route::post('user/upload-temp-image/{type?}', 'UserController@uploadTempImage');
        Route::post('user/submit/transection', 'UserController@submitTransection');
        Route::get('lead/status/{id}/{status}', 'CompanyController@leadStatus')->name('leadStatus');

    }
);

Route::get('hire/agency/{id}', 'CompanyController@hireAgencyForm')->name('hireAgencyForm');
Route::post('store/hire/agency/{id}', 'CompanyController@storeHireAgency')->name('storeHireAgency');
Route::get('success/hire/agency/{id}', 'CompanyController@successHireAgencyForm')->name('successHireAgency');
Route::get('privacy/policy', 'PublicController@privacyPolicy')->name('privacyPolicy');
Route::get('term/agreement', 'PublicController@userAgreement')->name('Agreement');



Route::get('page/get-page-data/{id}', 'PageController@getPage');
Route::get('get-categories', 'CategoryController@getCategories');
Route::get('get-seven-categories', 'CategoryController@getSevenCategories');
Route::get('get-articles', 'PublicController@getArticles');
Route::get('get-home-slider/{id}', 'PageController@getSlider');

Route::get('category_sub_categories/{id}','CategoryController@getCategorySubCategories')->name('category_subcategories');
Route::get('sub_category_skills/{id}','CategoryController@getSubCategorySkills')->name('sub_category_skills');

Route::get('category_sub_categories/multiple/{id}','CategoryController@getMultipleCategorySubCategories');


// Route::get('section/get-iframe/{video}', 'PublicController@getVideo');
Route::get('get-top-freelancers', 'FreelancerController@getTopFreelancers');
Route::get('get-all-freelancers', 'FreelancerController@getAllFreelancers');
Route::get('get-services', 'ServiceController@getServices');
Route::post('job/get-wishlist', 'JobController@getWishlist');
Route::get('dashboard/packages/{role}', 'PackageController@index');
Route::get('package/get-purchase-package', 'PackageController@getPurchasePackage');
Route::get('paypal/redirect-url', 'PaypalController@getIndex');
Route::get('paypal/ec-checkout', 'PaypalController@getExpressCheckout');
Route::get('paypal/ec-checkout-success', 'PaypalController@getExpressCheckoutSuccess');
Route::get('user/products/thankyou', 'UserController@thankyou');
Route::get('payment-process/{id}', 'EmployerController@employerPaymentProcess');
Route::get('search/get-search-filters', 'PublicController@getFilterlist');
Route::get('search/get-price-limit', 'PublicController@getPriceLimit');
Route::post('search/get-searchable-data', 'PublicController@getSearchableData');
Route::post('search/get-searchable-data-v2', 'PublicController@getSearchableDataV2');
Route::get('channels/{channel}/messages', 'MessageController@index')->name('message');
Route::post('channels/{channel}/messages', 'MessageController@store');
Route::post('message/send-private-message', 'MessageController@store');
Route::get('message-center', 'MessageController@index')->name('message');
Route::get('message-center/get-users', 'MessageController@getUsers');
Route::post('message-center/get-messages', 'MessageController@getUserMessages');
Route::post('message', 'MessageController@store')->name('message.store');
Route::get('download/{id}', 'PublicController@getFile')->name('getfile');
Route::post('submit-report', 'UserController@storeReport');
Route::post('badge/get-color', 'BadgeController@getBadgeColor');
Route::get('check-proposal-auth-user', 'PublicController@checkProposalAuth');
Route::get('check-service-auth-user', 'PublicController@checkServiceAuth');
Route::post('proposal/submit-proposal', 'ProposalController@store');
Route::post('get-freelancer-experiences', 'PublicController@getFreelancerExperience');
Route::post('get-freelancer-education', 'PublicController@getFreelancerEducation');

Route::get('addmoney/stripe', array('as' => 'addmoney.paywithstripe', 'uses' => 'StripeController@payWithStripe',));
Route::post('addmoney/stripe', array('as' => 'addmoney.stripe', 'uses' => 'StripeController@postPaymentWithStripe',));

Route::get('addmoney/paytab/{amount}', array('as' => 'addmoney.paytab', 'uses' => 'PaytabController@paytabCheckout',));

//Route::post('/redirect/paytab', array('as' => 'redirect.paytab', 'uses' => 'PaytabController@postPaymentWithPaytab',));
Route::get('/redirect/paytab', 'PaytabController@postPaymentWithPaytab');



Route::get('paytab/package/payment/{package_id}', array('as' => 'package-payment.paytab', 'uses' => 'PaytabController@paytabPackageGateway',));
Route::post('/redirect/package/paytab', 'PaytabController@postPackagePaymentWithPaytab');


Route::get('paytab/service/payment/{service_id}/{service_seller}', array('as' => 'service-payment.paytab', 'uses' => 'PaytabController@paytabServicePayment'));

Route::post('company/registration', 'Auth\RegisterController@userRegister')->name('userRegister');

Route::get('service/payment-process/{id}', 'ServiceController@employerPaymentProcess');

Route::post('addmoney/stripe/company/register', array('as' => 'addmoney.stripe.register', 'uses' => 'StripeController@userRegisterStripe',));

// Page Builder
Route::get('get-edit-page/{id}', 'PageController@getEditPageData');
Route::get('page/get-sections/{id}', 'PageController@getEditPageSections');
Route::post('get-latest-jobs', 'JobController@getLatestJobs');
Route::get('get-top-packages/{role}', 'PackageController@getTopPackages');

// Search Component V2
Route::get('search/get-search-filtersV2', 'PublicController@getFilterOptions');

Route::get('search/location-list', 'PublicController@getLocationList');