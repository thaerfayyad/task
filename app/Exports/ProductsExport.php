<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ProductsExport implements FromCollection,WithMapping ,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Product::all();
    }
    public function map($products): array
    {
        $products ->name;
        $products ->description;
        $products ->created_at->toDateString();
    }
    public function headings(): array
    {
       return [
        'name',
        'description',
        'created_at',
    ];

    }
}
