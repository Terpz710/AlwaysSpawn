<?php

namespace philipshilling\alwaysspawn;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerLoginEvent;
use pocketmine\plugin\PluginBase as Plugin;

class Loader extends Plugin implements Listener{
	public function onEnable(): void{
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}

	public function onPlayerJoin(PlayerJoinEvent $event){
		$event->getPlayer()->teleport($this->getServer()->getWorldManager()->getDefaultWorld()->getSafeSpawn());
	}
}
