<?php

class Person {
    private ?int $age = null;

    public function __construct(?int $age = null) {
        $this->age = $age;
    }
    public function getAge(): ?int {
        return $this->age;
    }

    public function setAge(?int $age): void {
        $this->age = $age;
    }

    public function run(): void {
        echo "running\n";
    }
}
