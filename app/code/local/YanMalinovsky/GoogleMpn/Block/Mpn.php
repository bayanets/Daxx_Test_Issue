<?php
/**
 * Create Google Manufacturer Part Number Title
 *
 * @category    YanMalinovsky
 * @package     YanMalinovsky_GoogleMpn
 * @copyright   Copyright (c) 2015 <yan.malinovsky@gmail.com>
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * YanMalinovsky_GoogleMpn_Block_Mpn
 *
 * @category    YanMalinovsky
 * @package     YanMalinovsky_GoogleMpn
 * @author      Yan Malinovsky (yan.malinovsky@gmail.com)
 */
class YanMalinovsky_GoogleMpn_Block_Mpn extends Mage_Core_Block_Template
{
    private $mpn_title;

    public function __construct()
    {
        $this->mpn_title = $this->__('Google MPN');
    }

    public function getMpnTitle()
    {
        return $this->mpn_title;
    }
}