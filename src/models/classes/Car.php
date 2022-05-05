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
            return "Commercial: $this->weight";
        } else {
            return "Utility: $this->weight";
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
            return "Low: $this->mileage km";
        } else if ($this->mileage > 100000 && $this->mileage <= 200000) {
            return "Middle: $this->mileage km";
        } else if ($this->mileage > 200000) {
            return "High: $this->mileage km";
        } else {
            return "Error, it is a car ?";
        }
    }

    public function dateDiff() : int
    {
        $yearDiff = date("Y");
        $carDate = explode("-", $this->registrationDate);

        return $yearDiff - $carDate[0];
    }

    public function run() : int
    {
        $this->mileage += 100000;

        return $this->mileage;
    }

    public function display() : string
    {
        return "<tr>
                <td>$this->label</td>
                <td>{$this->checkIfAudi()}</td>
                <td>$this->model</td>
                <td>$this->color</td>
                <td>$this->registrationDate</td>
                <td>{$this->dateDiff()}</td>
                <td>{$this->checkMileage()}</td>
                <td>{$this->checkCategory()} T</td>
                <td>$this->registrationNumber</td>
                <td>{$this->checkFromCountry()}</td>
            </tr>";
    }
}