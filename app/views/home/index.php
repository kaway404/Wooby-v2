<?php
$config=[
'storage'    => 'mysql',
	'dbhost'     => 'localhost',
	'dbname'     => 'instagram',
	'dbusername' => 'root',
	'dbpassword' => 'Silvereye1990'
];
$ig = new \InstagramAPI\Instagram(false, true, $config);
$ig->login('@sirrafadepetare','Silvereye1990');
$id=$ig->people->getUserIdForName('sirrafadepetare');
$current_user=$ig->people->getInfoById($id);
$feed = $ig->discover->getExploreFeed();
$response = $ig->timeline->getUserFeed($id,NULL);
$items = $response->getItems();

?>
<div class="container">
	<div class="row">
		<div class="col-sm-4">
			<img src="<?= $current_user->user->profile_pic_url ?>">
		</div>
		<div class="col-sm-8">
			<h1><?= $current_user->user->full_name ?></h1>
		</div>
	</div>
	<div class="row">
		<h1 class="text-center">Seleccione una foto</h1>
		<?php foreach($items as $item): ?>
			<div class="col-sm-2">
				<img src="<?= $item->image_versions2->candidates[1]->url ?>" alt="" width='128px' height='128px'>
			</div>
		<?php endforeach; ?>
	</div>
	
	
	<pre>
	</pre>
	<pre>
		<?php print_r($current_user->user); ?>
	</pre>
</div>