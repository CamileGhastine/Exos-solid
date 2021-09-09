<?php

// 1) Que pensez-vous de la substitution ci-dessous, est-elle sans risque ?
//    Nous remplaçons une classe parente par une classe enfante.
//    Quel principe à votre avis avons nous brisé ?

class Feline
{
    public function speak(): string
    {
        return "grrr";
    }
}

class Cat extends Feline
{
    public $behviour;

    public function sleep(): string
    {
        return "a lot";
    }

    public function speak(): void
    {
        $this->behviour = "grrr";
    }
}

class CatInfo
{
    public function info(Feline $cat)
    {
        return $cat->speak();
    }
}

class SubCatInfo
{
    public function info(Cat $cat)
    {
        return $cat->speak();
    }
}

// 2) Le principe suivant vous paraît-il cohérent, si oui, à quelle notion dans SOLID fait-il référence ?
// Principe : "Si vous remplacez une classe parente par une classe enfante, alors le comportement générale de votre code ne devrait pas en être impactée".

// 3) Dans l'exercice Book et Product dans le cours, nous avons remplacer une classe parente Product par une classe enfante Book.
//    Quel problème avons-nous alors rencontré ?

/**
 * Réponse 1 :
 * 
 * Le L de SOLID n'est pas respecté.
 * En effet, la signature de la méthode enfant ne respecte pas celle de la méthode parent. * 
 */

 /**
  * Réponse 2 :
  * 
  * Ce principe est cohérent. C'est le rpincipe de substitution de Liskow
  */

  /**
   * Réponse 3 :
   * 
   * On a cassé le code de l'applicatopn
   * 
   */