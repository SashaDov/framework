<!--<code><?=__FILE__?></code>
<h4>   <?=$name?> говорит <?=$message?></h4>-->

<?php
foreach ($articles as $article)
{
    ?>
    <div class="panel panel-default">
    <div class="panel-heading"><?=$article['thema']?>
        <div class="panel-body">
        <?=$article['published_data']?>
        </div>
    </div>
</div>
<?php
}
?>