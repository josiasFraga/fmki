<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CampeonatoCategoriaGrupoGraduaco Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int $campeonato_categoria_grupo_id
 * @property int $graduacao_id
 *
 * @property \App\Model\Entity\CampeonatoCategoriaGrupo $campeonato_categoria_grupo
 * @property \App\Model\Entity\Graduaco $graduaco
 */
class CampeonatoCategoriaGrupoGraduaco extends Entity
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
        'campeonato_categoria_grupo_id' => true,
        'graduacao_id' => true,
        'campeonato_categoria_grupo' => true,
        'graduaco' => true,
    ];
}
