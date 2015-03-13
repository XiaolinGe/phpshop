<?php
require_once("activerecord_init.php");

class Product extends  ActiveRecord\Model{
   static $table_name = 'product';

}