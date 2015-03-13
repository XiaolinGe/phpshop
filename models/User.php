<?php
require_once("activerecord_init.php");

class User extends  ActiveRecord\Model{
   static $table_name = 'user';

}