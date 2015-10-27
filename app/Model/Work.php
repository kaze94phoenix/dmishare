<?php

App::uses('AppModel', 'Model');

/**
 * Work Model
 *
 * @property User $User
 * @property Comment $Comment
 * @property Ranking $Ranking
 * @property Report $Report
 * @property Tag $Tag
 */
class Work extends AppModel {

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'title' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'user_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            )),
        'message' => 'notEmpty',
        'filename' => array(
            // http://book.cakephp.org/2.0/en/models/data-validation.html#Validation::uploadError
            'uploadError' => array(
                'rule' => 'uploadError',
                'message' => 'Algo deu errado ao carregar o seu ficheiro. Tente novamente ou contacte o administrador da pagina',
                'required' => FALSE,
                'allowEmpty' => TRUE,
            ),
            // http://book.cakephp.org/2.0/en/models/data-validation.html#Validation::mimeType
            'mimeType' => array(
                'rule' => array('mimeType', array('application/pdf', 'application/x-mspowerpoint', 'application/powerpoint')),
                'message' => 'FIcheiro invalido. Só documentos pdf e ppt/pptx sãoo permitidos',
                'required' => FALSE,
                'allowEmpty' => TRUE,
            ),
            // custom callback to deal with the file upload
            'processUpload' => array(
                'rule' => 'processUpload',
                'message' => 'Algo deu errado ao carregar o seu ficheiro. Tente novamente ou contacte o administrador da pagina',
                'required' => FALSE,
                'allowEmpty' => TRUE,
                'last' => TRUE,
            )
        )
    );

    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'Comment' => array(
            'className' => 'Comment',
            'foreignKey' => 'work_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'Ranking' => array(
            'className' => 'Ranking',
            'foreignKey' => 'work_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'Report' => array(
            'className' => 'Report',
            'foreignKey' => 'work_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );

    /**
     * hasAndBelongsToMany associations
     *
     * @var array
     */
    public $hasAndBelongsToMany = array(
        'Tag' => array(
            'className' => 'Tag',
            'joinTable' => 'works_tags',
            'foreignKey' => 'work_id',
            'associationForeignKey' => 'tag_id',
            'unique' => 'keepExisting',
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'finderQuery' => '',
        )
    );

    public function beforeSave($options = array()) {
        // a file has been uploaded so grab the filepath
        if (!empty($this->data[$this->alias]['filepath'])) {
            $this->data[$this->alias]['filename'] = $this->data[$this->alias]['filepath'];
        }

        return parent::beforeSave($options);
    }

    public $uploadDir = 'uploads';

    public function processUpload($check = array()) {
        // deal with uploaded file
        if (!empty($check['filename']['tmp_name'])) {

            // check file is uploaded
            if (!is_uploaded_file($check['filename']['tmp_name'])) {
                return FALSE;
            }

            // build full filename
            $filename = WWW_ROOT . $this->uploadDir . DS . Inflector::slug(pathinfo($check['filename']['name'], PATHINFO_FILENAME)) . '.' . pathinfo($check['filename']['name'], PATHINFO_EXTENSION);

            // @todo check for duplicate filename
            // try moving file
            if (!move_uploaded_file($check['filename']['tmp_name'], $filename)) {
                return FALSE;

                // file successfully uploaded
            } else {
                // save the file path relative from WWW_ROOT e.g. uploads/example_filename.jpg
                $this->data[$this->alias]['filepath'] = str_replace(DS, "/", str_replace(WWW_ROOT, "", $filename));
            }
            /*    $piece = 'uploads' . '\job.pdf ';
              $filename = WWW_ROOT . $piece;

              echo $filename;
              echo exec('convert ' . $filename . ' C:\wamp\www\new\dmishare\app\webroot\uploads\job.jpg '); */
        }

        return TRUE;
    }

    public function afterSave($created, $options = array()) {
       // parent::afterSave($created, $options);
        $filename=$this->data['Work']['filename'];
        $up = "uploads\\";
        $piece = $up .$filename;
        echo exec('convert ' . WWW_ROOT.$piece. ' C:\wamp\www\new\dmishare\app\webroot\uploads\aaa.jpg ');
    }

}
