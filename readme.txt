//Use library are in the documentation config-> app.php
=> use Illuminate\Support\Facades\Storage;
=> use Illuminate\Support\Facades\Auth;
=>Illuminate\View\ViewServiceProvider::class,
=>Collective\Html\HtmlServiceProvider::class,
=>Unisharp\Ckeditor\ServiceProvider::class,
'View' => Illuminate\Support\Facades\View::class,
'Form' => Collective\Html\FormFacade::class,
'Html' => Collective\Html\HtmlFacade::class,

//Form
Command : composer require laravelcollective/html
Others:
Collective\Html\HtmlServiceProvider::class, => Config-> app.php -> Provider

'Form' => Collective\Html\FormFacade::class,
'Html' => Collective\Html\HtmlFacade::class, => Config-> app.php -> aliases

//
Command : Unisharp\Ckeditor\ServiceProvider::class,

//artisan
=> php artisan route:list
=> php artisan make:controller PostsController --resource
=> php artisan tinker   >> DB Insert
=> php artisan migrate  >> DB Migration
=> php artisan make:model Post -m >> make model
=> php artisan make:controller PostController >> make controller
=> php artisan vendor:publish --tag=ckeditor >> ckeditor
=> php artisan make:auth
=> php artisan make:migration add_user_id_to_posts aka migrationname
=> php artisan storage:link >> Linked public to storage to use image for website, 
                                everything stored in storage will be shown in public too


//npm
=> npm install >> ?
=> npm run dev >> CSS

//composer
=> composer require laravel/ui >> ??
=> composer require unisharp/laravel-ckeditor >> ?? >> https://github.com/UniSharp/laravel-ckeditor
=> composer require laravelcollective/html
=> composer install/update







