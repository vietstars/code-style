# code-style

php artisan vendor:publish --provider="VietStars\CodeStyle\ServiceProvider"

php artisan vendor:publish --tag=config-fixer --force

"scripts": {
  "check-style": "php-cs-fixer fix --dry-run --diff",
  "fix-style": "php-cs-fixer fix"
}