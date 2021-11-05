FROM webdevops/php-apache-dev:7.4
LABEL maintainer="iioe"

ENV PHP_DISMOD=ioncube,redis,mongodb,pdo_pgsql,pgsql,posix,soap,mpdo
ENV PHP_MEMORY_LIMIT=512M
ENV PHP_DATE_TIMEZONE=Europe/Moscow
ENV PHP_MAX_EXECUTION_TIME=2000
ENV PHP_DISPLAY_ERRORS=off
ENV XDEBUG_MODE=debug,profile
ENV XDEBUG_CLIENT_HOST=172.17.0.1
ENV XDEBUG_CLIENT_PORT=9001
ENV XDEBUG_IDE_KEY=PHPSTORM
ENV XDEBUG_PROFILER_ENABLE=1
ENV XDEBUG_OUTPUT_DIR=/app/profiler_output_dir
ENV php.upload_tmp_dir=var/tmp
#ENV PHP_DEBUGGER=blackfire
#ENV BLACKFIRE_SERVER_ID=486a7501-02ea-4c09-a7af-cb76bce4a367
#ENV BLACKFIRE_SERVER_TOKEN=7a9e3b114e8b1708d52540d2e579e93cdf54435e29c1edd72ba15cc4a17e2715

#ForXDebug3
RUN sed -i 's,xdebug.profiler_output_dir = /tmp/debug,,g' /opt/docker/etc/php/php.webdevops.ini
RUN sed -i 's,xdebug.remote_connect_back = 1,,g' /opt/docker/etc/php/php.webdevops.ini
RUN sed -i 's,xdebug.remote_enable = 1,,g' /opt/docker/etc/php/php.webdevops.ini

#RUN chmod 0755 /app/upload/system/storage/cache/ \
#    && chmod 0755 upload/system/storage/download/ \
#    && chmod 0755 upload/system/storage/logs/ \
#    && chmod 0755 upload/system/storage/modification/ \
#    && chmod 0755 upload/system/storage/session/ \
#    && chmod 0755 upload/system/storage/upload/ \
#    && chmod 0755 upload/system/storage/vendor/ \
#    && chmod 0755 upload/image/ \
#    && chmod 0755 upload/image/cache/ \
#    && chmod 0755 upload/image/catalog/ \
#    && chmod 0755 upload/config.php \
#    && chmod 0755 upload/admin/config.php
EXPOSE 9000
