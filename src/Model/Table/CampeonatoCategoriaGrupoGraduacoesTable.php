<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CampeonatoCategoriaGrupoGraduacoes Model
 *
 * @property \App\Model\Table\CampeonatoCategoriaGruposTable&\Cake\ORM\Association\BelongsTo $CampeonatoCategoriaGrupos
 * @property \App\Model\Table\GraduacoesTable&\Cake\ORM\Association\BelongsTo $Graduacoes
 *
 * @method \App\Model\Entity\CampeonatoCategoriaGrupoGraduaco newEmptyEntity()
 * @method \App\Model\Entity\CampeonatoCategoriaGrupoGraduaco newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CampeonatoCategoriaGrupoGraduaco[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CampeonatoCategoriaGrupoGraduaco get($primaryKey, $options = [])
 * @method \App\Model\Entity\CampeonatoCategoriaGrupoGraduaco findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CampeonatoCategoriaGrupoGraduaco patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CampeonatoCategoriaGrupoGraduaco[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CampeonatoCategoriaGrupoGraduaco|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CampeonatoCategoriaGrupoGraduaco saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CampeonatoCategoriaGrupoGraduaco[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CampeonatoCategoriaGrupoGraduaco[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CampeonatoCategoriaGrupoGraduaco[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CampeonatoCategoriaGrupoGraduaco[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CampeonatoCategoriaGrupoGraduacoesTable extends Table
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

        $this->setTable('campeonato_categoria_grupo_graduacoes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('CampeonatoCategoriaGrupos', [
            'foreignKey' => 'campeonato_categoria_grupo_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Graduacoes', [
            'foreignKey' => 'graduacao_id',
            'joinType' => 'INNER',
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
            ->integer('campeonato_categoria_grupo_id')
            ->requirePresence('campeonato_categoria_grupo_id', 'create')
            ->notEmptyString('campeonato_categoria_grupo_id');

        $validator
            ->integer('graduacao_id')
            ->requirePresence('graduacao_id', 'create')
            ->notEmptyString('graduacao_id');

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
        $rules->add($rules->existsIn('campeonato_categoria_grupo_id', 'CampeonatoCategoriaGrupos'), ['errorField' => 'campeonato_categoria_grupo_id']);
        $rules->add($rules->existsIn('graduacao_id', 'Graduacoes'), ['errorField' => 'graduacao_id']);

        return $rules;
    }
}
