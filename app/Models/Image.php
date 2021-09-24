<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Image
 * 
 * @property int $ID_IMAGE
 * @property int $ID_SITE
 * @property boolean $LIBELLE_IMAGE
 * 
 * @property Site $site
 *
 * @package App\Models
 */
class Image extends Model
{
	protected $table = 'image';
	protected $primaryKey = 'ID_IMAGE';
	public $timestamps = false;

	protected $casts = [
		'ID_SITE' => 'int',
		'LIBELLE_IMAGE' => 'boolean'
	];

	protected $fillable = [
		'ID_SITE',
		'LIBELLE_IMAGE'
	];

	public function site()
	{
		return $this->belongsTo(Site::class, 'ID_SITE');
	}
}
