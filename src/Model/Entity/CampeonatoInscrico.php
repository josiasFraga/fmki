<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CampeonatoInscrico Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int $campeonato_id
 * @property int $aluno_id
 * @property int $academia_id
 * @property int $categoria_id
 * @property int|null $divisao_id
 *
 * @property \App\Model\Entity\Campeonato $campeonato
 * @property \App\Model\Entity\Aluno $aluno
 * @property \App\Model\Entity\Academia $academia
 * @property \App\Model\Entity\CampeonatoCategoria $campeonato_categoria
 * @property \App\Model\Entity\CampeonatoDiviso $campeonato_diviso
 */
class CampeonatoInscrico extends Entity
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
        'campeonato_id' => true,
        'aluno_id' => true,
        'academia_id' => true,
        'categoria_id' => true,
        'divisao_id' => true,
        'campeonato' => true,
        'aluno' => true,
        'academia' => true,
        'campeonato_categoria' => true,
        'campeonato_diviso' => true,
    ];
}
