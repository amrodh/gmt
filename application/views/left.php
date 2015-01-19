<div style="">
    <div>
        <?php foreach ($all_categories as $x): ?>
             <div>
               <a style="font-size:20px;float:left;margin-left:3%;" href="<?= base_url(); ?>category/<?= $x->name; ?>"><?= $x->name; ?></a>   
            </div>
            <?php if ($x->id != 3): ?>
            <div style="float:left;margin-left:5%;clear:both;">
             <p>Destinations</p>     
            </div> 
            <div style="clear:both;">
                 <ul style="float:left;margin-top:-5%;">
                <?php foreach ($x->destination as $y): ?>
                    <li>
                        <a href="<?= base_url(); ?>subcategory/<?= $y; ?>/<?= $x->id; ?>" style="">
                            <?= $y; ?>
                        </a>
                    </li>
                <?php endforeach ?>
                </ul>
            </div> 
            
            <div style="float:left;margin-left:5%;clear:both;">
             <p>Interests</p>     
            </div>
            <div style="clear:both;width:100%;">
                  <ul style="float:left;margin-bottom:15%;margin-top:-5%;">
                    <?php foreach ($x->interest as $y): ?>
                        <li>
                            <a href="<?= base_url(); ?>subcategory/<?= $y; ?>/<?= $x->id; ?>" style="">
                                <?= $y; ?>
                            </a>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>  
            <div style="clear:both;width:40%;border:2px solid #000066;height:1px;margin-bottom:12%;">
                
            </div>
            <?php endif ?>
            
        <?php endforeach ?>

        
        
    </div>
</div>