<?php

// Que pensez-vous de la classe suivante ? Si celle-ci est non conforme proposer une solution.

class User
{
    public function __construct(private string $name, private int $age)
    {
    }

    // ...

    public function store()
    {
        // Store attributes into a database...
    }
}

/** 
 * Réponse:
 * 
 * Le S de SOLID n'est pas respecté.
 * En effet, Cette classe possède une méthode qui n'est pas de sa résponsabilité.
 * Cette classe doit gérer les users, mais ne doit pas s'occuper de leur stockage.
 * La méthode store doit donc être impémentée dans une autre classe dont ce serait la responsabilité (voir ci-dessous)
 */

class UserRepository
{
    public function store()
    {
        // Store attributes into a database...
    }
}
