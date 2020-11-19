<?php
    
    namespace Regnilk\BsFormLaravel;

    use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
    use Illuminate\Support\Facades\Blade;
    use Regnilk\BsFormLaravel\Components\{Elem, Open, Close};
    use Regnilk\BsFormLaravel\Components\Inputs\{Checkbox, Date, Email, File, Password, Radio, Select, SelectRange, Text, Number};
    use Regnilk\BsFormLaravel\Components\Buttons\{Reset, Submit, Back};

    class BsFormServiceProvider extends LaravelServiceProvider
    {
        /**
         * Indicates if loading of the provider is deferred.
         *
         * @var bool
         */
        protected $defer = FALSE;
    
        /**
         * Bootstrap the application events.
         *
         * @return void
         */
        public function boot()
        {
            $this->loadViewComponentsAs('form', [
                Elem::class,
                Text::class,
                Open::class,
                Close::class,
                Number::class,
                Password::class,
                Email::class,
                File::class,
                Checkbox::class,
                Radio::class,
                Date::class,
                Select::class,
                SelectRange::class,
                Submit::class,
                Reset::class,
                Back::class,
            ]);
    
            $this->loadViewsFrom(__DIR__ . '/Views', 'bs-form-laravel');
        
            Blade::component('form-open', Open::class);
            Blade::component('form-elem', Elem::class);
            Blade::component('form-close', Close::class);
            Blade::component('form-text', Text::class);
            Blade::component('form-number', Number::class);
            Blade::component('form-password', Password::class);
            Blade::component('form-email', Email::class);
            Blade::component('form-file', File::class);
            Blade::component('form-check', Checkbox::class);
            Blade::component('form-radio', Radio::class);
            Blade::component('form-date', Date::class);
            Blade::component('form-select', Select::class);
            Blade::component('form-select-range', SelectRange::class);
            Blade::component('form-btn-submit', Submit::class);
            Blade::component('form-btn-reset', Reset::class);
            Blade::component('form-btn-back', Back::class);
        }
    }