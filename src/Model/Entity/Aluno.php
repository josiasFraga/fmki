<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Aluno Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int $graduacao_id
 * @property int $academia_id
 * @property string $nome
 * @property int|null $cidade_id
 * @property string|null $endereco
 * @property string|null $telefone
 * @property string|null $email
 * @property string|null $instagram
 * @property string|null $facebook
 * @property string|null $foto
 * @property string|null $img_dir
 * @property float $peso
 * @property float $altura
 * @property \Cake\I18n\FrozenDate $nascimento
 * @property string $sexo
 *
 * @property \App\Model\Entity\Graduaco $graduaco
 * @property \App\Model\Entity\Academia $academia
 * @property \App\Model\Entity\Cidade $cidade
 * @property \App\Model\Entity\CampeonatoInscricao[] $campeonato_inscricao
 */
class Aluno extends Entity
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
        'graduacao_id' => true,
        'academia_id' => true,
        'nome' => true,
        'cidade_id' => true,
        'endereco' => true,
        'telefone' => true,
        'email' => true,
        'instagram' => true,
        'facebook' => true,
        'foto' => true,
        'img_dir' => true,
        'peso' => true,
        'altura' => true,
        'nascimento' => true,
        'sexo' => true,
        'graduaco' => true,
        'academia' => true,
        'cidade' => true,
        'campeonato_inscricao' => true,
    ];
}
