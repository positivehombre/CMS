<div class="row">
	
	<div class="col-md-12">
		<h4 class="m-b-lg"> 
			Ürün Listesi 
			<a href="<?=base_url('product/new_form')?>" class="btn btn-outline btn-primary btn-xs pull-right"><i class="fa fa-plus"></i> Yeni Ekle </a>
		</h4>
	</div>

	<div class="col-md-12">
		<div class="widget p-lg">

			<?php if(empty($items)) { ?>

				<div class="alert alert-info text-center">
					<p>Herhangi bir kayıt bulunamadı <a href="<?=base_url('product/new_form')?>"> eklemek için tıklayınız </a></p>
				</div>

			<?php } else { ?>

				<table class="table table-hover table-striped">
					<thead>
						<th>#ID</th>
						<th>url</th>
						<th>Başlık</th>
						<th>Açıklama</th>
						<th>Durum</th>
						<th>İşlem</th>
					</thead>

					<tbody>
						<?php foreach($items as $item) : ?>
							<tr>
								<td><?=$item->id?></td>
								<td><?=$item->url?></td>
								<td><?=$item->title?></td>
								<td><?=$item->description?></td>
								<td>
									<input 
									type="checkbox" 
									data-switchery 
									data-color="#10c469" 
									<?php echo ($item->isActive) ? "checked" : "" ?> />
								</td>
								<td>
									<button type="button" class="btn btn-sm btn-danger btn-outline"><i class="fa fa-trash"></i> Sil </button>
									<button type="button" class="btn btn-sm btn-primary btn-outline"><i class="fa fa-edit"></i> Düzenle </button>
								</td>
							</tr>

						<?php endforeach; ?>
						</tbody>

					</table>

				<?php } ?>

			</div><!-- .widget -->
		</div><!-- END column -->
	</div>