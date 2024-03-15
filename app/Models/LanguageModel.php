<?php

namespace App\Models;

use App\Models\BlogModel;
use App\Models\ProductModel;
use App\Models\BlogPageModel;
use App\Models\HomePageModel;
use App\Models\AboutPageModel;
use App\Models\QuotePageModel;
use App\Models\DictionaryModel;
use App\Models\FooterPageModel;
use App\Models\HomeSliderModel;
use App\Models\ContactDataModel;
use App\Models\ContactPageModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class LanguageModel extends Model
{
    use SoftDeletes;

    protected $table = 'language';
    protected $primaryKey = 'language_id';
    protected $fillable = [
        "lng_name",
        "lng_flag_filename",
        "lng_code",
        "lng_active_status",     
    ];
}