<?php

namespace Laravel\Jetstream\Contracts;

interface UpdatesNetworkNames
{
    /**
     * Validate and update the given network's name.
     *
     * @param  mixed  $user
     * @param  mixed  $network
     * @param  array  $input
     * @return void
     */
    public function update($user, $network, array $input);
}
