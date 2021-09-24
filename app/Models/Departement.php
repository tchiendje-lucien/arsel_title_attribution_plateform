<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Departement
 * 
 * @property int $ID_DEPARTEMENT
 * @property int $ID_REGION
 * @property int $LIBELLE_DEPATEMENT
 * 
 * @property Region $region
 * @property Collection|Arrondissement[] $arrondissements
 *
 * @package App\Models
 */
class Departement extends Model
{
	protected $table = 'departements';
	protected $primaryKey = 'ID_DEPARTEMENT';
	public $timestamps = false;

	protected $casts = [
		'ID_REGION' => 'int',
		'LIBELLE_DEPATEMENT' => 'int'
	];

	protected $fillable = [
		'ID_REGION',
		'LIBELLE_DEPATEMENT'
	];

	public function region()
	{
		return $this->belongsTo(Region::class, 'ID_REGION');
	}

	public function arrondissements()
	{
		return $this->hasMany(Arrondissement::class, 'ID_DEPARTEMENT');
	}
}
