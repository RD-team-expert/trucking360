<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZoloClientinfo extends Model
{
    use HasFactory;

    // Specify the table name if it's not the plural of the model name
    protected $table = 'zoho_clientinfo';

    // Mass assignable fields
    protected $fillable = [
        'ein',
        'account_number',
        'routing_number',
        'checking_saving_acc',
        'name_of_bank',
        'name_on_acc',
        'legal_b_name',
        'csac_code',
        // 'created_at' is usually automatically handled by Laravel,
        // but you may add it if you explicitly manage timestamps
    ];
}
