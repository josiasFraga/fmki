<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Event\Event;
use ArrayObject;

/**
 * Academias Model
 *
 * @property \App\Model\Table\CidadesTable&\Cake\ORM\Association\BelongsTo $Cidades
 * @property \App\Model\Table\TorneioInscricaoTable&\Cake\ORM\Association\HasMany $TorneioInscricao
 * @property \App\Model\Table\UsuariosTable&\Cake\ORM\Association\HasMany $Usuarios
 *
 * @method \App\Model\Entity\Academia newEmptyEntity()
 * @method \App\Model\Entity\Academia newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Academia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Academia get($primaryKey, $options = [])
 * @method \App\Model\Entity\Academia findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Academia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Academia[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Academia|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Academia saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Academia[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Academia[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Academia[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Academia[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AcademiasTable extends Table
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

        $this->setTable('academias');
        $this->setDisplayField('nome');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Cidades', [
            'foreignKey' => 'cidade_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('TorneioInscricao', [
            'foreignKey' => 'academia_id',
        ]);
        $this->hasMany('Usuarios', [
            'foreignKey' => 'academia_id',
        ]);

        $this->hasMany('Alunos', [
            'foreignKey' => 'academia_id',
        ]);
        $this->addBehavior('Proffer.Proffer', [
            'logo' => [	// The name of your upload field
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
            ->scalar('nome')
            ->maxLength('nome', 150)
            ->requirePresence('nome', 'create')
            ->notEmptyString('nome');

        $validator
            ->integer('cidade_id')
            ->requirePresence('cidade_id', 'create')
            ->notEmptyString('cidade_id');

        $validator
            ->scalar('endereco')
            ->maxLength('endereco', 150)
            ->allowEmptyString('endereco');

        $validator
            ->allowEmptyString('logo');

        $validator
            ->allowEmptyString('img_dir');

        $validator
            ->scalar('telefone')
            ->maxLength('telefone', 15)
            ->allowEmptyString('telefone');

        $validator
            ->scalar('facebook')
            ->maxLength('facebook', 150)
            ->allowEmptyString('facebook');

        $validator
            ->scalar('instagram')
            ->maxLength('instagram', 150)
            ->allowEmptyString('instagram');

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
    

    public function beforeMarshal(Event $event, ArrayObject $data, ArrayObject $options)
    {

        if (isset($data['cities_url'])) {
            unset($data['cities_url']);
        }
        if (isset($data['estado_id'])) {
            unset($data['estado_id']);
        }
    }
}
