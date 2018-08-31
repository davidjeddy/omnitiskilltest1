<?php

/**
 * Class OmniTISkillTest1
 */
class OmniTISkillTest1
{
    /**
     * @var array
     */
    protected $config;

    /**
     * @param array $config
     * @return array
     */
    public function set(array $config): array
    {
        $this->config = $config;

        return $this->config;
    }

    /**
     * @return bool
     */
    public function run()
    {
        $interval_sum = 0;
        while ($interval_sum < $this->config['length'])
        {
            echo $interval_sum;

            foreach ($this->config['targets'] as $key => $value) {
                system("ping -c 1 $value");
            }

            sleep($this->config['interval']);

            $interval_sum += $this->config['interval'];
        }

        return true;
    }
}
