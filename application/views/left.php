<div style="">
    <div>
        <?php foreach ($all_categories as $x): ?>
             <div class="left">
               <a id="<?= $x->id; ?>" style="font-size:15px;float:left;margin-left:3%;" href="javascript:void(0);"><?= $x->name; ?></a>   
            </div>
            <?php if ($x->id != 3): ?>
            <div class="content hide" data-id="<?= $x->id; ?>" id="content_<?= $x->id; ?>">
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
            </div>
              
            <div style="clear:both;width:40%;margin-bottom:12%;">
                
            </div>
            <?php endif ?>

        <?php endforeach ?>

        
        
    </div>
</div>

<style>
    .hide{
        display:none;
    }
</style>