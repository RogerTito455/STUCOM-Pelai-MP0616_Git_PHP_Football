<?php

namespace WorldCup;

/**
 * Class to define the team
 */
class Team {
    public $name;
    public $coach;
    public $players; // array of Player objects

    public function __construct($name) {
        $this->name = $name;
    }

    public function play() {
        echo "playing\n";
    }

    public function attack() {
        echo "attacking\n";
    }

    /**
     * Get the name
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set the name
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * Set the coach
     */
    public function getCoach() {
        return $this->coach;
    }

    /**
     * Get the coach
     */
    public function setCoach($coach) {
        $this->coach = $coach;
    }

    /**
     * Get the players
     */
    public function getPlayers() {
        return $this->players;
    }

    /**
     * Set the players
     */
    public function setPlayers($players) {
        $this->players = $players;
    }
}
