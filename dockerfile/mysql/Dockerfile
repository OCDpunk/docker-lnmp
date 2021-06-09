ARG MYSQL_VERSION

From mysql:${MYSQL_VERSION}
#维护者信息
MAINTAINER ocdpunk admin@ocdpunk.com
#时区
ENV TZ Asia/Shanghai
RUN date -R
#容器启动时执行指令
CMD ["mysqld"]