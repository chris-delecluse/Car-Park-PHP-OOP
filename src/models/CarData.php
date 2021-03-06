<?php

class CarData
{
    protected string $registrationNumber;
    protected string $registrationDate;
    protected string $model;
    protected string $label;
    public string $color;
    public float $weight;
    public int $mileage;

    public function __construct(array $dataCarArr)
    {
        $this->label = $dataCarArr['label'];
        $this->model = $dataCarArr['model'];
        $this->color = $dataCarArr['color'];
        $this->mileage = $dataCarArr['mileage'];
        $this->weight = $dataCarArr['weight'];
        $this->registrationNumber = $dataCarArr['registrationNumber'];
        $this->registrationDate = $dataCarArr['registrationDate'];
    }
}