<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class JWT extends BaseConfig
{
    public string $key = getenv('JWT_SECRET');
    public string $issuer = base_url();
    public string $audience = base_url();
    public int $expire = getenv('JWT_EXPIRY');
    public int $algo = getenv('JWT_ALGORITHM');
}
