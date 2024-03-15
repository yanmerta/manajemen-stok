<?php

namespace App\Models;

use App\Models\DetailModel;
use App\Models\LanguageModel;
use App\Models\ProductAndServiceModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ListModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'list_id';
    protected $table = 'list';
    protected $guarded = ['list_id'];

    public function detailList(): HasMany {
        return $this->hasMany(ListModel::class);
    }

    public function productAndService()
    {
        return $this->belongsTo(ProductAndServiceModel::class, 'pdtsvc_id');
    }
    public function detail()
    {
        return $this->hasOne(DetailModel::class, 'pdtsvc_id');
    }
    // public function language()
    // {
    //     return $this->belongsTo(LanguageModel::class, 'language_id');
    // }
    // public function quote()
    // {
    //     return $this->hasMany(QuotePersonalModel::class, 'product_id');
    // }
}
