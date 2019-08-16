<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Itens Controller
 *
 * @property \App\Model\Table\ItensTable $Itens
 *
 * @method \App\Model\Entity\Iten[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ItensController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        
        $this->loadComponent('Flash');
        $this->paginate = [
            'limit' => 8,
            'order' => array('Itens.created' => 'desc'),
        ];
    }

    public function index()
    {
        $itens = $this->paginate($this->Itens);
        $this->set(compact('itens'));
    }

    public function view($id = null)
    {
        $item = $this->Itens->get($id, ['contain' => []]);
        $this->set('item', $item);
    }

    public function add()
    {
        $item = $this->Itens->newEntity();
       
        if ($this->request->is('post')) {
            $newItem = $this->request->getData(); 
            $expiryDate = date("Y-m-d", strtotime($newItem['expiry_date']));
            $dateManufacture = date("Y-m-d", strtotime($newItem['date_manufacture']));
            
            $newItem["expiry_date"] = $expiryDate;
            $newItem["date_manufacture"] = $dateManufacture;
    
            $item = $this->Itens->patchEntity($item, $newItem);
            
            if ($this->Itens->save($item)) {
                $this->Flash->success(__('O item foi salvo!'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('O item não pôde ser salvo!'));
            $this->Flash->error(__('Por favor, tente novamente.'));
        }

        $this->set(compact('item'));
    }

    public function edit($id = null)
    {
        $item = $this->Itens->get($id, ['contain' => []]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $newItem = $this->request->getData(); 
            $expiryDate = date("Y-m-d", strtotime($newItem['expiry_date']));
            $dateManufacture = date("Y-m-d", strtotime($newItem['date_manufacture']));
            
            $newItem["expiry_date"] = $expiryDate;
            $newItem["date_manufacture"] = $dateManufacture;
    
            $item = $this->Itens->patchEntity($item, $newItem);
            
            if ($this->Itens->save($item)) {
                $this->Flash->success(__('O item foi salvo!'));

                return $this->redirect(['action' => 'index']);
            }

            $this->Flash->error(__('O item não pôde ser salvo!'));
            $this->Flash->error(__('Por favor, tente novamente.'));
        }

        $this->set(compact('item'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $item = $this->Itens->get($id);

        if ($this->Itens->delete($item)) {
            $this->Flash->success(__('O item foi excluído!'));
        } 
        else {
            $this->Flash->error(__('O item não pôde ser excluído!'));
            $this->Flash->error(__('Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
