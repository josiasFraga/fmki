<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Torneio Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property \Cake\I18n\FrozenDate $inicio
 * @property \Cake\I18n\FrozenDate $fim
 * @property string $endereco
 * @property string $cidade
 * @property string $estado
 *
 * @property \App\Model\Entity\TorneioInscricao[] $torneio_inscricao
 */
class Torneio extends Entity
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
        'inicio' => true,
        'fim' => true,
        'endereco' => true,
        'cidade' => true,
        'estado' => true,
        'torneio_inscricao' => true,
    ];
}
