<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegimeLicence
 * 
 * @property int $ID_LICENCE
 * @property string $LIBELLE_LICENCE
 * 
 * @property Collection|Site[] $sites
 *
 * @package App\Models
 */
class RegimeLicence extends Model
{
	protected $table = 'regime_licence';
	protected $primaryKey = 'ID_LICENCE';
	public $timestamps = false;

	protected $fillable = [
		'LIBELLE_LICENCE'
	];

	public function sites()
	{
		return $this->hasMany(Site::class, 'ID_LICENCE');
	}
}
