<?php
/*
Plugin Name: Lead Demon Tracking
Plugin URI: https://www.leaddemon.io/plugin/lead-demon.zip
Description: This will add the click tracking code or conversion tracking code if you add ?conversion=1 to the url
Version: 1.0
Author: Furious Panda Software Limited
Author URI: https://www.furiouspanda.io
License: Free
*/

  add_action( 'wp_head', 'ldtmInsertTrackingCode');

  function ldtmInsertTrackingCode(){
    if(ldtmIsConversion()){
      echo '<script src="https://app.leaddemon.io/js/conversion.js"></script>';
    }
    else{
      echo '<script src="https://app.leaddemon.io/js/tracking.js"></script>';
    }
  }

  function ldtmIsConversion(){
    if(isset($_GET['conversion']) AND $_GET['conversion']==1){
      return true;
    }
    return false;
  }
