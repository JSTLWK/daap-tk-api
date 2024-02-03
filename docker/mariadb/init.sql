CREATE DATABASE IF NOT EXISTS daab_team_kill;
CREATE DATABASE IF NOT EXISTS daab_team_kill_test;

GRANT ALL PRIVILEGES ON daab_team_kill.* TO 'fpc'@'%';
GRANT ALL PRIVILEGES ON daab_team_kill_test.* TO 'fpc'@'%';

FLUSH PRIVILEGES;