<?php

class CropRatio
{
    private $totalWeight;
    private $crops = [];

    public function add($name, $cropWeight)
    {
        if(!array_key_exists($name, $this->crops)) {
            $this->crops[$name] = $cropWeight;
        } else {
            $this->crops[$name] += $cropWeight;
        }
        $this->totalWeight += $cropWeight;
    }

    public function proportion($name)
    {
        echo "<pre>";
        print_r($this->crops[$name]);
        echo "</pre>";
        echo "<pre>";
        print_r($this->totalWeight);
        echo "</pre>";
        return $this->crops[$name] / $this->totalWeight;
    }
}

$cropRatio = new CropRatio;
$cropRatio->add('Wheat', 4);
$cropRatio->add('Wheat', 5);
$cropRatio->add('Rice', 1);

echo "Wheat: " . $cropRatio->proportion('Wheat');