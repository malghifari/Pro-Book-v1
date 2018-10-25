<?php
/**
 * Created by PhpStorm.
 * User: daandeey
 * Date: 10/25/2018
 * Time: 1:27 PM
 */
    if (!class_exists('Config'))	{
        include '../Config/Config.php';
    }
    include Config::DOCUMENT_ROOT . '/Model/Database.php';

    class HistoryController {
        public static function fetchOrder() {
            $query = "SELECT `id-book`, title, avatar, `id-order`, username, date, quantity, `order-no`, flag 
                      FROM book natural join `order`
                      WHERE username ='". $_COOKIE['username']."'";
            $orders = Database::exec($query);
            return $orders;
        }
    }
?>