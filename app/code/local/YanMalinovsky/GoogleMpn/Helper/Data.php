<?php
/**
 * Get Google Manufacturer Part Number Title
 *
 * @category    YanMalinovsky
 * @package     YanMalinovsky_GoogleMpn
 * @copyright   Copyright (c) 2015 <yan.malinovsky@gmail.com>
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * YanMalinovsky_GoogleMpn_Helper_Data
 *
 * @category    YanMalinovsky
 * @package     YanMalinovsky_GoogleMpn
 * @author      Yan Malinovsky (yan.malinovsky@gmail.com)
 */
class YanMalinovsky_GoogleMpn_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function getGoogleMpnTitle()
    {
        return Mage::getBlockSingleton('yanmalinovsky_googlempn/mpn')->getMpnTitle();
    }
}