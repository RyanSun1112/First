<?php

test('This is good', function () {
    $container = new Container();
    $container->bind('foo',fn()=> 'foo');

    $result = $container->resolve('foo');

    expect($result)->toEqual('bar');
});
