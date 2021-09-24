<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DemanderTitre
 * 
 * @property int $ID_DEMANDE
 * @property int $ID_USER
 * @property int $ID_SITE
 * 
 * @property Site $site
 * @property User $user
 *
 * @package App\Models
 */
class DemanderTitre extends Model
{
	protected $table = 'demander_titre';
	protected $primaryKey = 'ID_DEMANDE';
	public $timestamps = false;

	protected $casts = [
		'ID_USER' => 'int',
		'ID_SITE' => 'int'
	];

	protected $fillable = [
		'ID_USER',
		'ID_SITE'
	];

	public function site()
	{
		return $this->belongsTo(Site::class, 'ID_SITE');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'ID_USER');
	}
}
