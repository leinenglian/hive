<?php
namespace metastore;

/**
 * Autogenerated by Thrift Compiler (0.13.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class WriteEventInfo
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'writeId',
            'isRequired' => true,
            'type' => TType::I64,
        ),
        2 => array(
            'var' => 'database',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'table',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        4 => array(
            'var' => 'files',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        5 => array(
            'var' => 'partition',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        6 => array(
            'var' => 'tableObj',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        7 => array(
            'var' => 'partitionObj',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
    );

    /**
     * @var int
     */
    public $writeId = null;
    /**
     * @var string
     */
    public $database = null;
    /**
     * @var string
     */
    public $table = null;
    /**
     * @var string
     */
    public $files = null;
    /**
     * @var string
     */
    public $partition = null;
    /**
     * @var string
     */
    public $tableObj = null;
    /**
     * @var string
     */
    public $partitionObj = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['writeId'])) {
                $this->writeId = $vals['writeId'];
            }
            if (isset($vals['database'])) {
                $this->database = $vals['database'];
            }
            if (isset($vals['table'])) {
                $this->table = $vals['table'];
            }
            if (isset($vals['files'])) {
                $this->files = $vals['files'];
            }
            if (isset($vals['partition'])) {
                $this->partition = $vals['partition'];
            }
            if (isset($vals['tableObj'])) {
                $this->tableObj = $vals['tableObj'];
            }
            if (isset($vals['partitionObj'])) {
                $this->partitionObj = $vals['partitionObj'];
            }
        }
    }

    public function getName()
    {
        return 'WriteEventInfo';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->writeId);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->database);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->table);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->files);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->partition);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 6:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->tableObj);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 7:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->partitionObj);
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

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('WriteEventInfo');
        if ($this->writeId !== null) {
            $xfer += $output->writeFieldBegin('writeId', TType::I64, 1);
            $xfer += $output->writeI64($this->writeId);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->database !== null) {
            $xfer += $output->writeFieldBegin('database', TType::STRING, 2);
            $xfer += $output->writeString($this->database);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->table !== null) {
            $xfer += $output->writeFieldBegin('table', TType::STRING, 3);
            $xfer += $output->writeString($this->table);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->files !== null) {
            $xfer += $output->writeFieldBegin('files', TType::STRING, 4);
            $xfer += $output->writeString($this->files);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->partition !== null) {
            $xfer += $output->writeFieldBegin('partition', TType::STRING, 5);
            $xfer += $output->writeString($this->partition);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->tableObj !== null) {
            $xfer += $output->writeFieldBegin('tableObj', TType::STRING, 6);
            $xfer += $output->writeString($this->tableObj);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->partitionObj !== null) {
            $xfer += $output->writeFieldBegin('partitionObj', TType::STRING, 7);
            $xfer += $output->writeString($this->partitionObj);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
