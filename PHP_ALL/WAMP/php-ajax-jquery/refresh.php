<?php include 'inc/header.php'; ?>
<h2>Ajax:-Auto Refresh Div Content</h2>
<div class="content">

	<form action="" method="post">
		<table>
				<tr>
					<td>Content</td>
					<td>:</td>
					<td>
						<textarea name="body" id="body"></textarea>
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>
						<input type="submit" name="autosubmit" id="autosubmit" value="post"/>
					</td>
				</tr>
		</table>
			<div id="autostatus"></div>
	</form>
</div>
<?php include 'inc/footer.php'; ?>