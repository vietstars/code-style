# code-style

COMPOSER_MEMORY_LIMIT=-1 composer require vietstars/code-style

php artisan vendor:publish --provider="Vietstars\CodeStyle\ServiceProvider"\
or\
php artisan vendor:publish --tag=config-fixer --force

"scripts": {\
    "check-style": "php-cs-fixer fix --dry-run --diff",\
    "fix-style": "php-cs-fixer fix"\
}
