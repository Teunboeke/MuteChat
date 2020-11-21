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
