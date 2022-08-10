FROM alpine:3.14

COPY packages /tmp

RUN xargs -t apk add --no-cache < /tmp/packages
