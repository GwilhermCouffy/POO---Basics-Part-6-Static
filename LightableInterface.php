<?php

interface LightableInterface
{
    public function switchon(): string;
    public function switchoff(): string;
}