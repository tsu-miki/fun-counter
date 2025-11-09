<?php

test('pingと打ったらpongが返ってくる', function () {
    $response = $this->get('api/v1/systems/ping');

    $response->assertStatus(200);
    $response->assertContent('pong');
});
