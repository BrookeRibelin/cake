<!-- File: /app/View/Posts/view.ctp -->

<h1><?php echo h($post['Post']['title']); ?></h1>

<p><small>Created: <?php echo $post['Post']['created']; ?></small></p>

<p><?php echo h($post['Post']['body']); ?></p>

</br></br></br></br>
<h1><i>Comments:</i></h1>
<?php foreach ($post['Comment'] as $comment): ?>
<b><?php echo h($comment['name'])?></b>
<p><small>Created: <?php echo $post['Post']['created']; ?></small></p>
<div class="comment" style="margin-left:50px;">
        <p><?php echo h($comment['text'])?></p>
    </div>
<?php endforeach;

echo $this->element('newcomment', array("post_id" => $post['Post']['id']));?>