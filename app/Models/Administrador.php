<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Administrador extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'email', 'senha'];

    public function movimentacoesEstoque(): HasMany
    {
        return $this->hasMany(MovimentacaoEstoque::class, 'responsavel_id');
    }
}
