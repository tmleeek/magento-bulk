<?php
class Extendware_EWAlsoViewed_Block_Checkout_Cart_Crosssell extends Mage_Checkout_Block_Cart_Crosssell
{
	protected $blockType = 'viewed';
	protected $skipAlsoViewed = false;
	protected $skipAlsoBought = true;
	
	public function getItems() {
    	$items = $this->getData('items');
        if (is_null($items)) {
        	// you can override this and set the exact item collection you want instead of calling parent
        	// Refer to the user guide for the api you can use to get the also viewed / bought collection
        	return parent::getItems();
       	}
       	return $items;
    }
    
	protected function callDefaultGetItems($caller) {
		return array();
	}
}
