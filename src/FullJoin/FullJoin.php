<?php

namespace FullJoin;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase as Plugin;

use pocketmine\event\player\PlayerKickEvent;
use pocketmine\Player;

class FullJoin extends Plugin implements Listener {

	public function onPlayerKick(PlayerKickEvent $event){
    $this->owner = $plugin;
		$this->owner->getServer()->getPluginManager()->registerEvents($this, $this->owner);
		if ($event->getReason() == "disconnectionScreen.serverFull") {
			if (!$event->getPlayer()->hasPermission("fulljoin.join"))
				return;
				if(count($this->owner->getServer()->getOnlinePlayers()) >
					$this->owner->getServer()->getMaxPlayers() + 99999999) return;
			}
			$event->setCancelled();
			return;
		
	}
}
