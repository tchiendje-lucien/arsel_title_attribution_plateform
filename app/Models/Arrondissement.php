<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Arrondissement
 * 
 * @property int $ID_ARRONDISSELENT
 * @property int $ID_DEPARTEMENT
 * @property string $LIBELLE_ARRONDISSELENT
 * 
 * @property Departement $departement
 * @property Collection|Site[] $sites
 *
 * @package App\Models
 */
class Arrondissement extends Model
{
	protected $table = 'arrondissements';
	protected $primaryKey = 'ID_ARRONDISSELENT';
	public $timestamps = false;

	protected $casts = [
		'ID_DEPARTEMENT' => 'int'
	];

	protected $fillable = [
		'ID_DEPARTEMENT',
		'LIBELLE_ARRONDISSELENT'
	];

	public function departement()
	{
		return $this->belongsTo(Departement::class, 'ID_DEPARTEMENT');
	}

	public function sites()
	{
		return $this->hasMany(Site::class, 'ID_ARRONDISSELENT');
	}
}
