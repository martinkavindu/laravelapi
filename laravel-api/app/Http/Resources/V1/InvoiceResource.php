<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InvoiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request)
    {
        return [
            'id'  => $this->id,
            'CustomerId' =>$this->customer_id,
            'amount'   =>$this->amount,
            'status'  =>$this->status,
            'billedDate' =>$this->billed_date,
            'paidDate' =>$this->paid_date,
        ];
    }
}
