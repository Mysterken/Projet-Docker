FROM nginx:latest
COPY content/html/index.html /usr/share/nginx/html/index.html
EXPOSE 80