<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 *
 * @property int $ID_USER
 * @property int $ID_ROLE
 * @property int $ID_DPT
 * @property string $USERNAME
 * @property string $EMAIL
 * @property string $PASSWORD
 * @property string $NOM
 * @property string $PRENOM
 * @property bool|null $ID_ADMIN
 * @property Carbon $DATE_CREATE
 * @property Carbon|null $DATE_UPDATE
 *
 * @property Departement $departement
 * @property Role $role
 * @property Collection|DemanderTitre[] $demander_titres
 * @property Collection|Site[] $sites
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'users';
	protected $primaryKey = 'ID_USER';
	public $timestamps = false;

	protected $casts = [
		'ID_ROLE' => 'int',
		'ID_DPT' => 'int',
		'ID_ADMIN' => 'bool'
	];

	protected $dates = [
		'DATE_CREATE',
		'DATE_UPDATE'
	];

	protected $fillable = [
		'ID_ROLE',
		'ID_DPT',
		'USERNAME',
		'EMAIL',
		'PASSWORD',
		'NOM',
		'PRENOM',
		'ID_ADMIN',
		'DATE_CREATE',
		'DATE_UPDATE'
	];

	public function departement()
	{
		return $this->belongsTo(Departement::class, 'ID_DPT');
	}

	public function role()
	{
		return $this->belongsTo(Role::class, 'ID_ROLE');
	}

	public function demander_titres()
	{
		return $this->hasMany(DemanderTitre::class, 'ID_USER');
	}

	public function sites()
	{
		return $this->hasMany(Site::class, 'ID_USER');
	}
}
