<?php

/**
 * @copyright Copyright (c) 2018 Oparand Ltd - Synergixe
 *
 * @version v0.0.1
 *
 * @author Ifeora Okechukwu (https://twitter.com/isocroft)
 *
 * @license MIT
 *
 */
 
 
 class LaunchRouter {
  
   protected $;
     
     public function __construct(){
      
     }
 }


/*

$toggle->launch("new_feature")->andLock(); // retrieves the manager | launches a feature and locks it

$toggle->feature("old_feature")->getOrCreate(); // instantiates a feature | creating a new feature if it's not available


Morpheec::aim("markets")->using([
'Lagos', 'Abuja'
])->atFeature("incomplete_feature"); // instantiates an aim | creates a new aim

Morpheec::defineStrategy("markets", function(LaunchContext $context){
   
   if($context->hasUser()){
      $ip = $context->getClientRequest()->ip();
   }
   
   $belongsToMarket = in_array(
          $context->getAim()
                  ->getUsageData(), 
                  $context->getUser()->market
          );
       
   return $context->getUser()->isAdmin() || $belongsToMarket;
})->for("nice_feature"); // instantiates a strategy


|$this->getStrategy()

*/
