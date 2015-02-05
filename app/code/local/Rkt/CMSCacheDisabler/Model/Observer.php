<?php
/**
 * Extension
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * DISCLAIMER
 *
 * This extension is developed for study purpose and it is tested on 
 * Magento 1.9.1 version. You can find the source for this extension
 * at http://magento.stackexchange.com/questions/54192/
 * disabel-cache-in-cms-page-using-a-custom-module
 *
 * @category   Custom Extension
 * @package    Rkt_CMSCacheDisabler
 * @author     programmer_rkt
 * @copyright  Copyright (c) 2015(http://www.rktinaction.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */


/**
 * Observer of Rkt_CMSCacheDisabler module
 * 
 */
class Rkt_CMSCacheDisabler_Model_Observer
{

	/**
	 * Use to disable full page cache for a cms page.
	 * 
	 * @param  Varien_Event_Observer $observer
	 * @return object Rkt_CMSCacheDisabler_Model_Observer
	 */
    public function processPreDispatch(Varien_Event_Observer $observer)
    {
        $action = $observer->getEvent()->getControllerAction()->getFullActionName();

        //if you are listening to the event `controller_action_predispatch_cms_page_view`,
        //then you don't want to use this condition. If you are using any another, then
        //I recommend to include this condition.
        if ($action == 'cms_page_view') {
            $cache = Mage::app()->getCacheInstance();

            // Tell Magento to 'ban' the use of FPC for this request
            $cache->banUse('full_page');
       }
       return $this;
   }
}
