<?php

namespace: JoshuaSing;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use jojoe77777\FormAPI; //FormAPI by jojoe77777 is needed.

class Main extends PluginBase implements Listener(

  public function onEnable(){
    $this->getLogger()->Info("Troll Has Been Enabled!");
    $this->getServer()->getPluginManager()->registerEvent($this, $this);
  }
  
  public function onDisable(){
    $this->getLogger()->Info("Troll Has Been Disabled.");
  }
  
  public function onCommand(CommandSender $sender, Command $cmd, string $label, arry $args) : bool {
      $player->$sender->getPlayer();
      switch($cmd->getName()){
          case "troll":
          $this->mainForm($player);
              break;
      }
      return true;
  }
  
  public function mainForm($player){
      $formapi = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
      $form = $formapi->createSimpleForm(function, (player $event, array $data){
          $result = $data[0];
          $player = $event->getPlayer(); // watch dev.
          if($result == null){
          }
          switch($result){
              case 0: // watch dev.
              $this->trollForm($player);
              return;
              case 1:
              $this->exitForm($player); //exitForm is exit the UI
              return;
      }
      });
      $form->setTitle("Here Is HeadTitle"); // CHANGE!
      $form->setContent("This Is SubTitle"); // CHANGE!
      $form->addButton("This Is TrollForm Button"); // CHANGE!
      $form->addbutton("This Is Exit Button"); // CHANGE!
      $form->sendToPlayer($player);
  
  }
  public function trollForm($player){ //The first Button this is trollform, it's the link to TrollForm
      $formapi = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
      $form = $formapi->createSimpleForm(function, (player $event, array $data){
          $result = $data[0];
          $player = $event->getPlayer(); // watch dev.
          if($result == null){
          }
          switch($result){
              case 0:
              $this->mainForm($player); //like back to menu
              return;
      }
      });
      $form->setTitle("Trollform"); // CHANGE M
      $form->setContent("HI"); // CHANGE!
      $form->addButton("Back To Menu") // CHANGE M
  }
} 
