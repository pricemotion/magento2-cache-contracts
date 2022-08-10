FROM alpine:edge

COPY packages /tmp

RUN xargs -t apk add --no-cache < /tmp/packages
