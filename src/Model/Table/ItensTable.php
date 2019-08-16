<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Itens Model
 *
 * @method \App\Model\Entity\Iten get($primaryKey, $options = [])
 * @method \App\Model\Entity\Iten newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Iten[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Iten|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Iten saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Iten patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Iten[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Iten findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ItensTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('itens');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 50)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('unit_measurement')
            ->maxLength('unit_measurement', 3)
            ->requirePresence('unit_measurement', 'create')
            ->notEmptyString('unit_measurement');

        $validator
            ->integer('qtd')
            ->allowEmptyString('qtd');

        $validator
            ->decimal('price')
            ->requirePresence('price', 'create')
            ->notEmptyString('price');

        $validator
            ->boolean('perishable_product')
            ->requirePresence('perishable_product', 'create')
            ->notEmptyString('perishable_product');

        $validator
            ->date('expiry_date')
            ->requirePresence('expiry_date', 'create')
            ->notEmptyDate('expiry_date');

        $validator
            ->date('date_manufacture')
            ->requirePresence('date_manufacture', 'create')
            ->notEmptyDate('date_manufacture');

        return $validator;
    }
}
