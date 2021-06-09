ARG REDIS_VERSION

From redis:${REDIS_VERSION}
#维护者信息
MAINTAINER ocdpunk admin@ocdpunk.com
#时区
ENV TZ Asia/Shanghai
RUN date -R
#容器启动时执行指令
CMD ["redis-server", "/usr/local/etc/redis.conf"]