<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegimeConcession
 * 
 * @property int $ID_CONCESSION
 * @property string $LIBELLE_CONCESSION
 * 
 * @property Collection|Site[] $sites
 *
 * @package App\Models
 */
class RegimeConcession extends Model
{
	protected $table = 'regime_concession';
	protected $primaryKey = 'ID_CONCESSION';
	public $timestamps = false;

	protected $fillable = [
		'LIBELLE_CONCESSION'
	];

	public function sites()
	{
		return $this->hasMany(Site::class, 'ID_CONCESSION');
	}
}
