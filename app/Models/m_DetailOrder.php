<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_DetailOrder extends Model
{
    use HasFactory;
    protected $table = "order_detail";
    

    public function order()
    {
        return $this->belongsTo(m_order::class);
    }

    public function produk()
    {
        return $this->belongsTo(m_product::class, 'id_produk');
    }
}
