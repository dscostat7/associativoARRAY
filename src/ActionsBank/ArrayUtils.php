<?php declare(strict_types=1); //Esta declaração faz com que os tipos dos argumentos e retornos de função sejam estritos, sem type juggling.


class ArrayUtils
{
    public function encontrarPessoasComSaldoMaior(int $saldo, array $array): array
    {
        $correntistasComSaldoMaior = array();
        foreach ($array as $chave => $valor) {
            if ($valor > $saldo) {
                $correntistasComSaldoMaior[] = $chave;
            }
        }
        return $correntistasComSaldoMaior;
    }
}