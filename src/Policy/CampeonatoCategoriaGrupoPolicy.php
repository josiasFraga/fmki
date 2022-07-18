<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\CampeonatoCategoriaGrupo;
use Authorization\IdentityInterface;

/**
 * CampeonatoCategoriaGrupo policy
 */
class CampeonatoCategoriaGrupoPolicy
{
    public function canIndex(IdentityInterface $user, CampeonatoCategoriaGrupo $CampeonatoCategoriaGrupo)
    {
        return $user->role == 'admin';
    }
    /**
     * Check if $user can add CampeonatoCategoriaGrupo
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\CampeonatoCategoriaGrupo $campeonatoCategoriaGrupo
     * @return bool
     */
    public function canAdd(IdentityInterface $user, CampeonatoCategoriaGrupo $campeonatoCategoriaGrupo)
    {
        return $user->role == 'admin';
    }

    /**
     * Check if $user can edit CampeonatoCategoriaGrupo
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\CampeonatoCategoriaGrupo $campeonatoCategoriaGrupo
     * @return bool
     */
    public function canEdit(IdentityInterface $user, CampeonatoCategoriaGrupo $campeonatoCategoriaGrupo)
    {
        return $user->role == 'admin';
    }

    /**
     * Check if $user can delete CampeonatoCategoriaGrupo
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\CampeonatoCategoriaGrupo $campeonatoCategoriaGrupo
     * @return bool
     */
    public function canDelete(IdentityInterface $user, CampeonatoCategoriaGrupo $campeonatoCategoriaGrupo)
    {
        return $user->role == 'admin';
    }

    /**
     * Check if $user can view CampeonatoCategoriaGrupo
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\CampeonatoCategoriaGrupo $campeonatoCategoriaGrupo
     * @return bool
     */
    public function canView(IdentityInterface $user, CampeonatoCategoriaGrupo $campeonatoCategoriaGrupo)
    {
        return $user->role == 'admin';
    }
}
