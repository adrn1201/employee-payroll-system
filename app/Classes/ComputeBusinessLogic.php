<?php

namespace App\Classes;

class ComputeBusinessLogic
{
    public function computeBasicPay ($hoursWorked, $hourlyRate)
    {
        return (($hoursWorked <= 40)) ? $hoursWorked * $hourlyRate :
             40 * $hourlyRate;
    }

    public function computeOvertimePay ($hoursWorked, $hourlyRate)
    {
        return (($hoursWorked > 40)) ? ($hoursWorked - 40) * 1.5 * $hourlyRate :
            0;
    }

    public function computeGrossPay ($basicPay, $overtimePay)
    {
        return $basicPay + $overtimePay;
    }

    public function computeWithHoldingTax ($grossPay)
    {
        return $grossPay * 0.1;
    }

    public function computeNetPay ($grossPay, $tax)
    {
        return $grossPay - $tax;
    }
}
