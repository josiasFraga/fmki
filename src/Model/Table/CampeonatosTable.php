<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Campeonatos Model
 *
 * @property \App\Model\Table\CidadesTable&\Cake\ORM\Association\BelongsTo $Cidades
 * @property \App\Model\Table\CampeonatoInscricoesTable&\Cake\ORM\Association\HasMany $CampeonatoInscricoes
 *
 * @method \App\Model\Entity\Campeonato newEmptyEntity()
 * @method \App\Model\Entity\Campeonato newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Campeonato[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Campeonato get($primaryKey, $options = [])
 * @method \App\Model\Entity\Campeonato findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Campeonato patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Campeonato[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Campeonato|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Campeonato saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Campeonato[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Campeonato[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Campeonato[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Campeonato[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CampeonatosTable extends Table
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

        $this->setTable('campeonatos');
        $this->setDisplayField('nome');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Cidades', [
            'foreignKey' => 'cidade_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('CampeonatoInscricoes', [
            'foreignKey' => 'campeonato_id',
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
            ->scalar('nome')
            ->maxLength('nome', 120)
            ->requirePresence('nome', 'create')
            ->notEmptyString('nome');

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
            ->integer('cidade_id')
            ->requirePresence('cidade_id', 'create')
            ->notEmptyString('cidade_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('cidade_id', 'Cidades'), ['errorField' => 'cidade_id']);

        return $rules;
    }
}
