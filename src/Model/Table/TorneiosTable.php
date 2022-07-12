<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Torneios Model
 *
 * @property \App\Model\Table\TorneioInscricaoTable&\Cake\ORM\Association\HasMany $TorneioInscricao
 *
 * @method \App\Model\Entity\Torneio newEmptyEntity()
 * @method \App\Model\Entity\Torneio newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Torneio[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Torneio get($primaryKey, $options = [])
 * @method \App\Model\Entity\Torneio findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Torneio patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Torneio[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Torneio|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Torneio saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Torneio[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Torneio[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Torneio[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Torneio[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TorneiosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('torneios');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('TorneioInscricao', [
            'foreignKey' => 'torneio_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->date('inicio')
            ->requirePresence('inicio', 'create')
            ->notEmptyDate('inicio');

        $validator
            ->date('fim')
            ->requirePresence('fim', 'create')
            ->notEmptyDate('fim');

        $validator
            ->scalar('endereco')
            ->maxLength('endereco', 150)
            ->requirePresence('endereco', 'create')
            ->notEmptyString('endereco');

        $validator
            ->scalar('cidade')
            ->maxLength('cidade', 150)
            ->requirePresence('cidade', 'create')
            ->notEmptyString('cidade');

        $validator
            ->scalar('estado')
            ->maxLength('estado', 2)
            ->requirePresence('estado', 'create')
            ->notEmptyString('estado');

        return $validator;
    }
}
