<?php
namespace System;
use Parser\FileParser;
class Environment extends System
{
    public function setVariables(){
        $this->env=FileParser::parse($this->FILE_ENV,$this->FILE_ENV_DEL);
    }
    public function getVariables(){
        if(!isset($this->env))
            $this->setVariables();
        return $this->env;
    }
}