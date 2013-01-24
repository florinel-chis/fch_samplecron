<?php

class Fch_Samplecron_Model_Observer {

    public function doSomething(){
        Mage::log("Yay. doSomething!");
        return true;
    }

}