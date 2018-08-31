# OmniTI Skill Test 1, Question 3

**Abstract**:

Write a script that will ping omniti.com, surge.omniti.com, ansible-dk.org in turn and report the time they take to respond. The script should do this every 10 seconds for a minute before terminating. You may use any language you feel comfortable with. Show the script and its output.

**Assumptions**:

No desire the create a complete PHP package but did want ability to configure the tool easily. IE over writing the ./default_config.php and running the process results in easy customization for execution.

**Requirements**:

 - Terminal access
 - (docker) daemon
 _OR_
 - a PHP 7.1 host

**Running**:

(docker) container: `docker run davidjeddy:omnitiskilltest1`

PHP: `php index.php`

**Output**:
```
    0PING omniti.com (199.15.226.219) 56(84) bytes of data.
    64 bytes from www.omniti.com (199.15.226.219): icmp_seq=1 ttl=47 time=57.2 ms
    
    --- omniti.com ping statistics ---
    1 packets transmitted, 1 received, 0% packet loss, time 0ms
    rtt min/avg/max/mdev = 57.295/57.295/57.295/0.000 ms
    PING omniti.wpengine.com (104.154.137.10) 56(84) bytes of data.
    64 bytes from 10.137.154.104.bc.googleusercontent.com (104.154.137.10): icmp_seq=1 ttl=50 time=61.2 ms
    
    --- omniti.wpengine.com ping statistics ---
    1 packets transmitted, 1 received, 0% packet loss, time 0ms
    rtt min/avg/max/mdev = 61.278/61.278/61.278/0.000 ms
    ping: ansible-dk.org: Name or service not known
    1PING omniti.com (199.15.226.219) 56(84) bytes of data.
    64 bytes from www.omniti.com (199.15.226.219): icmp_seq=1 ttl=47 time=59.8 ms
    
    --- omniti.com ping statistics ---
    1 packets transmitted, 1 received, 0% packet loss, time 0ms
    rtt min/avg/max/mdev = 59.883/59.883/59.883/0.000 ms
    PING omniti.wpengine.com (104.154.137.10) 56(84) bytes of data.
    64 bytes from 10.137.154.104.bc.googleusercontent.com (104.154.137.10): icmp_seq=1 ttl=50 time=59.9 ms
    
    --- omniti.wpengine.com ping statistics ---
    1 packets transmitted, 1 received, 0% packet loss, time 0ms
    rtt min/avg/max/mdev = 59.935/59.935/59.935/0.000 ms
    ping: ansible-dk.org: Name or service not known
    2PING omniti.com (199.15.226.219) 56(84) bytes of data.
    64 bytes from www.omniti.com (199.15.226.219): icmp_seq=1 ttl=47 time=59.8 ms
    
    --- omniti.com ping statistics ---
    1 packets transmitted, 1 received, 0% packet loss, time 0ms
    rtt min/avg/max/mdev = 59.894/59.894/59.894/0.000 ms
    PING omniti.wpengine.com (104.154.137.10) 56(84) bytes of data.
    64 bytes from 10.137.154.104.bc.googleusercontent.com (104.154.137.10): icmp_seq=1 ttl=50 time=124 ms
    
    --- omniti.wpengine.com ping statistics ---
    1 packets transmitted, 1 received, 0% packet loss, time 0ms
    rtt min/avg/max/mdev = 124.501/124.501/124.501/0.000 ms
    ping: ansible-dk.org: Name or service not known
    3PING omniti.com (199.15.226.219) 56(84) bytes of data.
    64 bytes from www.omniti.com (199.15.226.219): icmp_seq=1 ttl=47 time=60.3 ms
    
    --- omniti.com ping statistics ---
    1 packets transmitted, 1 received, 0% packet loss, time 0ms
    rtt min/avg/max/mdev = 60.357/60.357/60.357/0.000 ms
    PING omniti.wpengine.com (104.154.137.10) 56(84) bytes of data.
    64 bytes from 10.137.154.104.bc.googleusercontent.com (104.154.137.10): icmp_seq=1 ttl=50 time=62.4 ms
    
    --- omniti.wpengine.com ping statistics ---
    1 packets transmitted, 1 received, 0% packet loss, time 0ms
    rtt min/avg/max/mdev = 62.403/62.403/62.403/0.000 ms
    ping: ansible-dk.org: Name or service not known
    4PING omniti.com (199.15.226.219) 56(84) bytes of data.
    64 bytes from www.omniti.com (199.15.226.219): icmp_seq=1 ttl=47 time=66.9 ms
    
    --- omniti.com ping statistics ---
    1 packets transmitted, 1 received, 0% packet loss, time 0ms
    rtt min/avg/max/mdev = 66.917/66.917/66.917/0.000 ms
    PING omniti.wpengine.com (104.154.137.10) 56(84) bytes of data.
    64 bytes from 10.137.154.104.bc.googleusercontent.com (104.154.137.10): icmp_seq=1 ttl=50 time=60.6 ms
    
    --- omniti.wpengine.com ping statistics ---
    1 packets transmitted, 1 received, 0% packet loss, time 0ms
    rtt min/avg/max/mdev = 60.653/60.653/60.653/0.000 ms
    ping: ansible-dk.org: Name or service not known
```
