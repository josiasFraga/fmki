<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Authentication\PasswordHasher\DefaultPasswordHasher;

/**
 * Usuario Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string $nome
 * @property int|null $academia_id
 * @property string $login
 * @property string $password
 * @property string|null $role
 * @property string|null $email
 * @property string|null $foto
 * @property string|null $img_dir
 *
 * @property \App\Model\Entity\Academia $academia
 */
class Usuario extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'created' => true,
        'modified' => true,
        'nome' => true,
        'academia_id' => true,
        'login' => true,
        'password' => true,
        'role' => true,
        'email' => true,
        'foto' => true,
        'img_dir' => true,
        'academia' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected $_hidden = [
        'password',
    ];
    
    protected function _setPassword(string $password)
    {
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($password);
    }
}
