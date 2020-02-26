<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $primaryKey = 'flight_id';

    public $incrementing = false;

    /**
     * 表明模型是否应该被打上时间戳
     * 不自动更新 updated_at
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * 可以被批量赋值的属性.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * 不能被批量赋值的属性
     * 
     * 黑名单属性
     *
     * @var array
     */
    protected $guarded = ['price'];

    //
    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'my_flights';
}
