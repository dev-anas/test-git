<?php 
class Test 
{

    public  $total;
    public function somme(int $a, int $b)
    {
        $this->total = $a + $b;
        return $this;
    }

    public function diff(int $a, int $b)
    {
        $this->total = $a + $b;
        return $this;
    }

    public function test3(int $a, int $b)
    {
        $this->total = $a + $b;
        return $this;
    }
}