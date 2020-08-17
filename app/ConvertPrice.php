<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use NumberFormatter;

class ConvertPrice extends Model
{
    private static $fmt;
    public static function formatMoney($money){
        if(self::$fmt == null) {
            self::$fmt = numfmt_create( 'vi_VN', NumberFormatter::CURRENCY);
        }
        return numfmt_format_currency(self::$fmt, $money, 'VND');
    }
}
