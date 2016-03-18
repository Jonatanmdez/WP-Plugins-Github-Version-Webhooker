<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;
use Cake\Network\Http\Client;
/**
 * Repositories Controller
 *
 * @property \App\Model\Table\RepositoriesTable $Repositories
 */
class RepositoriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        
        $connection = ConnectionManager::get('default');
      
        
        $repositories = $this->paginate($this->Repositories);

        $this->set(compact('repositories'));
        $this->set('_serialize', ['repositories']);
    }

    /**
     * View method
     *
     * @param string|null $id Repository id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $repository = $this->Repositories->get($id, [
            'contain' => []
        ]);
        
        echo $repository->version.'|'.$repository->url;die();

        $this->set('repository', $repository);
        $this->set('_serialize', ['repository']);
    }
    
    
    public function webhook(){
        $info_webhook=($this->request->input('json_decode'));
        $repository_name=$info_webhook->repository->full_name;
      
        $repository_id=$info_webhook->repository->id;
        $repository=$this->Repositories->findOrCreate(['id'=>$repository_id]);
        $repository->name=$info_webhook->repository->name;
        $repository->description=$info_webhook->repository->description;
        $repository->modified=$info_webhook->repository->updated_at;
        $repository->created=$info_webhook->repository->created_at;
        
        $repository->version=$last_release->tag_name;
          
        $repository->url='https://codeload.github.com/'.$repository_name.'/zip/master';
        $this->Repositories->Save($repository);
        
        
    }

   
  
}
