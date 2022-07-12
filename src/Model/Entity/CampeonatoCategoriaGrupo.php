<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CampeonatoCategoriaGrupo Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $updated
 * @property int $campeonato_categoria_id
 * @property int $codigo
 *
 * @property \App\Model\Entity\CampeonatoCategoria $campeonato_categoria
 * @property \App\Model\Entity\CampeonatoCategoriaGrupoGraduaco[] $campeonato_categoria_grupo_graduacoes
 */
class CampeonatoCategoriaGrupo extends Entity
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
        'updated' => true,
        'campeonato_categoria_id' => true,
        'codigo' => true,
        'campeonato_categoria' => true,
        'campeonato_categoria_grupo_graduacoes' => true,
    ];
}
