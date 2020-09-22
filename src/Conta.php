<?php


class Conta
{
    private Titular $titular;
    private float $saldo;

    public function __construct(Titular $titular, float $saldo)
    {
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function recuperaSaldo(): float
    {
        return $this->saldo;
    }

    public function recuperaNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }

    public function  recuperaCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
    }

    public function deposita(Conta $conta, float $valor): void
    {
        if ($valor <= 0) {
            echo "Só é possível depositar valores positivos.";
        } else {
            $conta->saldo = $conta->saldo + $valor;
        }
    }

    public function saca(Conta $conta, float $valor): void
    {
        if ($valor > $conta->saldo) {
            echo "Saldo indisponivel.";
        } else {
            $conta->saldo = $conta->saldo - $valor;
        }
    }

    public function transfere(Conta $contaDestino, float $valor): void
    {
        $this->saca($valor);
        $contaDestino->deposita($valor);
    }
}