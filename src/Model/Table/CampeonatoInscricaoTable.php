<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CampeonatoInscricao Model
 *
 * @property \App\Model\Table\CampeonatosTable&\Cake\ORM\Association\BelongsTo $Campeonatos
 * @property \App\Model\Table\AlunosTable&\Cake\ORM\Association\BelongsTo $Alunos
 * @property \App\Model\Table\AcademiasTable&\Cake\ORM\Association\BelongsTo $Academias
 * @property \App\Model\Table\CampeonatoCategoriasTable&\Cake\ORM\Association\BelongsTo $CampeonatoCategorias
 *
 * @method \App\Model\Entity\CampeonatoInscricao newEmptyEntity()
 * @method \App\Model\Entity\CampeonatoInscricao newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CampeonatoInscricao[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CampeonatoInscricao get($primaryKey, $options = [])
 * @method \App\Model\Entity\CampeonatoInscricao findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CampeonatoInscricao patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CampeonatoInscricao[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CampeonatoInscricao|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CampeonatoInscricao saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CampeonatoInscricao[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CampeonatoInscricao[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CampeonatoInscricao[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CampeonatoInscricao[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CampeonatoInscricaoTable extends Table
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

        $this->setTable('campeonato_inscricao');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Campeonatos', [
            'foreignKey' => 'campeonato_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Alunos', [
            'foreignKey' => 'aluno_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Academias', [
            'foreignKey' => 'academia_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('CampeonatoCategorias', [
            'foreignKey' => 'categoria_id',
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
            ->integer('campeonato_id')
            ->requirePresence('campeonato_id', 'create')
            ->notEmptyString('campeonato_id');

        $validator
            ->integer('aluno_id')
            ->requirePresence('aluno_id', 'create')
            ->notEmptyString('aluno_id');

        $validator
            ->integer('academia_id')
            ->requirePresence('academia_id', 'create')
            ->notEmptyString('academia_id');

        $validator
            ->integer('categoria_id')
            ->requirePresence('categoria_id', 'create')
            ->notEmptyString('categoria_id');

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
        $rules->add($rules->existsIn('campeonato_id', 'Campeonatos'), ['errorField' => 'campeonato_id']);
        $rules->add($rules->existsIn('aluno_id', 'Alunos'), ['errorField' => 'aluno_id']);
        $rules->add($rules->existsIn('academia_id', 'Academias'), ['errorField' => 'academia_id']);
        $rules->add($rules->existsIn('categoria_id', 'CampeonatoCategorias'), ['errorField' => 'categoria_id']);

        return $rules;
    }
}
