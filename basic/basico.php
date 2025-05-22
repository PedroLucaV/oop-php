<?php
//Criação de uma classe:
class Person
{
    //Propriedades
    public string $name;
    public int $age;
    public string $gender;

    //Metodos
    public function walk(): string
    {
        return "Walkin";
    }
    public function run(): string
    {
        return "Runnin";
    }
}


//Para criar uma instancia dessa classe, usamos o new:
$instancia = new Person();

echo $instancia->run();
echo "<br>";
echo var_dump($instancia);
