<?php
class Horarios_model extends SY_Model {

    /**
     * @var string
     */
    protected $table = 'smasy_horario';

    /**
     * @var string
     */
    protected $colOrder = 'nome';

    /**
     * @var string
     */
    protected $primaryKey = 'id';
    
    function __construct() {
        parent::__construct();
    }
}