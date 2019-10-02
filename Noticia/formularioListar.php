<?php
					include_once 'inserir.php';
					include_once 'dados_noticia.php';

					$nova = new Noticia();
					$listar = $nova->listar();
				 
					?>
<html>
		<head> <title> Listar </title></head>
		<body>
					
			<center>
				<form name="listar" method="POST">
					
					<table border="1">
						<h1>Lista Noticias</h1>
						<thead>
							<tr>
								<th>Titulo da Noticia</th>
								<th>Data</th>
								<th>Foto</th>
								<th>Texto</th>
								
								<th colspan="2">Ações</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($listar as $linha) {
								?>
								<tr>
									<td><?php echo $linha['titulo_da_noticia']; ?></td>
									<td><?php echo $linha['data']; ?></td>
									<td><?php echo $linha['foto']; ?></td>
									<td><?php echo $linha['texto']; ?></td>
									
									<td><a href="editar.php">Editar</a></td>
									<td><a href="excluir.php">Excluir</a></td>
								</tr>
							<?php 
								}; 
							?>
						</tbody>
					</table>
				</form>
			</center>
	</body>	
</html>
	