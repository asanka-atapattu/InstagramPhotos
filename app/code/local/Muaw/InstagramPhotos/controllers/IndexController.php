<?php
class Muaw_InstagramPhotos_IndexController extends Mage_Core_Controller_Front_Action{
    public function IndexAction() {
      
	  $this->loadLayout();   
	  $this->getLayout()->getBlock("head")->setTitle($this->__("Instagram Photos"));
	        $breadcrumbs = $this->getLayout()->getBlock("breadcrumbs");
      $breadcrumbs->addCrumb("home", array(
                "label" => $this->__("Home Page"),
                "title" => $this->__("Home Page"),
                "link"  => Mage::getBaseUrl()
		   ));

      $breadcrumbs->addCrumb("instagram photos", array(
                "label" => $this->__("Instagram Photos"),
                "title" => $this->__("Instagram Photos")
		   ));

      $this->renderLayout(); 
	  
    }
}