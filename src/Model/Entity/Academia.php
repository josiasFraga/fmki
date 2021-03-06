<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Academia Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string $nome
 * @property string $sensei
 * @property string $estilo
 * @property int $cidade_id
 * @property string|null $endereco
 * @property string|null $logo
 * @property string|null $img_dir
 * @property string|null $telefone
 * @property string|null $facebook
 * @property string|null $instagram
 *
 * @property \App\Model\Entity\Cidade $cidade
 * @property \App\Model\Entity\Aluno[] $alunos
 * @property \App\Model\Entity\CampeonatoInscrico[] $campeonato_inscricoes
 * @property \App\Model\Entity\Usuario[] $usuarios
 */
class Academia extends Entity
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
        'sensei' => true,
        'estilo' => true,
        'cidade_id' => true,
        'endereco' => true,
        'logo' => true,
        'img_dir' => true,
        'telefone' => true,
        'facebook' => true,
        'instagram' => true,
        'cidade' => true,
        'alunos' => true,
        'campeonato_inscricoes' => true,
        'usuarios' => true,
    ];
}
