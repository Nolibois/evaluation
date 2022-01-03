<?php

class Personnage {

  public string $name;
  private int $health_points;
  private int $attack;
  private int $defense;
  private int $mana;
  public array $items;

  public function __construct(
    string $name, 
    string $health_points, 
    int $attack, 
    int $defense, 
    int $mana, 
    array $items
    ){

      $this->name = $name;
      $this->health_points = $health_points;
      $this->attack = $attack;
      $this->defense = $defense;
      $this->mana = $mana;
      $this->items = $items;
  }


  /**
   * Return value of name :string
   */
  public function getName(): string
  {
    return $this->name;
  }

  /**
   * Change value of name
   */
  public function setName(string $name): void
  {
    $this->name = $name;
  }

  /**
   * Return value of health_points :int
   */
  public function getHealthPoints(): int
  {
    return $this->health_points;
  }

  /**
   * Change value of health_points
   */
  public function setHealthPoints(int $health_points): void
  {
    $this->health_points = $health_points;
  }

  /**
   * Return value of attack :int
   */
  public function getAttack(): int
  {
    return $this->attack;
  }

  /**
   * Change value of attack
   */
  public function setAttack(int $attack): void
  {
    $this->attack = $attack;
  }

    /**
   * Return value of defense :int
   */
  public function getDefense(): int
  {
    return $this->defense;
  }

  /**
   * Change value of defense
   */
  public function setDefense(int $defense): void
  {
    $this->defense = $defense;
  }

  /**
   * Return value of mana :int
   */
  public function getMana(): int
  {
    return $this->mana;
  }

  /**
   * Change value of mana
   */
  public function setMana(int $mana): void
  {
    $this->mana = $mana;
  }

    /**
   * Return value of items :array
   */
  public function getItems(): array
  {
    return $this->items;
  }

  /**
   * Change value of items
   */
  public function setItems(string $items): void
  {
    $this->items = $items;
  }
}