<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Table\CampeonatoInscricoesTable;
use Authorization\IdentityInterface;

/**
 * CampeonatoInscricoes policy
 */
class CampeonatoInscricoesTablePolicy
{
    public function scopeIndex($user, $query)
    {
        if ( $user->role == 'admin' ) {
            return $query;
        } 
        return $query->where(['CampeonatoInscricoes.academia_id' => $user->academia_id]);
    }
}
