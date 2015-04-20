<?php

class Mygento_Cdn_Helper_Data extends Mage_Core_Helper_Abstract
{

    public function addLog($text)
    {
        if (Mage::getStoreConfig('mycdn/general/debug')) {
            Mage::log($text, null, 'mycdn.log');
        }
    }

    public function getRelativeFile($file)
    {
        return ltrim(str_replace(Mage::getBaseDir('media'), '', $file), '/');
    }
}
