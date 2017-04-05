<?php
/**
 * @category Devopensource
 * @package Devopensource_Sendpulse
 * @author Nacho Valera <nacho.valera@devopensource.com>
 * @version 0.1.0
 */
class Devopensource_Sendpulse_Block_Tracking extends Mage_Core_Block_Template {
    protected $_helper;

    public function __construct(array $args)
    {

        $this->_helper = Mage::helper('sendpulse');

        parent::__construct($args);
    }

    public function getHelper(){
        return $this->_helper;
    }

}