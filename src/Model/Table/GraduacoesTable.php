<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Graduacoes Model
 * @property \App\Model\Table\AlunosTable&\Cake\ORM\Association\HasMany $Alunos
 * 
 * @method \App\Model\Entity\Graduaco newEmptyEntity()
 * @method \App\Model\Entity\Graduaco newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Graduaco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Graduaco get($primaryKey, $options = [])
 * @method \App\Model\Entity\Graduaco findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Graduaco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Graduaco[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Graduaco|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Graduaco saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Graduaco[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Graduaco[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Graduaco[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Graduaco[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class GraduacoesTable extends Table
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

        $this->setTable('graduacoes');
        $this->setDisplayField('titulo');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Alunos', [
            'foreignKey' => 'graduacao_id',
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
            ->scalar('titulo')
            ->maxLength('titulo', 80)
            ->requirePresence('titulo', 'create')
            ->notEmptyString('titulo');

        return $validator;
    }
}
