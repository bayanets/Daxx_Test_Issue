<?php
/**
 * Create Google Manufacturer Part Number 'google_mpn' Attribute.
 *
 * @category    YanMalinovsky
 * @package     YanMalinovsky_GoogleMpn
 * @copyright   Copyright (c) 2015 <yan.malinovsky@gmail.com>
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

/**
 * Mage_Core_Model_Resource_Setup
 *
 * @category    YanMalinovsky
 * @package     YanMalinovsky_GoogleMpn
 * @author      Yan Malinovsky (yan.malinovsky@gmail.com)
 */

$installer = $this;
$catalogInstaller = Mage::getResourceModel('catalog/setup', 'catalog_setup');
$installer->startSetup();

$catalogInstaller->addAttribute(Mage_Catalog_Model_Product::ENTITY, 'google_mpn', array(
    'group'                      => 'General',
    'type'                       => 'varchar',
    'label'                      => 'Google Manufacturer Part Number (MPN)',
    'input'                      => 'text',
    'global'                     => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_WEBSITE,
    'visible'                    => true,
    'required'                   => true,
    'user_defined'               => true,
    'searchable'                 => true,
    'unique'                     => true,
    'filterable'                 => false,
    'comparable'                 => false,
    'visible_on_front'           => false,
    'visible_in_advanced_search' => false,
    'used_in_product_listing'    => false
));

$installer->endSetup();


