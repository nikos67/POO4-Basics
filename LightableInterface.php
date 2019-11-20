<?php

interface LightableInterface
{
    /**
     * @return bool
     */
    public function switchOn();
    /**
     * @return bool
     */
    public function switchOff();
}