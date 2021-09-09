<?php

// Voici deux classes Géométriques

// class Rectangle
// {
//     public function __construct(
//         private float $w,
//         private float $h
//     ) {
//     }
// }

// class Square
// {

//     public function __construct(private float $c)
//     {
//     }
// }

// Un étudiant propose la solution suivante pour calculer la somme des aires de chaque forme géométrique.
// Qu'est-ce que vous seriez tenté de lui dire si par exemple on introduit une nouvelle classe Circle dans le projet ?
// Proposez une solution pour résoudre ce problème et expliciter le terme SOLID utilisé.

// class Area
// {
//     public function __construct(
//         private array $shapes = []
//     ) {
//     }

//     public function sum()
//     {
//         foreach ($this->shapes as $shape) {
//             if ($shape instanceof Square) {
//                 $area[] = ($shape->c) ** 2;
//             } else if ($shape instanceof Rectangle) {
//                 $area[] = $shape->w * $shape->h;
//             }
//         }

//         return array_sum($area);
//     }
// }


/**
 * Réponse :
 * 
 * Le problème ici est que la classe Area ne respecte pas le O de SOLID
 * La classe n'est pas ouverte à l'extension. On est obligé de casser le code pour la faire évoluer.
 * Les classes Rectangle, square et circle sont des classe qui gère ces formes géométriques.
 * Et toutes formes géométroiques (2D) à une aire.
 * La définition de l'air à donc toute sa place dans ces classe.
 * Il serait donc pertient de créer un interface (I de SOLID) obligeant les formes géométriques à imlplémenter une interface Area.
 */

interface Calculable
{
    function getArea(): float;
}

class Rectangle implements Calculable

{
    public function __construct(
        private float $w,
        private float $h
    ) {
    }

    public function getArea(): float
    {
        return $this->w * $this->h;
    }
}

class Square implements Calculable
{
    public function __construct(private float $c)
    {
    }

    public function getArea(): float
    {
        return $this->c ** 2;
    }
}

class circle implements Calculable
{
    public function __construct(private float $r)
    {
    }

    public function getArea(): float
    {
        return pi() * $this->r ** 2;
    }
}

class Area
{
    public function __construct(
        private array $shapes = []
    ) {
    }

    public function sum()
    {
        foreach ($this->shapes as $shape) {
            $area[] = $shape->getArea();
        }

        return array_sum($area);
    }
}
