global:
  env:
    - LARAVEL_ENV: production
web1:
  after_build:
    - "if [ ! -f composer.phar ]; then curl -s http://getcomposer.org/installer | php; fi; php composer.phar install"
  name: finalProject
  shared_writable_dirs:
    - /app/storage/cache
    - /app/storage/logs
    - /app/storage/meta
    - /app/storage/sessions
    - /app/storage/views
  document_root: public
  php_version: 5.4.14
  php_extensions:
    - zip
    - pdo_mysql
    - mcrypt
    - memcached
  after_deploy:
    - "rm -f app/storage/cache/*"
    - "rm -f app/storage/views/*"