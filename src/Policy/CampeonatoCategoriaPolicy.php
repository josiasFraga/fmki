<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\CampeonatoCategoria;
use Authorization\IdentityInterface;

/**
 * CampeonatoCategoria policy
 */
class CampeonatoCategoriaPolicy
{
    public function canIndex(IdentityInterface $user, CampeonatoCategoria $campeonatoCategoria)
    {
        return $user->role == 'admin';
    }
    /**
     * Check if $user can add CampeonatoCategoria
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\CampeonatoCategoria $campeonatoCategoria
     * @return bool
     */
    public function canAdd(IdentityInterface $user, CampeonatoCategoria $campeonatoCategoria)
    {
        return $user->role == 'admin';
    }

    /**
     * Check if $user can edit CampeonatoCategoria
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\CampeonatoCategoria $campeonatoCategoria
     * @return bool
     */
    public function canEdit(IdentityInterface $user, CampeonatoCategoria $campeonatoCategoria)
    {
        return $user->role == 'admin';
    }

    /**
     * Check if $user can delete CampeonatoCategoria
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\CampeonatoCategoria $campeonatoCategoria
     * @return bool
     */
    public function canDelete(IdentityInterface $user, CampeonatoCategoria $campeonatoCategoria)
    {
        return $user->role == 'admin';
    }

    /**
     * Check if $user can view CampeonatoCategoria
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\CampeonatoCategoria $campeonatoCategoria
     * @return bool
     */
    public function canView(IdentityInterface $user, CampeonatoCategoria $campeonatoCategoria)
    {
        return $user->role == 'admin';
    }
}
