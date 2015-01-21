<div  style="height:200px;width:100%;margin-top:2%;">
    <a class="featured_div_anchor" href="<?= base_url(); ?>package/<?= $featured[0]->package->title; ?>" title="">
    <img class="featured_div_image" style="width:100%;height:100%;" src="<?= base_url(); ?>application/static/upload/package/<?= $featured[0]->images[0]->image; ?>" />    
    </a>
    
</div>
<div class="thumbnails_div">
    <?php foreach ($featured as $package): ?>
        <div style="background-image:url('<?= base_url(); ?>application/static/upload/package/<?= $package->images[0]->image; ?>')"
        data-src="<?= base_url(); ?>application/static/upload/package/<?= $package->images[0]->image; ?>"
        data-href="<?= base_url(); ?>package/<?= $package->package->title; ?>">
        </div>
    <?php endforeach ?>
</div>

<style>
    .thumbnails_div{
        margin-top:4.5%;
        margin-left:3%;
    }
    .thumbnails_div div{
        float:left;
        height:50px;
        width:60px;
        border:2px solid #000066;
        margin-right:3%;
        border-radius: 15px;
        cursor:pointer;
        background-size:100% 100%;
    }
</style>
