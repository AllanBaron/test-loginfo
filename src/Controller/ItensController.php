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
            'limit' => 5
        ];
    }

    public function index()
    {
        $itens = $this->paginate($this->Itens);

        $this->set(compact('itens'));
    }

    public function view($id = null)
    {
        $iten = $this->Itens->get($id, [
            'contain' => []
        ]);

        $this->set('iten', $iten);
    }

    public function add()
    {
        $iten = $this->Itens->newEntity();
        if ($this->request->is('post')) {
            $iten = $this->Itens->patchEntity($iten, $this->request->getData());
            if ($this->Itens->save($iten)) {
                $this->Flash->success(__('O item foi salvo!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O item não pôde ser salvo!'));
            $this->Flash->error(__('Por favor, tente novamente.'));
        }
        $this->set(compact('iten'));
    }

    public function edit($id = null)
    {
        $iten = $this->Itens->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $iten = $this->Itens->patchEntity($iten, $this->request->getData());
            if ($this->Itens->save($iten)) {
                $this->Flash->success(__('O item foi salvo!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O item não pôde ser salvo!'));
            $this->Flash->error(__('Por favor, tente novamente.'));
        }
        $this->set(compact('iten'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $iten = $this->Itens->get($id);
        if ($this->Itens->delete($iten)) {
            $this->Flash->success(__('O item foi excluído!'));
        } else {
            $this->Flash->error(__('O item não pôde ser excluído!'));
            $this->Flash->error(__('Por favor, tente novamente.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
