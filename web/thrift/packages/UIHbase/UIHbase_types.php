<?php
/**
 * Autogenerated by Thrift Compiler (0.7.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 */
include_once $GLOBALS['THRIFT_ROOT'].'/Thrift.php';


class DisplayEvent {
  static $_TSPEC;

  public $row_id = null;
  public $timestamp = null;
  public $src_ip = null;
  public $src_port = null;
  public $dbname = null;
  public $appname = null;
  public $username = null;
  public $statement = null;
  public $freqency = null;
  public $security_risk = null;
  public $tables = null;
  public $columns = null;
  public $similar_statements = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'row_id',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'timestamp',
          'type' => TType::I32,
          ),
        3 => array(
          'var' => 'src_ip',
          'type' => TType::STRING,
          ),
        4 => array(
          'var' => 'src_port',
          'type' => TType::STRING,
          ),
        5 => array(
          'var' => 'dbname',
          'type' => TType::STRING,
          ),
        6 => array(
          'var' => 'appname',
          'type' => TType::STRING,
          ),
        7 => array(
          'var' => 'username',
          'type' => TType::STRING,
          ),
        8 => array(
          'var' => 'statement',
          'type' => TType::STRING,
          ),
        9 => array(
          'var' => 'freqency',
          'type' => TType::STRING,
          ),
        10 => array(
          'var' => 'security_risk',
          'type' => TType::STRING,
          ),
        11 => array(
          'var' => 'tables',
          'type' => TType::STRING,
          ),
        12 => array(
          'var' => 'columns',
          'type' => TType::STRING,
          ),
        13 => array(
          'var' => 'similar_statements',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['row_id'])) {
        $this->row_id = $vals['row_id'];
      }
      if (isset($vals['timestamp'])) {
        $this->timestamp = $vals['timestamp'];
      }
      if (isset($vals['src_ip'])) {
        $this->src_ip = $vals['src_ip'];
      }
      if (isset($vals['src_port'])) {
        $this->src_port = $vals['src_port'];
      }
      if (isset($vals['dbname'])) {
        $this->dbname = $vals['dbname'];
      }
      if (isset($vals['appname'])) {
        $this->appname = $vals['appname'];
      }
      if (isset($vals['username'])) {
        $this->username = $vals['username'];
      }
      if (isset($vals['statement'])) {
        $this->statement = $vals['statement'];
      }
      if (isset($vals['freqency'])) {
        $this->freqency = $vals['freqency'];
      }
      if (isset($vals['security_risk'])) {
        $this->security_risk = $vals['security_risk'];
      }
      if (isset($vals['tables'])) {
        $this->tables = $vals['tables'];
      }
      if (isset($vals['columns'])) {
        $this->columns = $vals['columns'];
      }
      if (isset($vals['similar_statements'])) {
        $this->similar_statements = $vals['similar_statements'];
      }
    }
  }

  public function getName() {
    return 'DisplayEvent';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->row_id);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->timestamp);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->src_ip);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->src_port);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->dbname);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->appname);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 7:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->username);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 8:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->statement);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 9:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->freqency);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 10:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->security_risk);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 11:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->tables);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 12:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->columns);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 13:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->similar_statements);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('DisplayEvent');
    if ($this->row_id !== null) {
      $xfer += $output->writeFieldBegin('row_id', TType::STRING, 1);
      $xfer += $output->writeString($this->row_id);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->timestamp !== null) {
      $xfer += $output->writeFieldBegin('timestamp', TType::I32, 2);
      $xfer += $output->writeI32($this->timestamp);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->src_ip !== null) {
      $xfer += $output->writeFieldBegin('src_ip', TType::STRING, 3);
      $xfer += $output->writeString($this->src_ip);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->src_port !== null) {
      $xfer += $output->writeFieldBegin('src_port', TType::STRING, 4);
      $xfer += $output->writeString($this->src_port);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->dbname !== null) {
      $xfer += $output->writeFieldBegin('dbname', TType::STRING, 5);
      $xfer += $output->writeString($this->dbname);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->appname !== null) {
      $xfer += $output->writeFieldBegin('appname', TType::STRING, 6);
      $xfer += $output->writeString($this->appname);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->username !== null) {
      $xfer += $output->writeFieldBegin('username', TType::STRING, 7);
      $xfer += $output->writeString($this->username);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->statement !== null) {
      $xfer += $output->writeFieldBegin('statement', TType::STRING, 8);
      $xfer += $output->writeString($this->statement);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->freqency !== null) {
      $xfer += $output->writeFieldBegin('freqency', TType::STRING, 9);
      $xfer += $output->writeString($this->freqency);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->security_risk !== null) {
      $xfer += $output->writeFieldBegin('security_risk', TType::STRING, 10);
      $xfer += $output->writeString($this->security_risk);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->tables !== null) {
      $xfer += $output->writeFieldBegin('tables', TType::STRING, 11);
      $xfer += $output->writeString($this->tables);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->columns !== null) {
      $xfer += $output->writeFieldBegin('columns', TType::STRING, 12);
      $xfer += $output->writeString($this->columns);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->similar_statements !== null) {
      $xfer += $output->writeFieldBegin('similar_statements', TType::STRING, 13);
      $xfer += $output->writeString($this->similar_statements);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

?>