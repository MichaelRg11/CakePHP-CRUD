<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Vendedores Model
 *
 * @method \App\Model\Entity\Vendedore newEmptyEntity()
 * @method \App\Model\Entity\Vendedore newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Vendedore[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Vendedore get($primaryKey, $options = [])
 * @method \App\Model\Entity\Vendedore findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Vendedore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Vendedore[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Vendedore|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vendedore saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vendedore[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vendedore[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vendedore[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vendedore[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class VendedoresTable extends Table
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

        $this->setTable('vendedores');
        $this->setDisplayField('FullName');
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('documento')
            ->maxLength('documento', 20)
            ->requirePresence('documento', 'create')
            ->notEmptyString('documento')
            ->add('documento', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('nombres')
            ->maxLength('nombres', 45)
            ->requirePresence('nombres', 'create')
            ->notEmptyString('nombres');

        $validator
            ->scalar('apellidos')
            ->maxLength('apellidos', 45)
            ->requirePresence('apellidos', 'create')
            ->notEmptyString('apellidos');

        $validator
            ->scalar('direccion')
            ->maxLength('direccion', 55)
            ->allowEmptyString('direccion');

        $validator
            ->scalar('telefono')
            ->maxLength('telefono', 45)
            ->allowEmptyString('telefono');

        $validator
            ->scalar('correo')
            ->maxLength('correo', 65)
            ->allowEmptyString('correo');

        $validator
            ->numeric('salario')
            ->requirePresence('salario', 'create')
            ->notEmptyString('salario');

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
        $rules->add($rules->isUnique(['documento']), ['errorField' => 'documento']);

        return $rules;
    }
}
