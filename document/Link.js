An error occurred

An error occurred during execution; please try again later.

Additional information:

Zend\ServiceManager\Exception\ServiceNotFoundException

File:
D:\www\Zend2_simple\vendor\ZF2\library\Zend\ServiceManager\AbstractPluginManager.php:195
Message:
Zend\Mvc\Controller\ControllerManager::createFromInvokable: failed retrieving "admincontrollerdashboard(alias: Admin\Controller\Dashboard)" via invokable class "Controller\DashboardController"; class does not exist
Stack trace:
#0 D:\www\Zend2_simple\vendor\ZF2\library\Zend\ServiceManager\ServiceManager.php(642): Zend\ServiceManager\AbstractPluginManager->createFromInvokable('admincontroller...', 'Admin\\Controlle...')
#1 D:\www\Zend2_simple\vendor\ZF2\library\Zend\ServiceManager\ServiceManager.php(598): Zend\ServiceManager\ServiceManager->doCreate('Admin\\Controlle...', 'admincontroller...')
#2 D:\www\Zend2_simple\vendor\ZF2\library\Zend\ServiceManager\ServiceManager.php(530): Zend\ServiceManager\ServiceManager->create(Array)
#3 D:\www\Zend2_simple\vendor\ZF2\library\Zend\ServiceManager\AbstractPluginManager.php(116): Zend\ServiceManager\ServiceManager->get('Admin\\Controlle...', false)
#4 D:\www\Zend2_simple\vendor\ZF2\library\Zend\Mvc\Controller\ControllerManager.php(137): Zend\ServiceManager\AbstractPluginManager->get('Admin\\Controlle...', Array, false)
#5 D:\www\Zend2_simple\vendor\ZF2\library\Zend\Mvc\DispatchListener.php(76): Zend\Mvc\Controller\ControllerManager->get('Admin\\Controlle...')
#6 [internal function]: Zend\Mvc\DispatchListener->onDispatch(Object(Zend\Mvc\MvcEvent))
#7 D:\www\Zend2_simple\vendor\ZF2\library\Zend\EventManager\EventManager.php(444): call_user_func(Array, Object(Zend\Mvc\MvcEvent))
#8 D:\www\Zend2_simple\vendor\ZF2\library\Zend\EventManager\EventManager.php(205): Zend\EventManager\EventManager->triggerListeners('dispatch', Object(Zend\Mvc\MvcEvent), Object(Closure))
#9 D:\www\Zend2_simple\vendor\ZF2\library\Zend\Mvc\Application.php(314): Zend\EventManager\EventManager->trigger('dispatch', Object(Zend\Mvc\MvcEvent), Object(Closure))
#10 D:\www\Zend2_simple\public\index.php(21): Zend\Mvc\Application->run()
#11 {main}


Unit Test dùng để làm gì và kinh nghiệm viết Unit Test tốt nhất
https://viblo.asia/vomyphuong93/posts/5WQvzgAXRk3E

http://terraltech.com/magento-database-configuration-file/
http://terraltech.com/network-sniffer-tool-for-linux/
http://terraltech.com/tag/openvz/
http://terraltech.com/monitoring-your-servers-with-nagios-using-nrpe/
http://t3h.vn/lap-trinh-va-csdl/tin-tuc/Kien-Thuc-Lap-Trinh/Cac-tinh-nang-noi-bat-cua-Oracle-12c-448
http://o7planning.org/vi/10211/huong-dan-cai-dat-va-cau-hinh-database-oracle-11g
http://blankapham.com/huong-dan-cai-dat-magento-tren-localhost/
http://blankapham.com/category/lap-trinh-web/magento-tutorial/page/2/
https://www.magentovietnam.com/threads/co-hoi-duoc-dao-tao-magento-chuyen-sau-mien-phi.4924/
http://bssgroup.vn/hoc-magento/
http://vnmage.com/huong-dan-them-mot-muc-vao-menu-trong-magento/
http://kipalog.com/posts/RSS-Reader-viet-bang-Python-Flask
https://www.linux.com/blog/configuring-apache2-run-python-scripts
https://namvuhn.wordpress.com/2015/07/28/java-concurrent-tim-hieu-ve-executor-va-thread-pool/
http://phocode.com/python/django-lap-trinh-web-voi-python-django/
http://phocode.com/python/django/django-ngon-ngu-template/
https://ltvirut.wordpress.com/2014/10/07/lam-the-nao-de-chay-chuong-trinh-cua-ban/
http://thiendia.com/diendan/threads/fshare-kho-phim-babesnetwork-update-thuong-xuyen.928574/

http://4share.vn/search/?search_string=WITH
http://4share.vn/f/2d1914141f181e1c/StepMomLessons-Working%20Up%20A%20Sweat%2014081%20with%20Afrodity-Jenny%20Glam%201080p.mp4
http://4share.vn/f/2c1815151e191d19/StepMomLessons-Watch%20And%20Learn%2013691%20with%20Gina%20Gerson-Kathia%20Nobili%201080p.mp4


Grunt - Javascript task runner
https://viblo.asia/naa/posts/eJ1vOmqJMkby

React.js mà nhiều người đang nhắc đến, thích hợp cho những ứng dụng Web nào?
https://viblo.asia/minhp/posts/d6BAMY03Rnjz

Ways for securing Laravel Application
https://viblo.asia/yasin/posts/NPVMaDygRQOk

Sử dụng RequireJS và AMD để module hóa code JavaScript
https://viblo.asia/naa/posts/znVGLY6jvZOe


#Zend 2
http://www.michaelgallego.fr/blog/2013/05/12/understanding-the-zend-framework-2-event-manager/

Hướng dẫn cài đặt Zend Framework 2, composer, php, github
https://www.youtube.com/watch?v=19pprEWCuOE

https://github.com/ZF-Commons/ZfcUser/blob/master/src/ZfcUser/Authentication/Adapter/Db.php
http://zend-framework-community.634137.n4.nabble.com/ZF2-What-s-the-proper-way-to-register-global-MVC-plugins-td4265227.html

http://framework.zend.com/manual/current/en/modules/zend.authentication.adapter.dbtable.html
https://juriansluiman.nl/article/147/api-header-based-authentication-in-zend-framework-2	=> Hay
http://programming-tips.in/zend-framework-2-login-with-zend-auth/
http://kipalog.com/posts/ServiceManager-trong-ZF2
https://samsonasik.wordpress.com/2013/05/29/zend-framework-2-working-with-authenticationservice-and-db-session-save-handler/
https://samsonasik.wordpress.com/2012/10/23/zend-framework-2-create-login-authentication-using-authenticationservice-with-rememberme/
https://samsonasik.wordpress.com/2013/05/18/zend-framework-2-register-event-listeners-in-configuration-file/
https://samsonasik.wordpress.com/2012/07/27/zend-framework-2-mvcevent-layout-view-get-namespace/
https://www.youtube.com/watch?v=7ALPCIODQRg	=> Simple Authentication (Login) with Zend Framework 2. Add "Remember me" functionality
http://hounddog.github.io/blog/getting-started-with-rest-and-zend-framework-2/	=> REST Zend 2
https://viblo.asia/l3trungkjen/posts/1l0rvmWoMyqA


#CakePHP3
http://nhatminhblog.com/cakephp/cai-dat-cakephp-bang-giao-dien-dong-lenh/
http://nhatminhblog.com/cakephp/cai-dat-cakephp/
http://tanvietblog.com/2012/11/15/web-huong-dan-cach-cai-dat-cakephp-len-hostgator-shared-hosting
http://nongdanit.info/php-mysql/huong-dan-cai-dat-cakephp.html


#Laravel
http://vnfit.com/tag/laravel-tu-a-z/


#WordPress
http://sothichweb.com/article/phan_quyen_trong_wordpress_3.4/62bc40e
http://sothichweb.com/article/mot-so-doan-code-toi-uu-ket-qua-tim-kiem-trong-wordpress/504b4da
http://tocdoviet.vn/tai-lieu/Tai-lieu-Ma-Nguon/Toi-uu-hoa-toc-do-cho-WordPress-108/

#Docker
http://kipalog.com/tags/Docker


#AWS
http://www.michaelgallego.fr/blog/2015/03/30/micro-service-architecture-using-aws/
http://www.michaelgallego.fr/

#Unit Test
https://viblo.asia/vomyphuong93/posts/5WQvzgAXRk3E

#Libs
https://yinyangit.wordpress.com/2012/06/29/php-thu-vien-minify-toi-uu-kich-thuoc-cac-tap-tin-js-css/
https://viblo.asia/minhp/posts/NznmMdkQRr69	=> Một coder không có kĩ năng design cũng có thể tạo ra ứng dụng Web với 32 công cụ tiện lợi sau
https://viblo.asia/minhp/posts/wpVYRP2kG4ng	=> Những nguyên tắc, những định luật của lập trình mà chúng ta nên có sẵn trong đầu
https://viblo.asia/minhp/posts/d6BAMY03Rnjz => React.js mà nhiều người đang nhắc đến, thích hợp cho những ứng dụng Web nào?


#Oracle with oci8 php
https://blogs.oracle.com/opal/entry/using_php_oci8_with_32-bit_php
http://www.oracle.com/technetwork/articles/technote-php-instant-084410.html
http://www.oracle.com/technetwork/database/features/instant-client/index-097480.html
http://www.oracle.com/technetwork/topics/winx64soft-089540.html
http://stackoverflow.com/questions/27774337/how-to-use-oracle-client-11-2-with-php-xampp-on-win7-x64
https://blogs.oracle.com/opal/entry/using_php_oci8_with_32-bit_php
https://docs.oracle.com/database/121/LNOCI/oci01int.htm#LNOCI16114
http://stackoverflow.com/questions/12820429/php-5-3-1-not-loading-php-oci8-dll-on-windows
https://pecl.php.net/package/oci8/2.0.8/windows

http://stackoverflow.com/questions/29009665/how-to-enable-oci-in-xampp-5-6-3

Laravel5
vendor\laravel\framework\src\Illuminate\Foundation\Application.php

Magento1.9
app\Mage.php
app\code\core\Mage\Core\function.php
app\code\core\Mage\Connect\controllers\Admin\html\Extension\CustomerController.php
app\code\core\Mage\Install\Model\Installer\Abstract.php
index.php
app\code\core\Mage\Core\Model\App.php
app\code\core\Mage\Core\Model\Config.php

https://localhost:1158/em


http://www.orware.com/blog/tips-and-how-tos/oracle/oracle-oci8-php-installation
http://www.slideshare.net/myloveforyounqt/php-vi-oracle-database
https://hongvuong.wordpress.com/2013/08/23/cau-hinh-website-php-su-dung-oracle-database/
http://www.hoclaravel.com/search/label/Laravel%20Oracle%20with%20OCI%208
https://www.devside.net/wamp-server/connect-wamp-server-to-oracle-with-php-php_oci8_11g-dll
https://docs.moodle.org/31/en/Installing_Oracle_for_PHP

#Xdebug
https://www.sitepoint.com/debugging-and-profiling-php-with-xdebug/
https://xdebug.org/docs/index.php?action=display

http://www.stephenrhoades.com/?cat=4
http://how.vndemy.com/background/1484-thong-thoi-gian-thuc-la-gi/
https://framework.zend.com/manual/1.10/en/zend.log.writers.html