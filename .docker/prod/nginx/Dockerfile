FROM nginx:alpine
COPY .docker/prod/nginx/nginx.conf /etc/nginx/conf.d/default.conf
COPY ./upload /app/upload

EXPOSE 80
