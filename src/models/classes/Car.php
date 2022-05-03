<?php

namespace models\classes;

use CarData;
use CarInterface;

class Car extends CarData implements CarInterface
{
    public function checkIfAudi() : string
    {
        if ($this->label == "audi" || $this->label == "Audi" || $this->label == "AUDI") {
            return "Reserved";
        } else {
            return "Free";
        }
    }

    public function checkCategory() : string
    {
        if ($this->weight < 3.50) {
            return "Commercial";
        } else {
            return "Utility";
        }
    }

    public function checkFromCountry() : string
    {
        if (str_contains($this->registrationNumber, "BE") || str_contains($this->registrationNumber, "Be") || str_contains($this->registrationNumber, "be")) {
            return "Registered in: Belgium";
        } else if (str_contains($this->registrationNumber, "FR") || str_contains($this->registrationNumber, "Fr") || str_contains($this->registrationNumber, "fr")) {
            return "Registered in: France";
        } else if (str_contains($this->registrationNumber, "DE") || str_contains($this->registrationNumber, "De") || str_contains($this->registrationNumber, "de")) {
            return "Registered in: Germany";
        } else {
            return "Error: dont know where the car from";
        }
    }

    public function checkMileage() : string
    {
        if ($this->mileage < 100000) {
            return "Low: $this->mileage";
        } else if ($this->mileage > 100000 && $this->mileage <= 200000) {
            return "Middle: $this->mileage";
        } else if ($this->mileage > 200000) {
            return "High: $this->mileage";
        } else {
            return "Error, it is a car ?";
        }
    }

    public function checkAge() : int
    {
        $timeDiff = $this->dateDiff();

        return ($timeDiff / 365);
    }

    private function dateDiff() : int
    {
        $timeStart = explode("-", $this->registrationDate);
        $timeNow = date("d-m-y");
        $timeEnd = explode("-", $timeNow);

        $diff = mktime(0, 0, 0, $timeEnd[1], $timeEnd[2], $timeEnd[0]) - mktime(0, 0, 0, $timeStart[1], $timeStart[2], $timeStart[0]);

        return (($diff / 86400)+1);
    }
}