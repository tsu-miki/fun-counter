<?php

test('example', function () {
    $response = $this->get('api/v1/systems/ping');

    $response->assertStatus(200);
    $response->assertContent('pong');
});
