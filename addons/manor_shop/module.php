<?php
 if (!defined('IN_IA')){
    exit('Access Denied');
}
class manor_shopModule extends WeModule{
    public function fieldsFormDisplay($rid = 0){
    }
    public function fieldsFormSubmit($rid = 0){
        return true;
    }
    public function settingsDisplay($settings){
    }
}
