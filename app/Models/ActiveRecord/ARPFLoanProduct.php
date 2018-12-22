<?php
/**
 * Created by PhpStorm.
 * User: wangyi
 * Date: 2018/12/17
 * Time: 4:48 PM
 */

namespace App\Models\ActiveRecord;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ARPFLoanProduct extends Model
{
    protected $table = 'pf_loan_product';
    const TABLE_NAME = 'pf_loan_product';

    /**
     * X+Y模式的费率模板
     */
    const LOAN_TYPE_XY = 1;

    /**
     * 贴息模式的费率模板
     */
    const LOAN_TYPE_DISCOUNT = 2;
    /**
     * 贴息等额模式的费率模板
     */
    const LOAN_TYPE_EQUAL = 3;

    public static function getLoanProductByProduct($loan_product)
    {
        if (empty($loan_product)) {
            return [];
        }

        return DB::table(self::TABLE_NAME)->select('*')
            ->where('loan_product', $loan_product)
            ->first();
    }
}
