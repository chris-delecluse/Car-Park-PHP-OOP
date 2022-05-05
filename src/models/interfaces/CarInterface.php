<?php

interface CarInterface
{
    public function checkIfAudi() : string;
    public function checkCategory() : string;
    public function checkFromCountry() : string;
    public function checkMileage() : string;
    public function run() : int;
}