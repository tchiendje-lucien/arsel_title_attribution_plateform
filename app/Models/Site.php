<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Site
 * 
 * @property int $ID_SITE
 * @property int $ID_LICENCE
 * @property int $ID_CONCESSION
 * @property int $ID_ACTIVITE
 * @property int $ID_USER
 * @property int $ID_ARRONDISSELENT
 * @property int $ID_EXPLOITANT
 * @property int $ID_SOURCE_ENR
 * @property string $LIBELLE_SITE
 * @property string $DESCRIPTION_SITE
 * @property float $CAPACITE_SITE
 * @property string $LICALITE_SITE
 * @property Carbon $DATE_CREATE
 * @property Carbon|null $DATE_UPDATE
 * 
 * @property Arrondissement $arrondissement
 * @property RegimeConcession $regime_concession
 * @property RegimeLicence $regime_licence
 * @property RegineActivite $regine_activite
 * @property SourceEnergie $source_energie
 * @property TypeExploitant $type_exploitant
 * @property User $user
 * @property Collection|DemanderTitre[] $demander_titres
 * @property Collection|Image[] $images
 * @property Collection|Publication[] $publications
 *
 * @package App\Models
 */
class Site extends Model
{
	protected $table = 'sites';
	protected $primaryKey = 'ID_SITE';
	public $timestamps = false;

	protected $casts = [
		'ID_LICENCE' => 'int',
		'ID_CONCESSION' => 'int',
		'ID_ACTIVITE' => 'int',
		'ID_USER' => 'int',
		'ID_ARRONDISSELENT' => 'int',
		'ID_EXPLOITANT' => 'int',
		'ID_SOURCE_ENR' => 'int',
		'CAPACITE_SITE' => 'float'
	];

	protected $dates = [
		'DATE_CREATE',
		'DATE_UPDATE'
	];

	protected $fillable = [
		'ID_LICENCE',
		'ID_CONCESSION',
		'ID_ACTIVITE',
		'ID_USER',
		'ID_ARRONDISSELENT',
		'ID_EXPLOITANT',
		'ID_SOURCE_ENR',
		'LIBELLE_SITE',
		'DESCRIPTION_SITE',
		'CAPACITE_SITE',
		'LICALITE_SITE',
		'DATE_CREATE',
		'DATE_UPDATE'
	];

	public function arrondissement()
	{
		return $this->belongsTo(Arrondissement::class, 'ID_ARRONDISSELENT');
	}

	public function regime_concession()
	{
		return $this->belongsTo(RegimeConcession::class, 'ID_CONCESSION');
	}

	public function regime_licence()
	{
		return $this->belongsTo(RegimeLicence::class, 'ID_LICENCE');
	}

	public function regine_activite()
	{
		return $this->belongsTo(RegineActivite::class, 'ID_ACTIVITE');
	}

	public function source_energie()
	{
		return $this->belongsTo(SourceEnergie::class, 'ID_SOURCE_ENR');
	}

	public function type_exploitant()
	{
		return $this->belongsTo(TypeExploitant::class, 'ID_EXPLOITANT');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'ID_USER');
	}

	public function demander_titres()
	{
		return $this->hasMany(DemanderTitre::class, 'ID_SITE');
	}

	public function images()
	{
		return $this->hasMany(Image::class, 'ID_SITE');
	}

	public function publications()
	{
		return $this->hasMany(Publication::class, 'ID_SITE');
	}
}
