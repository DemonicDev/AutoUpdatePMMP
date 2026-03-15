<?php

namespace AutoUpdater;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\server\UpdateNotifyEvent;


class main extends PluginBase implements Listener{

  public function onLoad(): void{
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }

  public function onEnable(): void{
    // fire an Repeating Task to check for Updates?
    return;
    $this->getServer()->getUpdater()->doCheck();
  }

  public function onUpdateEvent(UpdateNotifyEvent $ev){
    
    //copy a backup of current pmmp in backup folder / or backup the server

    //download the phar and replace it
     $url = $this->getServer()->getUpdater()->getUpdateInfo()?->download_url;
  /**
   if(!file_exists($this->getDataFolder() . "backup")){
			@mkdir($this->getDataFolder()."backup");
		}
		if(!@copy("https://raw.githubusercontent.com/DemonicDev/testentity/main/boar/boar.geo.json", $this->getDataFolder()."\\boar\\boar.geo.json")){
			$this->getServer()->getLogger()->info(tf::RED. " THERE WAS AN ERROR WITH DOWNLOADING  PMMP"); 
      return;
		//	$this->getServer()->getLogger()->info(tf::GREEN. "PLS CHECK YOUR INTERNET CONNECTION AND RESTART THE SERVER"); 
		}
    */
    //more coming...
    
    //check in config if user wants to restart on update 

    //check if its save to restart

    //restart server
  }
}
