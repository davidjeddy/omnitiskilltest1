OmniTI Skill Test 1, Question 3

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
