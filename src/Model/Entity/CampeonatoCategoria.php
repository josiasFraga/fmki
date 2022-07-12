<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CampeonatoCategoria Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $titulo
 * @property string $categoria
 * @property int|null $limite_min_idade
 * @property int $limite_max_idade
 */
class CampeonatoCategoria extends Entity
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
        'categoria' => true,
        'limite_min_idade' => true,
        'limite_max_idade' => true,
        'campeonato_categoria_grupos' => true,
    ];
}
