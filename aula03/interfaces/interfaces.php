<?php

interface iTemplate{
    public function setVariavel(string $name, $var);
    public function getHtml($template): string;
}
