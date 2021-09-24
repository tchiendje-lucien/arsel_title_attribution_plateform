<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Publication
 * 
 * @property int $ID_PUB
 * @property int $ID_SITE
 * @property Carbon $DATE_PUB
 * 
 * @property Site $site
 *
 * @package App\Models
 */
class Publication extends Model
{
	protected $table = 'publication';
	protected $primaryKey = 'ID_PUB';
	public $timestamps = false;

	protected $casts = [
		'ID_SITE' => 'int'
	];

	protected $dates = [
		'DATE_PUB'
	];

	protected $fillable = [
		'ID_SITE',
		'DATE_PUB'
	];

	public function site()
	{
		return $this->belongsTo(Site::class, 'ID_SITE');
	}
}
