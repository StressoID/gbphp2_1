<?require_once 'header.php';?>	<div class="row">		<?while ($article = pg_fetch_array($articles, null, PGSQL_ASSOC)) {?>			<div class="col-md-8">				<?=$article['name']?>				[<a href="edit.php?id=<?=$article['id']?>">Изменить</a>|				<a href="delete.php?id=<?=$article['id']?>">Удалить</a>]			</div>		<?}?>	</div><?require_once 'footer.php';?>