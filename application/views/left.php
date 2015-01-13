<?php foreach ($categories as $x): ?>
    <a href="<?= base_url().$x->path; ?>" style="text-decoration: none;">
      <label style="text-transform: uppercase;cursor: pointer;">
        <span class="glyphicon glyphicon-arrow-right"></span> 
        <?= $x->name; ?>
      </label>
    </a>
    <br>

    <div class="row">
    	<br>
    </div>
<?php endforeach ?>

<div class="row" style="margin-top:5%;">
	<a href="" style="margin-left:25%;">
		<button type="button" class="btn btn-info">Plan Your Vacation</button>
	</a>
</div>