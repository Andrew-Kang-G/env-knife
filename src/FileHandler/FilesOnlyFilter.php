<?php


namespace Arwg\EnvKnife\FileHandler;


class FilesOnlyFilter extends \RecursiveFilterIterator
{
    public function accept()
    {
        $iterator = $this->getInnerIterator();

        // allow traversal
        if ($iterator->hasChildren()) {
            return true;
        }

        // filter entries, only allow true files
        return $iterator->current()->isFile();
    }
}