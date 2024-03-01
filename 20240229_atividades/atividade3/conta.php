<?php
class ContaCorrente {
    // Atributos
    private $numeroConta;
    private $nomeCorrentista;
    private $saldo;

    // Método construtor
    public function __construct($numeroConta, $nomeCorrentista, $saldo = 0) {
        $this->numeroConta = $numeroConta;
        $this->nomeCorrentista = $nomeCorrentista;
        $this->saldo = max(0, $saldo); // Garante que o saldo não seja negativo
    }

    // Método para alterar o nome do correntista
    public function alterarNome($novoNome) {
        $this->nomeCorrentista = $novoNome;
    }

    // Método para retornar o nome do correntista
    public function getNomeCorrentista() {
        return $this->nomeCorrentista;
    }

    // Método para realizar um depósito na conta
    public function deposito($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
        } else {
            echo "O valor do depósito deve ser maior que zero.<br>";
        }
    }

    // Método para realizar um saque na conta
    public function saque($valor) {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
        } else {
            echo "Saldo insuficiente ou valor inválido para saque.<br>";
        }
    }

    // Método para exibir o saldo da conta
    public function exibirSaldo() {
        echo "Saldo da conta: R$ " . number_format($this->saldo, 2, ',', '.') . "<br>";
    }
}
?>
