<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    //agregando la relacion de uno a muchos del usuario al estudiante, docente,curso, y periodo
    public function estudiantes()
    {
    return $this->hasMany(Estudiante::class);    
    }
    public function docentes()
    {
        return $this->hasMany(Docente::class);    
    }
    public function cursos()
    {
        return $this->hasMany(Curso::class);    
    }

    public function periodos()
    {
        return $this->hasMany(Periodo::class);    
    }

    /////los que faltan

    public function calificaciones()
    {
        return $this->hasMany(Calificacione::class);    
    }
    public function matriculas()
    {
        return $this->hasMany(Matricula::class);    
    }
    public function asignaciones()
    {
        return $this->hasMany(Asignacione::class);    
    }

    






}
