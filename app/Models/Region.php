<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Region
 * 
 * @property int $ID_REGION
 * @property string $LIBELLE_REGION
 * 
 * @property Collection|Departement[] $departements
 *
 * @package App\Models
 */
class Region extends Model
{
	protected $table = 'regions';
	protected $primaryKey = 'ID_REGION';
	public $timestamps = false;

	protected $fillable = [
		'LIBELLE_REGION'
	];

	public function departements()
	{
		return $this->hasMany(Departement::class, 'ID_REGION');
	}
}
