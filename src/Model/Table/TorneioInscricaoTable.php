<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TorneioInscricao Model
 *
 * @property \App\Model\Table\TorneiosTable&\Cake\ORM\Association\BelongsTo $Torneios
 * @property \App\Model\Table\AlunosTable&\Cake\ORM\Association\BelongsTo $Alunos
 * @property \App\Model\Table\AcademiasTable&\Cake\ORM\Association\BelongsTo $Academias
 * @property \App\Model\Table\TorneioCategoriasTable&\Cake\ORM\Association\BelongsTo $TorneioCategorias
 *
 * @method \App\Model\Entity\TorneioInscricao newEmptyEntity()
 * @method \App\Model\Entity\TorneioInscricao newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\TorneioInscricao[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TorneioInscricao get($primaryKey, $options = [])
 * @method \App\Model\Entity\TorneioInscricao findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\TorneioInscricao patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TorneioInscricao[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\TorneioInscricao|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TorneioInscricao saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TorneioInscricao[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TorneioInscricao[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\TorneioInscricao[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TorneioInscricao[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TorneioInscricaoTable extends Table
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

        $this->setTable('torneio_inscricao');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Torneios', [
            'foreignKey' => 'torneio_id',
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
        $this->belongsTo('TorneioCategorias', [
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
            ->integer('torneio_id')
            ->requirePresence('torneio_id', 'create')
            ->notEmptyString('torneio_id');

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
        $rules->add($rules->existsIn('torneio_id', 'Torneios'), ['errorField' => 'torneio_id']);
        $rules->add($rules->existsIn('aluno_id', 'Alunos'), ['errorField' => 'aluno_id']);
        $rules->add($rules->existsIn('academia_id', 'Academias'), ['errorField' => 'academia_id']);
        $rules->add($rules->existsIn('categoria_id', 'TorneioCategorias'), ['errorField' => 'categoria_id']);

        return $rules;
    }
}
