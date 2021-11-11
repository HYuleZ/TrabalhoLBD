<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Conta Controller
 *
 * @property \App\Model\Table\ContaTable $Conta
 * @method \App\Model\Entity\Contum[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Usuarios'],
        ];
        $conta = $this->paginate($this->Conta);

        $this->set(compact('conta'));
    }

    /**
     * View method
     *
     * @param string|null $id Contum id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contum = $this->Conta->get($id, [
            'contain' => ['Usuarios'],
        ]);

        $this->set(compact('contum'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contum = $this->Conta->newEmptyEntity();
        if ($this->request->is('post')) {
            $contum = $this->Conta->patchEntity($contum, $this->request->getData());
            if ($this->Conta->save($contum)) {
                $this->Flash->success(__('The contum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contum could not be saved. Please, try again.'));
        }
        $usuarios = $this->Conta->Usuarios->find('list', ['limit' => 200])->all();
        $this->set(compact('contum', 'usuarios'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contum id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contum = $this->Conta->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contum = $this->Conta->patchEntity($contum, $this->request->getData());
            if ($this->Conta->save($contum)) {
                $this->Flash->success(__('The contum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contum could not be saved. Please, try again.'));
        }
        $usuarios = $this->Conta->Usuarios->find('list', ['limit' => 200])->all();
        $this->set(compact('contum', 'usuarios'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contum id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contum = $this->Conta->get($id);
        if ($this->Conta->delete($contum)) {
            $this->Flash->success(__('The contum has been deleted.'));
        } else {
            $this->Flash->error(__('The contum could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
