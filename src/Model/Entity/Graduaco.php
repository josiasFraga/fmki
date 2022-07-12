<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Graduaco Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string $titulo
 *
 * @property \App\Model\Entity\Aluno[] $alunos
 * @property \App\Model\Entity\CampeonatoCategoriaGrupoGraduaco[] $campeonato_categoria_grupo_graduacoes
 */
class Graduaco extends Entity
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
        'titulo' => true,
        'alunos' => true,
        'campeonato_categoria_grupo_graduacoes' => true,
    ];
}
