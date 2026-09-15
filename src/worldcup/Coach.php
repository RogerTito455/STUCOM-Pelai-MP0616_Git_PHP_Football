<?php

namespace WorldCup;

class Coach extends Person {
    privated $style; 

    public function train() {
        echo "train\n";
    }

    /**
     * Get the style
     */
    public function getStyle() {
        return $this->style;
    }

    /**
     * Set the style
     */
    public function setStyle($style) {
        $this->style = $style;
    }
}
