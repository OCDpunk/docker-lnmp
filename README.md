### 默认lnmp环境
- NGINX:1.21.0
- MYSQL:8.0.20
- PHP:8.0.6
- REDIS:6.2.3

### 目录结构
```
├── README.md
├── bin
│   └── docker-compose.yml
├── config 配置
│   ├── mysql
│   │   └── my.cnf
│   ├── nginx
│   │   ├── cert
│   │   ├── conf.d
│   │   │   ├── default.conf
│   │   │   └── ocdpunk.conf
│   │   └── nginx.conf
│   ├── php
│   │   ├── php-fpm.conf
│   │   ├── php-fpm.d
│   │   │   ├── docker.conf
│   │   │   ├── www.conf
│   │   │   ├── www.conf.default
│   │   │   └── zz-docker.conf
│   │   └── php.ini
│   └── redis
│       ├── redis.conf
│       └── redis.default.conf
├── dockerfile 构建文件
│   ├── mysql
│   │   └── Dockerfile
│   ├── nginx
│   │   └── Dockerfile
│   ├── php
│   │   └── Dockerfile
│   └── redis
│       └── Dockerfile
├── logs 日志
│   ├── mysql
│   │   └── mysqld.log
│   ├── nginx
│   │   ├── access.log
│   │   └── error.log
│   ├── php
│   │   └── error.log
│   └── redis
│       └── redis.log
├── mysql #mysql文件
├── redis #redis文件
└── www 根目录
    └── default
        └── index.php
```

### 安装部署
```
git clone https://github.com/ocdpunk/docker-lnmp.git && cd docker-lnmp/bin #下载项目
docker-compose up -d --force-recreate --remove-orphans --build #启动
docker-compose down –remove-orphans –rmi all #关闭
```