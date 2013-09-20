</br></br></br>
<h1><big>Add Comment</big></h1>
<?php
echo $this->Form->create('Comment',array('action' => 'add',
                                             'url' => array($post_id)));
echo $this->Form->input('name');
echo $this->Form->input('text', array('rows' => '3'));
echo $this->Form->end('Add comment');
?>