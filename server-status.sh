#!/usr/bin


echo '=============== top ====================='
#[php]
/etc/init.d/php7.0-fpm status
# (start|stop|restart)
echo '========================================='
#[mysql]
sudo service mysql status
echo '========================================='
#[nginx]
#sudo nginx status
ps -ef | grep nginx
echo '=============== bottom =================='
