<?php


namespace Prometheus\Storage;


use PHPUnit\Framework\TestCase;

class RedisTest extends TestCase
{
    /**
     * @test
     * @expectedException \Prometheus\Exception\StorageException
     * @expectedExceptionMessage Can't connect to Redis server
     */
    public function itShouldThrowAnExceptionOnConnectionFailure()
    {
        $redis = new Redis(array('host' => 'doesntexist.test'));
        $redis->flushRedis();
    }

}
