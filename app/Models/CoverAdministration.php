<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Notifications\Notifiable;

class CoverAdministration extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $table = 'cover_administration';
    protected $fillable = [
        'header',
        'tahun_ajaran',
        'img',
        'penyusun',
        'nama_sekolah',
        'tahun',
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'cover_user_pivot', 'cover_administration_id', 'user_id');
    }
}
