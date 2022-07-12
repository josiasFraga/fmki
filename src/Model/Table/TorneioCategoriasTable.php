<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TorneioCategorias Model
 *
 * @method \App\Model\Entity\TorneioCategoria newEmptyEntity()
 * @method \App\Model\Entity\TorneioCategoria newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\TorneioCategoria[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TorneioCategoria get($primaryKey, $options = [])
 * @method \App\Model\Entity\TorneioCategoria findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\TorneioCategoria patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TorneioCategoria[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\TorneioCategoria|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TorneioCategoria saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TorneioCategoria[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TorneioCategoria[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\TorneioCategoria[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TorneioCategoria[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TorneioCategoriasTable extends Table
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

        $this->setTable('torneio_categorias');
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
            ->scalar('titulo')
            ->maxLength('titulo', 120)
            ->allowEmptyString('titulo');

        return $validator;
    }
}