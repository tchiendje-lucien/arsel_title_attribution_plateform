<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RegineActivite
 * 
 * @property int $ID_ACTIVITE
 * @property string $LIBELLE_ACTIVITE
 * 
 * @property Collection|Site[] $sites
 *
 * @package App\Models
 */
class RegineActivite extends Model
{
	protected $table = 'regine_activite';
	protected $primaryKey = 'ID_ACTIVITE';
	public $timestamps = false;

	protected $fillable = [
		'LIBELLE_ACTIVITE'
	];

	public function sites()
	{
		return $this->hasMany(Site::class, 'ID_ACTIVITE');
	}
}
