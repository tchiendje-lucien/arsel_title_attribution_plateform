<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Role
 * 
 * @property int $ID_ROLE
 * @property string $LIBELLE_ROLE
 * 
 * @property Collection|User[] $users
 *
 * @package App\Models
 */
class Role extends Model
{
	protected $table = 'roles';
	protected $primaryKey = 'ID_ROLE';
	public $timestamps = false;

	protected $fillable = [
		'LIBELLE_ROLE'
	];

	public function users()
	{
		return $this->hasMany(User::class, 'ID_ROLE');
	}
}
