<?php

namespace App\Http\Requests;

use App\Classes\ComputeBusinessLogic;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CommitRequest extends FormRequest
{
    private function rules()
    {
        return request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'hours_worked' => ['required'],
            'hourly_rate' => ['required'],
            'department_id' => ['required', Rule::exists('departments', 'id')]
        ]);
    }

    public function values()
    {
        $attributes = $this->rules();

        $attributes['basic_pay'] = (new ComputeBusinessLogic())
            ->computeBasicPay($attributes['hours_worked'], $attributes['hourly_rate']);
        $attributes['overtime_pay'] = (new ComputeBusinessLogic())
            ->computeOvertimePay($attributes['hours_worked'], $attributes['hourly_rate']);
        $attributes['gross_pay'] = (new ComputeBusinessLogic())
            ->computeGrossPay($attributes['basic_pay'], $attributes['overtime_pay']);
        $attributes['tax'] = (new ComputeBusinessLogic())
            ->computeWithHoldingTax($attributes['gross_pay']);
        $attributes['net_pay'] = (new ComputeBusinessLogic())
            ->computeNetPay($attributes['gross_pay'], $attributes['tax']);

        return $attributes;
    }

}
