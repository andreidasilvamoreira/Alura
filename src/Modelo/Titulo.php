<?php


class Titulo
{
    private array $notas;

    public function __construct(
        public readonly string $nome,
        public readonly int $anoLancamento,
        public readonly genero $genero,
    ) {
        $this->notas = [];
    }

    function avalia(float $nota): void
    {
        $this->notas[] = $nota;
    }

    function media(): float
    {
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / $quantidadeNotas;
    }

    public function duracaoEmMinutos(): int
    {
        return 0;
    }
}
