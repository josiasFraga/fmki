<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CampeonatoCategoriaGrupos Model
 *
 * @property \App\Model\Table\CampeonatoCategoriasTable&\Cake\ORM\Association\BelongsTo $CampeonatoCategorias
 * @property \App\Model\Table\CampeonatoCategoriaGrupoGraduacoesTable&\Cake\ORM\Association\HasMany $CampeonatoCategoriaGrupoGraduacoes
 *
 * @method \App\Model\Entity\CampeonatoCategoriaGrupo newEmptyEntity()
 * @method \App\Model\Entity\CampeonatoCategoriaGrupo newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CampeonatoCategoriaGrupo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CampeonatoCategoriaGrupo get($primaryKey, $options = [])
 * @method \App\Model\Entity\CampeonatoCategoriaGrupo findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CampeonatoCategoriaGrupo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CampeonatoCategoriaGrupo[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CampeonatoCategoriaGrupo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CampeonatoCategoriaGrupo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CampeonatoCategoriaGrupo[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CampeonatoCategoriaGrupo[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CampeonatoCategoriaGrupo[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CampeonatoCategoriaGrupo[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CampeonatoCategoriaGruposTable extends Table
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

        $this->setTable('campeonato_categoria_grupos');
        $this->setDisplayField('codigo');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('CampeonatoCategorias', [
            'foreignKey' => 'campeonato_categoria_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('CampeonatoCategoriaGrupoGraduacoes', [
            'foreignKey' => 'campeonato_categoria_grupo_id',
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
            ->integer('campeonato_categoria_id')
            ->requirePresence('campeonato_categoria_id', 'create')
            ->notEmptyString('campeonato_categoria_id');

        $validator
            ->notEmptyString('codigo')
            ->add('codigo', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['codigo']), ['errorField' => 'codigo']);
        $rules->add($rules->existsIn('campeonato_categoria_id', 'CampeonatoCategorias'), ['errorField' => 'campeonato_categoria_id']);

        return $rules;
    }
}
