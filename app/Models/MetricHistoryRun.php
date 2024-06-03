<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MetricHistoryRun extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'strategy_id',
        'accesibility_metric',
        'pwa_metric',
        'performance_metric',
        'seo_metric',
        'best_practices_metric',
      ];

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'url' => 'NO_URL', //Known default in case of erroneous creation 
    ];

    /**
    * Get the strategy for the metric.
    */
    public function strategy(): BelongsTo
    {
        return $this->belongsTo(Strategy::class);
    }

}
