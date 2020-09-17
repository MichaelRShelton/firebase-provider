<?php

namespace Shelton\Firebase\Google\Firestore;

interface Firestorable
{
    public function toFirestore() : array;
}
