FROM nginx:alpine

LABEL maintainer="Guillaume MIRANDA <guillaume11miranda@gmail.com>"

RUN echo http://dl-cdn.alpinelinux.org/alpine/edge/community/ >> /etc/apk/repositories
RUN apk add --update --no-cache shadow

RUN useradd -M www-data && \
    usermod -u 1000 www-data

CMD ["nginx"]

EXPOSE 80 443
