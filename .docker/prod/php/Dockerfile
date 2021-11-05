FROM webdevops/php:7.4
LABEL maintainer="iioe"

ENV PHP_DISMOD=ioncube,redis,mongodb,pdo_pgsql,pgsql,posix,soap,mpdo
ENV PHP_MEMORY_LIMIT=512M
ENV PHP_DATE_TIMEZONE=Europe/Moscow
ENV PHP_MAX_EXECUTION_TIME=2000
ENV PHP_DISPLAY_ERRORS=off
ENV php.upload_tmp_dir=var/tmp

COPY ./upload /app/upload
RUN composer install

EXPOSE 9000
