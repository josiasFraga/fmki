<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Alunos Model
 *
 * @property \App\Model\Table\GraduacoesTable&\Cake\ORM\Association\BelongsTo $Graduacoes
 * @property \App\Model\Table\AcademiasTable&\Cake\ORM\Association\BelongsTo $Academias
 * @property \App\Model\Table\CidadesTable&\Cake\ORM\Association\BelongsTo $Cidades
 *
 * @method \App\Model\Entity\Aluno newEmptyEntity()
 * @method \App\Model\Entity\Aluno newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Aluno[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Aluno get($primaryKey, $options = [])
 * @method \App\Model\Entity\Aluno findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Aluno patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Aluno[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Aluno|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aluno saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aluno[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aluno[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aluno[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Aluno[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AlunosTable extends Table
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

        $this->setTable('alunos');
        $this->setDisplayField('nome');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Graduacoes', [
            'foreignKey' => 'graduacao_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Academias', [
            'foreignKey' => 'academia_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Cidades', [
            'foreignKey' => 'cidade_id',
        ]);
        $this->hasMany('CampeonatoInscricoes', [
            'foreignKey' => 'aluno_id',
        ]);
        $this->addBehavior('Proffer.Proffer', [
            'foto' => [	// The name of your upload field
                'root' => ROOT . DS . 'webroot' . DS . 'img', // Customise the root upload folder here, or omit to use the default
                'dir' => 'img_dir',	// The name of the field to store the folder
                'thumbnailSizes' => [ // Declare your thumbnails
                    'square' => [	// Define the prefix of your thumbnail
                        'w' => 200,	// Width
                        'h' => 200,	// Height
                        'jpeg_quality'	=> 100
                    ],
                    'portrait' => [		// Define a second thumbnail
                        'w' => 100,
                        'h' => 300
                    ],
                    'mobile' => [			// Create a smaller copy based on width or height that respects ratio
                        'w' => 421,		// Height can be omitted (or vice versa)
                        'upsize' => false	// Prevent the image from being upsized if it is narrower than specified width
                    ]
                ],
                'thumbnailMethod' => 'gd'	// Options are Imagick or Gd
            ]
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
            ->integer('graduacao_id')
            ->requirePresence('graduacao_id', 'create')
            ->notEmptyString('graduacao_id');

        $validator
            ->integer('academia_id')
            ->requirePresence('academia_id', 'create')
            ->notEmptyString('academia_id');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 150)
            ->requirePresence('nome', 'create')
            ->notEmptyString('nome');

        $validator
            ->integer('cidade_id')
            ->allowEmptyString('cidade_id');

        $validator
            ->scalar('endereco')
            ->maxLength('endereco', 150)
            ->allowEmptyString('endereco');

        $validator
            ->scalar('telefone')
            ->maxLength('telefone', 15)
            ->allowEmptyString('telefone');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('instagram')
            ->maxLength('instagram', 250)
            ->allowEmptyString('instagram');

        $validator
            ->scalar('facebook')
            ->maxLength('facebook', 250)
            ->allowEmptyString('facebook');

        $validator
            ->allowEmptyString('foto');

        $validator
            ->allowEmptyString('img_dir');

        $validator
            ->numeric('peso')
            ->requirePresence('peso', 'create')
            ->notEmptyString('peso');

        $validator
            ->numeric('altura')
            ->requirePresence('altura', 'create')
            ->notEmptyString('altura');

        $validator
            ->date('nascimento')
            ->requirePresence('nascimento', 'create')
            ->notEmptyDate('nascimento');

        $validator
            ->scalar('sexo')
            ->notEmptyString('sexo');

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
        $rules->add($rules->existsIn('graduacao_id', 'Graduacoes'), ['errorField' => 'graduacao_id']);
        $rules->add($rules->existsIn('academia_id', 'Academias'), ['errorField' => 'academia_id']);
        $rules->add($rules->existsIn('cidade_id', 'Cidades'), ['errorField' => 'cidade_id']);

        return $rules;
    }
}
