<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'neurociencias';
$CFG->dbuser    = 'luismurillo';
$CFG->dbpass    = 'Gdl2251!1';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 3306,
  'dbsocket' => '',
);

$CFG->wwwroot   = 'http://medicinaclinica.org/aulavirtual';
$CFG->dataroot  = '/home/ipao/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0755;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
