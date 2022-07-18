<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Academia;
use Authorization\IdentityInterface;

/**
 * Academia policy
 */
class AcademiaPolicy
{
    public function canIndex(IdentityInterface $user)
    {
        return true;
    }
    /**
     * Check if $user can add Academia
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Academia $academia
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Academia $academia)
    {
        return $user->role == 'admin';
    }

    /**
     * Check if $user can edit Academia
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Academia $academia
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Academia $academia)
    {
        return $user->role == 'admin';
    }

    /**
     * Check if $user can delete Academia
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Academia $academia
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Academia $academia)
    {
        return $user->role == 'admin';
    }

    /**
     * Check if $user can view Academia
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Academia $academia
     * @return bool
     */
    public function canView(IdentityInterface $user, Academia $academia)
    {
        return $user->role == 'admin';
    }
}
