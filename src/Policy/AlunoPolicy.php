<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Aluno;
use Authorization\IdentityInterface;

/**
 * Aluno policy
 */
class AlunoPolicy
{
    /**
     * Check if $user can add Aluno
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Aluno $aluno
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Aluno $aluno)
    {
        return true;
    }

    /**
     * Check if $user can edit Aluno
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Aluno $aluno
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Aluno $aluno)
    {
        if ( $user->role == 'admin' ){
            return true;
        }

        return $this->isOwner($user, $aluno);
    }

    /**
     * Check if $user can delete Aluno
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Aluno $aluno
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Aluno $aluno)
    {
        if ( $user->role == 'admin' ){
            return true;
        }

        return $this->isOwner($user, $aluno);
    }

    /**
     * Check if $user can view Aluno
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Aluno $aluno
     * @return bool
     */
    public function canView(IdentityInterface $user, Aluno $aluno)
    {
        if ( $user->role == 'admin' ){
            return true;
        }

        return $this->isOwner($user, $aluno);
        
    }

    public function canGenerateCard(IdentityInterface $user, Aluno $aluno)
    {
        if ( $user->role == 'admin' ){
            return true;
        }

        return $this->isOwner($user, $aluno);
        
    }

    private function isOwner($user, $aluno) {
       return $user->academia_id == $aluno->academia_id;
    }
}
