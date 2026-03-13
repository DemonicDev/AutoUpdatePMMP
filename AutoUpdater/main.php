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

    //check in config if user wants to restart on update 

    //check if its save to restart

    //restart server
  }
}
