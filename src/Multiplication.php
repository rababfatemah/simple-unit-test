<?php

namespace sampleUnitTestExample;

class Multiplication
{
    /**
     * Calculate the multiply
     *
     * @param array $arr Array of numbers
     *
     * @return integer multiply
     */

    public function multiply($arr)

    {
        $pro = 1;
        foreach($arr as  $a){
            $pro = $pro * $a;
        }
        return $pro;
    }
}


