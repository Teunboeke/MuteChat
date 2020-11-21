<?php

declare(strict_types=1);

namespace Teunboeke\MuteChat;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use function str_repeat;

class MuteChat extends PluginBase implements Listener{
 
public function onEnable() : void{
          $this->getServer()->getPluginManager()->registerEvents($this, $this);
      }
 
public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
          $action = $args[0] ?? "";
          if($action === "on" || $action === "off"){
            $config = $this->getConfig(); 
            $config->set("global-mute", $action === "on"); 
            if($action === "on" && $config->get("clear-chat") === true){  
                $this->getServer()->broadcastMessage(str_repeat("\n", 100));
            }
            $this->getServer()->broadcastMessage($config->get("turned-" . $action, "Global mute has been toggled " . $action . "."));
           
           return true;
                   }
