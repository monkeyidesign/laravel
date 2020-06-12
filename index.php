laravel new blog
composer require laravel/ui
php artisan ui vue
php artisan ui vue --auth
npm install

******************
npm install admin-lte --save
@import '~admin-lte/dist/css/adminlte.css';
require('admin-lte'); in the bootstrap.js

******************
npm install --save @fortawesome/fontawesome-free
$fa-font-path:        "../webfonts";
@import "~@fortawesome/fontawesome-free/scss/fontawesome.scss";
@import "~@fortawesome/fontawesome-free/scss/solid.scss";
@import "~@fortawesome/fontawesome-free/scss/brands.scss";
@import "~@fortawesome/fontawesome-free/scss/regular.scss";

******************
mix.js('resources/js/app.js', 'public/js')
mix.sass('resources/sass/app.scss', 'public/css')
.sass('resources/sass/admin/admin.scss', 'public/css/');