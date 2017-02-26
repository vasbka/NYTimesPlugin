<?php
/**
 * Created by PhpStorm.
 * User: romansolomashenko
 * Date: 25.01.17
 * Time: 8:39 PM
 */

namespace includes\common;

//MainMenu
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d9eec25e1752111bd5b7644b602140994fa8d522
use includes\controllers\admin\menu\MainMenu\NYTimesAdminGuestBookController;
use includes\controllers\admin\menu\MainMenu\NYTimesAdminSubMenuController;
//use includes\controllers\admin\menu\MainMenu\NYTimesGuestBookController;
use includes\controllers\admin\menu\MainMenu\NYTimesMainAdminMenuController;
//End MainMenu

//Sub Menu

use includes\controllers\site\NYTimesSiteGuestBookController;
use includes\controllers\admin\menu\SubMenu\NYTimesCommentsMenuController;
use includes\controllers\admin\menu\SubMenu\NYTimesDashboardMenuController;

use includes\controllers\admin\menu\SubMenu\NYTimesManagementMenuController;
use includes\controllers\admin\menu\SubMenu\NYTimesMediaMenuController;
use includes\controllers\admin\menu\SubMenu\NYTimesOptionsMenuController;
use includes\controllers\admin\menu\SubMenu\NYTimesPagesMenuController;
use includes\controllers\admin\menu\SubMenu\NYTimesPluginMenuController;
use includes\controllers\admin\menu\SubMenu\NYTimesPostsMenuController;
use includes\controllers\admin\menu\SubMenu\NYTimesThemeMenuController;
use includes\controllers\admin\menu\SubMenu\NYTimesUsersMenuController;
//End Sub Menu

use includes\controllers\site\NYTimesLastNewsController;
use includes\models\admin\NYTimesGuestBookModel;
<<<<<<< HEAD
=======

=======
use Includes\controllers\admin\menu\MainMenu\NYTimesAdminSubMenuController;
use Includes\controllers\admin\menu\MainMenu\NYTimesMainAdminMenuController;
//End MainMenu

//Sub Menu
use Includes\Controllers\Admin\Menu\SubMenu\NYTimesCommentsMenuController;
use Includes\Controllers\Admin\Menu\SubMenu\NYTimesDashboardMenuController;
use Includes\Controllers\Admin\Menu\SubMenu\NYTimesManagementMenuController;
use Includes\Controllers\Admin\Menu\SubMenu\NYTimesMediaMenuController;
use Includes\Controllers\Admin\Menu\SubMenu\NYTimesOptionsMenuController;
use Includes\Controllers\Admin\Menu\SubMenu\NYTimesPagesMenuController;
use Includes\Controllers\Admin\Menu\SubMenu\NYTimesPluginMenuController;
use Includes\Controllers\Admin\Menu\SubMenu\NYTimesPostsMenuController;
use Includes\Controllers\Admin\Menu\SubMenu\NYTimesThemeMenuController;
use Includes\Controllers\Admin\Menu\SubMenu\NYTimesUsersMenuController;
//End Sub Menu
>>>>>>> d9eec25e1752111bd5b7644b602140994fa8d522

>>>>>>> e8afda74497fbfce08de8132b6cc90558001df3c

class NYTimesLoader
{
    private static $instance = null;

    private function __construct(){

        // is_admin() Условный тег. Срабатывает когда показывается админ панель сайта (консоль или любая
        // другая страница админки).
        // Проверяем в админке мы или нет
        if ( is_admin() ) {
<<<<<<< HEAD
            
=======
<<<<<<< HEAD
            
=======

>>>>>>> e8afda74497fbfce08de8132b6cc90558001df3c
>>>>>>> d9eec25e1752111bd5b7644b602140994fa8d522
            // Когда в админке вызываем метод admin()
            $this->admin();
        } else {

            // Когда на сайте вызываем метод site()
            $this->site();
        }
        $this->all();


    }

    public static function getInstance(){
        if ( null == self::$instance ) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    /**
     * Метод будет срабатывать когда вы находитесь в Админ панеле. Загрузка классов для Админ панели
     */
    public function admin(){
        NYTimesMainAdminMenuController::newInstance();
        NYTimesAdminSubMenuController::newInstance();
        NYTimesDashboardMenuController::newInstance();
        NYTimesPostsMenuController::newInstance();
        NYTimesMediaMenuController::newInstance();
        NYTimesPagesMenuController::newInstance();
        NYTimesCommentsMenuController::newInstance();
        NYTimesPluginMenuController::newInstance();
        NYTimesThemeMenuController::newInstance();
        NYTimesUsersMenuController::newInstance();
        NYTimesManagementMenuController::newInstance();
        NYTimesOptionsMenuController::newInstance();
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d9eec25e1752111bd5b7644b602140994fa8d522

        //work with db
        NYTimesAdminGuestBookController::newInstance();

<<<<<<< HEAD
=======
=======
>>>>>>> e8afda74497fbfce08de8132b6cc90558001df3c
>>>>>>> d9eec25e1752111bd5b7644b602140994fa8d522
    }

    /**
     * Метод будет срабатывать когда вы находитесь Сайте. Загрузка классов для Сайта
     */
    public function site(){
<<<<<<< HEAD
        NYTimesLastNewsController::newInstance();
        NYTimesSiteGuestBookController::newInstance();
<<<<<<< HEAD
=======
=======

>>>>>>> e8afda74497fbfce08de8132b6cc90558001df3c
>>>>>>> d9eec25e1752111bd5b7644b602140994fa8d522
    }

    /**
     * Метод будет срабатывать везде. Загрузка классов для Админ панеле и Сайта
     */
    public function all(){
        NYTimesLocalization::getInstance();
        NYTimesLoaderScript::getInstance();
    }
}