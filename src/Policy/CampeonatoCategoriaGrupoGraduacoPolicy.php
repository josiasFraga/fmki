<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\CampeonatoCategoriaGrupoGraduaco;
use Authorization\IdentityInterface;

/**
 * CampeonatoCategoriaGrupoGraduaco policy
 */
class CampeonatoCategoriaGrupoGraduacoPolicy
{
    public function canIndex(IdentityInterface $user, campeonatoCategoriaGrupoGraduaco $campeonatoCategoriaGrupoGraduaco)
    {
        return $user->role == 'admin';
    }
    /**
     * Check if $user can add CampeonatoCategoriaGrupoGraduaco
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\CampeonatoCategoriaGrupoGraduaco $campeonatoCategoriaGrupoGraduaco
     * @return bool
     */
    public function canAdd(IdentityInterface $user, CampeonatoCategoriaGrupoGraduaco $campeonatoCategoriaGrupoGraduaco)
    {
        return $user->role == 'admin';
    }

    /**
     * Check if $user can edit CampeonatoCategoriaGrupoGraduaco
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\CampeonatoCategoriaGrupoGraduaco $campeonatoCategoriaGrupoGraduaco
     * @return bool
     */
    public function canEdit(IdentityInterface $user, CampeonatoCategoriaGrupoGraduaco $campeonatoCategoriaGrupoGraduaco)
    {
        return $user->role == 'admin';
    }

    /**
     * Check if $user can delete CampeonatoCategoriaGrupoGraduaco
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\CampeonatoCategoriaGrupoGraduaco $campeonatoCategoriaGrupoGraduaco
     * @return bool
     */
    public function canDelete(IdentityInterface $user, CampeonatoCategoriaGrupoGraduaco $campeonatoCategoriaGrupoGraduaco)
    {
        return $user->role == 'admin';
    }

    /**
     * Check if $user can view CampeonatoCategoriaGrupoGraduaco
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\CampeonatoCategoriaGrupoGraduaco $campeonatoCategoriaGrupoGraduaco
     * @return bool
     */
    public function canView(IdentityInterface $user, CampeonatoCategoriaGrupoGraduaco $campeonatoCategoriaGrupoGraduaco)
    {
        return $user->role == 'admin';
    }
}
