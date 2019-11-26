<?php

require_once 'bootstrap.php';

use Curso\Loja\Entidades\Produto;

$produtos = [
    ['nome' => 'TV', 'preco' => 2500],
    ['nome' => 'Sound bar', 'preco' => 650],
    ['nome' => 'Suporte TV', 'preco' => 125]
];

foreach($produtos as $produto){
    $dbProduto = new Produto();

    $dbProduto->setNome($produto['nome']);
    $dbProduto->setPreco($produto['preco']);

    $entityManager->persist($dbProduto);
}
/** Comando abaixo insere dados */
//$entityManager->flush();



/** Localizar produtos */
$produtoRepository = $entityManager->getRepository('Curso\Loja\Entidades\Produto');

$produto1 = $produtoRepository->find(3);
echo "{$produto1->getNome()}<br>";

echo "<hr><pre>";

$produto2 = $produtoRepository->findAll();

var_dump($produto2);


//** Remover produto */
$produtoRemove = $entityManager->getRepository('Curso\Loja\Entidades\Produto');
$produto2 = $produtoRemove->find(2);

//$entityManager->remove($produto2);
//$entityManager->flush();