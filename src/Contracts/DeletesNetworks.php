<?php

namespace Laravel\Jetstream\Contracts;

interface DeletesNetworks
{
    /**
     * Delete the given network.
     *
     * @param  mixed  $network
     * @return void
     */
    public function delete($network);
}
