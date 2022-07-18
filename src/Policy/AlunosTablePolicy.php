<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Table\AlunosTable;
use Authorization\IdentityInterface;

/**
 * Alunos policy
 */
class AlunosTablePolicy
{
    public function scopeIndex($user, $query)
    {
        if ( $user->role == 'admin' ) {
            return $query;
        } 
        return $query->where(['Alunos.academia_id' => $user->academia_id]);
    }
}
