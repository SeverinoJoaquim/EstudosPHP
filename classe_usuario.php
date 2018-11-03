<?php include("minhas_funcoes.php"); ?>
<?php include("mostrar_erros.php"); ?>

<?php

class classe_usuario {
   private $idusuario;
   private $nome;
   private $email;
   private $senha;
   private $cpf;
   private $acessos;
   
   function getIdusuario() {
       return $this->idusuario;
   }

   function getNome() {
       return $this->nome;
   }

   function getEmail() {
       return $this->email;
   }

   function getSenha() {
       return $this->senha;
   }

   function getCpf() {
       return $this->cpf;
   }

   function getAcessos() {
       return $this->acessos;
   }

   function setIdusuario($idusuario) {
       $this->idusuario = $idusuario;
   }

   function setNome($nome) {
       $this->nome = $nome;
   }

   function setEmail($email) {
       $this->email = $email;
   }

   function setSenha($senha) {
       $this->senha = $senha;
   }

   function setCpf($cpf) {
       $this->cpf = $cpf;
   }

   function setAcessos($acessos) {
       $this->acessos = $acessos;
   }
   
   function consultar() {
       $comando = "SELECT * FROM usuario WHERE (IDUSUARIO=$this->idusuario)";
       $resposta = excutar_query($comando);
       foreach ($resposta as $registro) {
           $this->idusuario = $registro["IDUSUARIO"];
           $this->nome = $registro["NOME"];
           $this->email = $registro["EMAIL"];
           $this->senha = $registro["SENHA"];
           $this->cpf = $registro["CPF"];
           $this->acessos = $registro["ACESSOS"];
       }
   }
   
   function inserir(){
       
       $comando = "SELECT inserir_usuario('$this->nome','$this->email','$this->senha','$this->cpf') As Retorno;";
       
       $resposta = excutar_query($comando);
       
       foreach ($resposta as $registro){
           $resultado = $registro("Retorno");
       }
       if ($resultado == 0) {
           mensagem_javascript('Erro ao cadastrar usuário!', '');
       } else {
           $this->consultar();
           mensagem_javascript('Usuário cadastrdo com sucesso!', '');
       }
       return $resultado;
   }
   
   function alterar(){
       
   }
   
   function excluir(){
       
   }
   
   function validar_login(){
       
   }

}

