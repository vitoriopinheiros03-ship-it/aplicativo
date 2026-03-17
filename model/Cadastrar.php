<?php
    namespace Projeto\model;//Determinando o local do arquivo Pessoa
     
    class Cadastrar{
         //public - Todo mundo visualiza
         //protected - Familia Visualiza (herança)
         //privati - Apenas a classe mãe visuliza

         private string $codigo;//Tipo da variavel
         private string $nome;
         private string $email;
         private string $senhaBD;
    public function __construct(string $codigo,
                                      string $nome, 
                                      string $email,  
                                      string $senha,)
     {
         $this->codigo    = $codigo;
         $this->nome      = $nome;
         $this->email     = $email;
         $this->senhaBD     = $senha;

        
     }//fim do construtor com parâmetros
    
     //Método Get e Set
    public function __get(string $dado):mixed
    {
        return $this->dado;
    }//fim do get

    public function __set(string $variavel, string $novoDado):void{
        $this->variavel = $novoDado;
    }//fim do set

    public function imprimir():string
    {
        return "<br>Código: ".$this->codigo.
               "<br>nome: ".$this->nome.
               "<br>email: ".$this->email.
               "<br>senha: ".$this->senhaBD;
    }//fim do método

    public function validarSenha(string $email,string $senha):bool{
      
        if("1234" == $senha && "allan" == $email){
            return true;
        }else{
            return false;
        }
    }//fim do método
}//fim da classe pessoas
?>