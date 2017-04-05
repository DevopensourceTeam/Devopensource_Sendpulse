<?php

class Devopensource_Sendpulse_IndexController extends Mage_Core_Controller_Front_Action{
    public function indexAction(){
        echo "debug something here";
        Mage::log('hello: '. Mage::getStoreConfig('sendpulse/general/active', Mage::app()->getStore()));
    }
}