<?php
switch ($_REQUEST["acao"]) {
	case 'cadastrar':
		$nome= $_POST['nome'];
		$email= $_POST['email'];
		$senha= $_POST['senha'];
		$data= $_POST['data'];
		$sql= "INSERT INTO banco (nome,email,senha,data) VALUES ('{$nome}','{$email}','{$senha}','{$data}')";
		$res= $conn->query($sql);
		if ($res==true) {
			print "<script> alert('Cadastrou com sucesso');</script>";
			print"<script>location.href='?page=listar';</script>";
		}else{
			print "<script> alert('Não foi possivel cadastrar');</script>";
			print"<script>location.href='?page=listar';</script>";
		}
		break;
	case 'editar':
		$nome= $_POST['nome'];
		$email= $_POST['email'];
		$senha= $_POST['senha'];
		$data= $_POST['data'];
        $sql="UPDATE banco SET nome='{$nome}',email='{$email}',senha='{$senha}',data='{$data}' WHERE id=".$_REQUEST['id'];

		$res= $conn->query($sql);
		if ($res==true) {
			print "<script> alert('editou com sucesso');</script>";
			print"<script>location.href='?page=listar';</script>";
		}else{
			print "<script> alert('Não foi possivel editar');</script>";
			print"<script>location.href='?page=listar';</script>";
		}
		break;
	case 'excluir':
		$sql="DELETE FROM banco WHERE id=".$_REQUEST["id"];
		$res= $conn->query($sql);
		if ($res==true) {
			print "<script> alert('excluído com sucesso');</script>";
			print"<script>location.href='?page=listar';</script>";
		}else{
			print "<script> alert('Não foi possivel excluir');</script>";
			print"<script>location.href='?page=listar';</script>";
		}
		break;	
	
}
