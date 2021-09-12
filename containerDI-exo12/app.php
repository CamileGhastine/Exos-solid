<?php

class container implements ArrayAccess
{
    protected $storage = [];

    public function offsetSet($k, $v)
    {
        if (isset($this->storage[$k])) throw new Error('service existe déjà ');

        $this->storage[$k] = $v;
    }

    public function offsetGet($k)
    {
        if (!isset($this->storage[$k])) throw new Error('service n\'existe pas !');

        if (is_callable($this->storage[$k])) return $this->storage[$k]($this);

        return $this->storage[$k];
    }

    public function offsetExists($id)
    {
    }

    public function offsetUnset($id)
    {
    }
}

interface IMailer
{
    function get();
}

class Mailer implements IMailer
{
    public function __construct(private $config)
    {
    }

    public function get()
    {
        return $this->config;
    }
}

$container = new Container;
$container['mailer'] = function ($c) {
    return new Mailer($c['mailer-config']);
};
$container['mailer-config'] = '123';


class Controller
{
    public function index(Imailer $mailer)
    {
        var_dump($mailer);
    }
}

$controller = new Controller;
$controller->index($container['mailer']);

