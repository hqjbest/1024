切换到代码的根目录下,执行
    docker login

登录的用户名密码为自己注册的帐号、密码（https://hub.docker.com/）。登录成功之后，
    docker-compose up -d
成功之后执行:  `docker exec -it 1024_web bash` 在得到的Shell中执行下面的指令以初始化代码. 上述build过程会自动从代码中的1024.sql恢复数据库。

    php init --env=Development --overwrite=All && composer install

在宿主操作系统（就是Windows或者Mac)中的hosts中增加以下记录:

    127.0.0.0  backend.1024.local

访问 `http://backend.1024.local:9280/adminer` 即可管理数据库