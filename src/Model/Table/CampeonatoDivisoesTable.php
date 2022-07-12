<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CampeonatoDivisoes Model
 *
 * @method \App\Model\Entity\CampeonatoDiviso newEmptyEntity()
 * @method \App\Model\Entity\CampeonatoDiviso newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CampeonatoDiviso[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CampeonatoDiviso get($primaryKey, $options = [])
 * @method \App\Model\Entity\CampeonatoDiviso findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CampeonatoDiviso patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CampeonatoDiviso[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CampeonatoDiviso|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CampeonatoDiviso saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CampeonatoDiviso[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CampeonatoDiviso[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CampeonatoDiviso[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CampeonatoDiviso[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CampeonatoDivisoesTable extends Table
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

        $this->setTable('campeonato_divisoes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->requirePresence('limite_min_peso', 'create')
            ->notEmptyString('limite_min_peso');

        $validator
            ->requirePresence('limite_max_peso', 'create')
            ->notEmptyString('limite_max_peso');

        return $validator;
    }
}
