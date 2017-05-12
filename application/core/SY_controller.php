<?php

class SY_Controller extends CI_Controller{

    protected $data;

    protected $model;

    protected $linkList;

    public function remove($key){
        $return = $this->model->delete($key);
        if($return!= true){
            $this->session->set_flashdata('error','Erro ao remover registro - '.$return);
        }else{
            $this->session->set_flashdata('success','Registro removido com sucesso!');
        }

        redirect($this->linkList);
    }

}
