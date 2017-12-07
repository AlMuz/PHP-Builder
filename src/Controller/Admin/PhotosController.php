<?php
namespace App\Controller;

use App\Controller\AppController;

class PhotosController extends AppController
{

    public function index()
    {
        $photos = $this->paginate($this->Photos);

        $this->set(compact('photos'));
        $this->set('_serialize', ['photos']);
    }

    public function view($id = null)
    {
        $photo = $this->Photos->get($id, [
            'contain' => []
        ]);

        $this->set('photo', $photo);
        $this->set('_serialize', ['photo']);
    }

    public function add()
    {
        $photo = $this->Photos->newEntity();
        if ($this->request->is('post')) {
            $photo = $this->Photos->patchEntity($photo, $this->request->getData());
            if ($this->Photos->save($photo)) {
                $this->Flash->success(__('The photo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The photo could not be saved. Please, try again.'));
        }
        $this->set(compact('photo'));
        $this->set('_serialize', ['photo']);
    }

    public function edit($id = null)
    {
        $photo = $this->Photos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $photo = $this->Photos->patchEntity($photo, $this->request->getData());
            if ($this->Photos->save($photo)) {
                $this->Flash->success(__('The photo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The photo could not be saved. Please, try again.'));
        }
        $this->set(compact('photo'));
        $this->set('_serialize', ['photo']);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $photo = $this->Photos->get($id);
        if ($this->Photos->delete($photo)) {
            $this->Flash->success(__('The photo has been deleted.'));
        } else {
            $this->Flash->error(__('The photo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
