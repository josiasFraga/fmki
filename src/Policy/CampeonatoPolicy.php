<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Campeonato;
use Authorization\IdentityInterface;

/**
 * Campeonato policy
 */
class CampeonatoPolicy
{
    public function canIndex(IdentityInterface $user, Campeonato $campeonato)
    {
        return $user->role == 'admin';
    }
    /**
     * Check if $user can add Campeonato
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Campeonato $campeonato
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Campeonato $campeonato)
    {
        return $user->role == 'admin';
    }

    /**
     * Check if $user can edit Campeonato
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Campeonato $campeonato
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Campeonato $campeonato)
    {
        return $user->role == 'admin';
    }

    /**
     * Check if $user can delete Campeonato
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Campeonato $campeonato
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Campeonato $campeonato)
    {
        return $user->role == 'admin';
    }

    /**
     * Check if $user can view Campeonato
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Campeonato $campeonato
     * @return bool
     */
    public function canView(IdentityInterface $user, Campeonato $campeonato)
    {
        return $user->role == 'admin';
    }
}
