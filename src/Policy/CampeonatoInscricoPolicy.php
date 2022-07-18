<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\CampeonatoInscrico;
use Authorization\IdentityInterface;

/**
 * CampeonatoInscrico policy
 */
class CampeonatoInscricoPolicy
{
    /**
     * Check if $user can add CampeonatoInscrico
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\CampeonatoInscrico $campeonatoInscrico
     * @return bool
     */
    public function canAdd(IdentityInterface $user, CampeonatoInscrico $campeonatoInscrico)
    {
        return true;
    }

    /**
     * Check if $user can edit CampeonatoInscrico
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\CampeonatoInscrico $campeonatoInscrico
     * @return bool
     */
    public function canEdit(IdentityInterface $user, CampeonatoInscrico $campeonatoInscrico)
    {
        if ( $user->role == 'admin' ){
            return true;
        }

        return $this->isOwner($user, $campeonatoInscrico);
    }

    /**
     * Check if $user can delete CampeonatoInscrico
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\CampeonatoInscrico $campeonatoInscrico
     * @return bool
     */
    public function canDelete(IdentityInterface $user, CampeonatoInscrico $campeonatoInscrico)
    {
        if ( $user->role == 'admin' ){
            return true;
        }

        return $this->isOwner($user, $campeonatoInscrico);
    }

    /**
     * Check if $user can view CampeonatoInscrico
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\CampeonatoInscrico $campeonatoInscrico
     * @return bool
     */
    public function canView(IdentityInterface $user, CampeonatoInscrico $campeonatoInscrico)
    {
        if ( $user->role == 'admin' ){
            return true;
        }

        return $this->isOwner($user, $campeonatoInscrico);
    }

    private function isOwner($user, $inscricao) {
       return $user->academia_id == $inscricao->academia_id;
    }
}
