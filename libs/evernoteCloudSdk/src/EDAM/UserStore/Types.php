<?php
namespace EDAM\UserStore;

/**
 * Autogenerated by Thrift Compiler (0.9.1)
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


class PublicUserInfo {
  static $_TSPEC;

  public $userId = null;
  public $shardId = null;
  public $privilege = null;
  public $username = null;
  public $noteStoreUrl = null;
  public $webApiUrlPrefix = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'userId',
          'type' => TType::I32,
          ),
        2 => array(
          'var' => 'shardId',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'privilege',
          'type' => TType::I32,
          ),
        4 => array(
          'var' => 'username',
          'type' => TType::STRING,
          ),
        5 => array(
          'var' => 'noteStoreUrl',
          'type' => TType::STRING,
          ),
        6 => array(
          'var' => 'webApiUrlPrefix',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['userId'])) {
        $this->userId = $vals['userId'];
      }
      if (isset($vals['shardId'])) {
        $this->shardId = $vals['shardId'];
      }
      if (isset($vals['privilege'])) {
        $this->privilege = $vals['privilege'];
      }
      if (isset($vals['username'])) {
        $this->username = $vals['username'];
      }
      if (isset($vals['noteStoreUrl'])) {
        $this->noteStoreUrl = $vals['noteStoreUrl'];
      }
      if (isset($vals['webApiUrlPrefix'])) {
        $this->webApiUrlPrefix = $vals['webApiUrlPrefix'];
      }
    }
  }

  public function getName() {
    return 'PublicUserInfo';
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
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->userId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->shardId);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->privilege);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->username);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->noteStoreUrl);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->webApiUrlPrefix);
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
    $xfer += $output->writeStructBegin('PublicUserInfo');
    if ($this->userId !== null) {
      $xfer += $output->writeFieldBegin('userId', TType::I32, 1);
      $xfer += $output->writeI32($this->userId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->shardId !== null) {
      $xfer += $output->writeFieldBegin('shardId', TType::STRING, 2);
      $xfer += $output->writeString($this->shardId);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->privilege !== null) {
      $xfer += $output->writeFieldBegin('privilege', TType::I32, 3);
      $xfer += $output->writeI32($this->privilege);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->username !== null) {
      $xfer += $output->writeFieldBegin('username', TType::STRING, 4);
      $xfer += $output->writeString($this->username);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->noteStoreUrl !== null) {
      $xfer += $output->writeFieldBegin('noteStoreUrl', TType::STRING, 5);
      $xfer += $output->writeString($this->noteStoreUrl);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->webApiUrlPrefix !== null) {
      $xfer += $output->writeFieldBegin('webApiUrlPrefix', TType::STRING, 6);
      $xfer += $output->writeString($this->webApiUrlPrefix);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class AuthenticationResult {
  static $_TSPEC;

  public $currentTime = null;
  public $authenticationToken = null;
  public $expiration = null;
  public $user = null;
  public $publicUserInfo = null;
  public $noteStoreUrl = null;
  public $webApiUrlPrefix = null;
  public $secondFactorRequired = null;
  public $secondFactorDeliveryHint = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'currentTime',
          'type' => TType::I64,
          ),
        2 => array(
          'var' => 'authenticationToken',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'expiration',
          'type' => TType::I64,
          ),
        4 => array(
          'var' => 'user',
          'type' => TType::STRUCT,
          'class' => '\EDAM\Types\User',
          ),
        5 => array(
          'var' => 'publicUserInfo',
          'type' => TType::STRUCT,
          'class' => '\EDAM\UserStore\PublicUserInfo',
          ),
        6 => array(
          'var' => 'noteStoreUrl',
          'type' => TType::STRING,
          ),
        7 => array(
          'var' => 'webApiUrlPrefix',
          'type' => TType::STRING,
          ),
        8 => array(
          'var' => 'secondFactorRequired',
          'type' => TType::BOOL,
          ),
        9 => array(
          'var' => 'secondFactorDeliveryHint',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['currentTime'])) {
        $this->currentTime = $vals['currentTime'];
      }
      if (isset($vals['authenticationToken'])) {
        $this->authenticationToken = $vals['authenticationToken'];
      }
      if (isset($vals['expiration'])) {
        $this->expiration = $vals['expiration'];
      }
      if (isset($vals['user'])) {
        $this->user = $vals['user'];
      }
      if (isset($vals['publicUserInfo'])) {
        $this->publicUserInfo = $vals['publicUserInfo'];
      }
      if (isset($vals['noteStoreUrl'])) {
        $this->noteStoreUrl = $vals['noteStoreUrl'];
      }
      if (isset($vals['webApiUrlPrefix'])) {
        $this->webApiUrlPrefix = $vals['webApiUrlPrefix'];
      }
      if (isset($vals['secondFactorRequired'])) {
        $this->secondFactorRequired = $vals['secondFactorRequired'];
      }
      if (isset($vals['secondFactorDeliveryHint'])) {
        $this->secondFactorDeliveryHint = $vals['secondFactorDeliveryHint'];
      }
    }
  }

  public function getName() {
    return 'AuthenticationResult';
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
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->currentTime);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->authenticationToken);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->expiration);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRUCT) {
            $this->user = new \EDAM\Types\User();
            $xfer += $this->user->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::STRUCT) {
            $this->publicUserInfo = new \EDAM\UserStore\PublicUserInfo();
            $xfer += $this->publicUserInfo->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->noteStoreUrl);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 7:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->webApiUrlPrefix);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 8:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->secondFactorRequired);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 9:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->secondFactorDeliveryHint);
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
    $xfer += $output->writeStructBegin('AuthenticationResult');
    if ($this->currentTime !== null) {
      $xfer += $output->writeFieldBegin('currentTime', TType::I64, 1);
      $xfer += $output->writeI64($this->currentTime);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->authenticationToken !== null) {
      $xfer += $output->writeFieldBegin('authenticationToken', TType::STRING, 2);
      $xfer += $output->writeString($this->authenticationToken);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->expiration !== null) {
      $xfer += $output->writeFieldBegin('expiration', TType::I64, 3);
      $xfer += $output->writeI64($this->expiration);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->user !== null) {
      if (!is_object($this->user)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('user', TType::STRUCT, 4);
      $xfer += $this->user->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->publicUserInfo !== null) {
      if (!is_object($this->publicUserInfo)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('publicUserInfo', TType::STRUCT, 5);
      $xfer += $this->publicUserInfo->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->noteStoreUrl !== null) {
      $xfer += $output->writeFieldBegin('noteStoreUrl', TType::STRING, 6);
      $xfer += $output->writeString($this->noteStoreUrl);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->webApiUrlPrefix !== null) {
      $xfer += $output->writeFieldBegin('webApiUrlPrefix', TType::STRING, 7);
      $xfer += $output->writeString($this->webApiUrlPrefix);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->secondFactorRequired !== null) {
      $xfer += $output->writeFieldBegin('secondFactorRequired', TType::BOOL, 8);
      $xfer += $output->writeBool($this->secondFactorRequired);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->secondFactorDeliveryHint !== null) {
      $xfer += $output->writeFieldBegin('secondFactorDeliveryHint', TType::STRING, 9);
      $xfer += $output->writeString($this->secondFactorDeliveryHint);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class BootstrapSettings {
  static $_TSPEC;

  public $serviceHost = null;
  public $marketingUrl = null;
  public $supportUrl = null;
  public $accountEmailDomain = null;
  public $enableFacebookSharing = null;
  public $enableGiftSubscriptions = null;
  public $enableSupportTickets = null;
  public $enableSharedNotebooks = null;
  public $enableSingleNoteSharing = null;
  public $enableSponsoredAccounts = null;
  public $enableTwitterSharing = null;
  public $enableLinkedInSharing = null;
  public $enablePublicNotebooks = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'serviceHost',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'marketingUrl',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'supportUrl',
          'type' => TType::STRING,
          ),
        4 => array(
          'var' => 'accountEmailDomain',
          'type' => TType::STRING,
          ),
        5 => array(
          'var' => 'enableFacebookSharing',
          'type' => TType::BOOL,
          ),
        6 => array(
          'var' => 'enableGiftSubscriptions',
          'type' => TType::BOOL,
          ),
        7 => array(
          'var' => 'enableSupportTickets',
          'type' => TType::BOOL,
          ),
        8 => array(
          'var' => 'enableSharedNotebooks',
          'type' => TType::BOOL,
          ),
        9 => array(
          'var' => 'enableSingleNoteSharing',
          'type' => TType::BOOL,
          ),
        10 => array(
          'var' => 'enableSponsoredAccounts',
          'type' => TType::BOOL,
          ),
        11 => array(
          'var' => 'enableTwitterSharing',
          'type' => TType::BOOL,
          ),
        12 => array(
          'var' => 'enableLinkedInSharing',
          'type' => TType::BOOL,
          ),
        13 => array(
          'var' => 'enablePublicNotebooks',
          'type' => TType::BOOL,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['serviceHost'])) {
        $this->serviceHost = $vals['serviceHost'];
      }
      if (isset($vals['marketingUrl'])) {
        $this->marketingUrl = $vals['marketingUrl'];
      }
      if (isset($vals['supportUrl'])) {
        $this->supportUrl = $vals['supportUrl'];
      }
      if (isset($vals['accountEmailDomain'])) {
        $this->accountEmailDomain = $vals['accountEmailDomain'];
      }
      if (isset($vals['enableFacebookSharing'])) {
        $this->enableFacebookSharing = $vals['enableFacebookSharing'];
      }
      if (isset($vals['enableGiftSubscriptions'])) {
        $this->enableGiftSubscriptions = $vals['enableGiftSubscriptions'];
      }
      if (isset($vals['enableSupportTickets'])) {
        $this->enableSupportTickets = $vals['enableSupportTickets'];
      }
      if (isset($vals['enableSharedNotebooks'])) {
        $this->enableSharedNotebooks = $vals['enableSharedNotebooks'];
      }
      if (isset($vals['enableSingleNoteSharing'])) {
        $this->enableSingleNoteSharing = $vals['enableSingleNoteSharing'];
      }
      if (isset($vals['enableSponsoredAccounts'])) {
        $this->enableSponsoredAccounts = $vals['enableSponsoredAccounts'];
      }
      if (isset($vals['enableTwitterSharing'])) {
        $this->enableTwitterSharing = $vals['enableTwitterSharing'];
      }
      if (isset($vals['enableLinkedInSharing'])) {
        $this->enableLinkedInSharing = $vals['enableLinkedInSharing'];
      }
      if (isset($vals['enablePublicNotebooks'])) {
        $this->enablePublicNotebooks = $vals['enablePublicNotebooks'];
      }
    }
  }

  public function getName() {
    return 'BootstrapSettings';
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
            $xfer += $input->readString($this->serviceHost);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->marketingUrl);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->supportUrl);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->accountEmailDomain);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->enableFacebookSharing);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 6:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->enableGiftSubscriptions);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 7:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->enableSupportTickets);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 8:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->enableSharedNotebooks);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 9:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->enableSingleNoteSharing);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 10:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->enableSponsoredAccounts);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 11:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->enableTwitterSharing);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 12:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->enableLinkedInSharing);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 13:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->enablePublicNotebooks);
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
    $xfer += $output->writeStructBegin('BootstrapSettings');
    if ($this->serviceHost !== null) {
      $xfer += $output->writeFieldBegin('serviceHost', TType::STRING, 1);
      $xfer += $output->writeString($this->serviceHost);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->marketingUrl !== null) {
      $xfer += $output->writeFieldBegin('marketingUrl', TType::STRING, 2);
      $xfer += $output->writeString($this->marketingUrl);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->supportUrl !== null) {
      $xfer += $output->writeFieldBegin('supportUrl', TType::STRING, 3);
      $xfer += $output->writeString($this->supportUrl);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->accountEmailDomain !== null) {
      $xfer += $output->writeFieldBegin('accountEmailDomain', TType::STRING, 4);
      $xfer += $output->writeString($this->accountEmailDomain);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->enableFacebookSharing !== null) {
      $xfer += $output->writeFieldBegin('enableFacebookSharing', TType::BOOL, 5);
      $xfer += $output->writeBool($this->enableFacebookSharing);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->enableGiftSubscriptions !== null) {
      $xfer += $output->writeFieldBegin('enableGiftSubscriptions', TType::BOOL, 6);
      $xfer += $output->writeBool($this->enableGiftSubscriptions);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->enableSupportTickets !== null) {
      $xfer += $output->writeFieldBegin('enableSupportTickets', TType::BOOL, 7);
      $xfer += $output->writeBool($this->enableSupportTickets);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->enableSharedNotebooks !== null) {
      $xfer += $output->writeFieldBegin('enableSharedNotebooks', TType::BOOL, 8);
      $xfer += $output->writeBool($this->enableSharedNotebooks);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->enableSingleNoteSharing !== null) {
      $xfer += $output->writeFieldBegin('enableSingleNoteSharing', TType::BOOL, 9);
      $xfer += $output->writeBool($this->enableSingleNoteSharing);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->enableSponsoredAccounts !== null) {
      $xfer += $output->writeFieldBegin('enableSponsoredAccounts', TType::BOOL, 10);
      $xfer += $output->writeBool($this->enableSponsoredAccounts);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->enableTwitterSharing !== null) {
      $xfer += $output->writeFieldBegin('enableTwitterSharing', TType::BOOL, 11);
      $xfer += $output->writeBool($this->enableTwitterSharing);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->enableLinkedInSharing !== null) {
      $xfer += $output->writeFieldBegin('enableLinkedInSharing', TType::BOOL, 12);
      $xfer += $output->writeBool($this->enableLinkedInSharing);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->enablePublicNotebooks !== null) {
      $xfer += $output->writeFieldBegin('enablePublicNotebooks', TType::BOOL, 13);
      $xfer += $output->writeBool($this->enablePublicNotebooks);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class BootstrapProfile {
  static $_TSPEC;

  public $name = null;
  public $settings = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'name',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'settings',
          'type' => TType::STRUCT,
          'class' => '\EDAM\UserStore\BootstrapSettings',
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['name'])) {
        $this->name = $vals['name'];
      }
      if (isset($vals['settings'])) {
        $this->settings = $vals['settings'];
      }
    }
  }

  public function getName() {
    return 'BootstrapProfile';
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
            $xfer += $input->readString($this->name);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRUCT) {
            $this->settings = new \EDAM\UserStore\BootstrapSettings();
            $xfer += $this->settings->read($input);
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
    $xfer += $output->writeStructBegin('BootstrapProfile');
    if ($this->name !== null) {
      $xfer += $output->writeFieldBegin('name', TType::STRING, 1);
      $xfer += $output->writeString($this->name);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->settings !== null) {
      if (!is_object($this->settings)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('settings', TType::STRUCT, 2);
      $xfer += $this->settings->write($output);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class BootstrapInfo {
  static $_TSPEC;

  public $profiles = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'profiles',
          'type' => TType::LST,
          'etype' => TType::STRUCT,
          'elem' => array(
            'type' => TType::STRUCT,
            'class' => '\EDAM\UserStore\BootstrapProfile',
            ),
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['profiles'])) {
        $this->profiles = $vals['profiles'];
      }
    }
  }

  public function getName() {
    return 'BootstrapInfo';
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
          if ($ftype == TType::LST) {
            $this->profiles = array();
            $_size0 = 0;
            $_etype3 = 0;
            $xfer += $input->readListBegin($_etype3, $_size0);
            for ($_i4 = 0; $_i4 < $_size0; ++$_i4)
            {
              $elem5 = null;
              $elem5 = new \EDAM\UserStore\BootstrapProfile();
              $xfer += $elem5->read($input);
              $this->profiles []= $elem5;
            }
            $xfer += $input->readListEnd();
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
    $xfer += $output->writeStructBegin('BootstrapInfo');
    if ($this->profiles !== null) {
      if (!is_array($this->profiles)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('profiles', TType::LST, 1);
      {
        $output->writeListBegin(TType::STRUCT, count($this->profiles));
        {
          foreach ($this->profiles as $iter6)
          {
            $xfer += $iter6->write($output);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

final class Constant extends \Thrift\Type\TConstant {
  static protected $EDAM_VERSION_MAJOR;
  static protected $EDAM_VERSION_MINOR;

  static protected function init_EDAM_VERSION_MAJOR() {
    return 1;
  }

  static protected function init_EDAM_VERSION_MINOR() {
    return 25;
  }
}


