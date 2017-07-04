[WinShop]个人代购用入库管理和网上商城系统

### 安装手册

1.安装XAMPP模拟开发环境

[安装地址](https://www.apachefriends.org/jp/index.html) ，设置PHP环境变量PATH（C:\xampp\php）

2.设置数据库

安装好XAMPP模拟开发环境以后，启动xampp控制台。然后打开mysql管理页面（http://localhost/phpmyadmin/index.php），添加一个新的数据库winshop。

3.安装Git

[安装地址](https://git-scm.com/) 

4.安装PHP包管理工具

打开windows的命令行工具(cmd)，执行以下命令
```shell
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === '669656bab3166a7aff8a7506b8cb2d1c292f042046c5a994c43155c0be6190fa0355160742ab2e1c88d40d5be660b410') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

5.导入项目

项目目录为c:\xampp\htdocs\
```shell
git clone https://github.com/jiangsongyi0204/winshop.git
cd winshop
```

6.初始化项目

项目目录为c:\xampp\htdocs\winshop
```shell
composer install
php artisan cache:clear
php artisan october:fresh
php artisan october:install #在这里设置数据库,后台管理密码等
php artisan october:up #安装插件等
```

7.open site url

http：//localhost/winshop


