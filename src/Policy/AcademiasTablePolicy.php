<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Table\AcademiasTable;
use Authorization\IdentityInterface;

/**
 * Academias policy
 */
class AcademiasTablePolicy
{
    public function scopeIndex($user, $query)
    {
        if ( $user->role == 'admin' ) {
            return $query;
        } 
        return $query->where(['Academias.id' => $user->academia_id]);
    }
}
