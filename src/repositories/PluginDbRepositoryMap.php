<?php

namespace lo\plugins\repositories;
use lo\plugins\models\Plugin;

/**
 * Class PluginRepositoryMap
 * @package lo\plugins\repositories
 */
class PluginDbRepositoryMap
{
    public $id;
    public $name;
    public $url;
    public $text;
    public $author;
    public $author_url;
    public $hash;
    public $version;
    public $status = Plugin::STATUS_INACTIVE;

    /**
     * PluginDataDto constructor.
     * @param array $data
     */
    public function __construct($data = [])
    {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }

        if (isset($data['new_version'])) {
            $this->version = $data['new_version'];
        }

        if (isset($data['new_hash'])) {
            $this->hash = $data['new_hash'];
        }
    }
}
