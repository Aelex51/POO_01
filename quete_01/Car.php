<?php
class Car
{
   private int $nbWheels;
   private int $currentCarSpeed;
   private string $color;
   private int $nbSeats;
   private string $energy;
   private string $energyLevel;

   public function __construct(string $color, int $nbSeats, string $energy)
   {
       $this->color = $color;
       $this->nbSeats = $nbSeats;
       $this->energy = $energy;
   }


    public function start(): string
   {
        return "Start engine! <br />";
   }

   public function forward(): string
   {
       $this->currentCarSpeed = 15;
   
       return "Go !";
   }
   
   public function brake(): string
   {
      $sentence = "";
      while ($this->currentCarSpeed > 0) {
          $this->currentCarSpeed--;
          $sentence .= "Brake !!!";
      }
      $sentence .= "I'm stopped !";
      return $sentence;
   }

   public function getColor(): string 
   {
   return $this->color;
   }

    public function getCurrentCarSpeed(): int
   {
   return $this->currentCarSpeed;
   }

   public function setCurrentCarSpeed(int $currentCarSpeed)
   {
    return $this->currentCarSpeed = $currentCarSpeed;
   }

   public function getEnergyLevel(): int
   {
   return $this->energyLevel;
   }

   public function setEnergyLevel(int $energyLevel)
   {
    return $this->energyLevel = $energyLevel;
   }

}
