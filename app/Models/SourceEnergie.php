<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SourceEnergie
 * 
 * @property int $ID_SOURCE_ENR
 * @property string $LIBELLE_SOURCE_ENR
 * 
 * @property Collection|Site[] $sites
 *
 * @package App\Models
 */
class SourceEnergie extends Model
{
	protected $table = 'source_energie';
	protected $primaryKey = 'ID_SOURCE_ENR';
	public $timestamps = false;

	protected $fillable = [
		'LIBELLE_SOURCE_ENR'
	];

	public function sites()
	{
		return $this->hasMany(Site::class, 'ID_SOURCE_ENR');
	}
}
