ARG NGINX_VERSION

From nginx:${NGINX_VERSION}
#维护者信息
MAINTAINER ocdpunk admin@ocdpunk.com
#时区
ENV TZ Asia/Shanghai
RUN date -R
#容器启动时执行指令
CMD ["nginx", "-g", "daemon off;"]
