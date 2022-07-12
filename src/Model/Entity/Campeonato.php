<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Campeonato Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string $nome
 * @property \Cake\I18n\FrozenDate $inicio
 * @property \Cake\I18n\FrozenDate $fim
 * @property string $endereco
 * @property int $cidade_id
 *
 * @property \App\Model\Entity\Cidade $cidade
 * @property \App\Model\Entity\CampeonatoInscrico[] $campeonato_inscricoes
 */
class Campeonato extends Entity
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
        'inicio' => true,
        'fim' => true,
        'endereco' => true,
        'cidade_id' => true,
        'cidade' => true,
        'campeonato_inscricoes' => true,
    ];
}
