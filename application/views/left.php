


<div style="">
    <div>
        <?php foreach ($all_categories as $x): ?>
             <div>
               <a style="font-size:20px;" href="<?= base_url(); ?>category/<?= $x->name; ?>"><?= $x->name; ?></a>   
            </div>  
            <div style="margin-bottom:20%;">
                <?php if ($x->id != 3): ?>
                     <?php foreach ($x->subs as $y): ?>
                        <a href="<?= base_url(); ?>subcategory/<?= $y; ?>/<?= $x->id; ?>" style="display:block;margin:2%;">
                            <?= $y; ?>
                        </a>
                    <?php endforeach ?>
                <?php endif ?>
            </div>
        <?php endforeach ?>
        
    </div>
</div>