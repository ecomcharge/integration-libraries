<?php
namespace eComCharge;

class Card {
  protected $_card_number;
  protected $_card_holder;
  protected $_card_exp_month;
  protected $_card_exp_year;
  protected $_card_cvc;
  protected $_card_token = null;
  protected $_card_skip_threed_secure = false;


  public function setCardNumber($number) {
    $this->_card_number = $number;
  }
  public function getCardNumber() {
    return $this->_card_number;
  }

  public function setCardHolder($holder) {
    $this->_card_holder = $holder;
  }
  public function getCardHolder() {
    return $this->_card_holder;
  }

  public function setCardExpMonth($exp_month) {
    try {
      $this->_card_exp_month = sprintf('%02d', (int)$exp_month);
    } catch (\Exception $e) {
      throw new \Exception($e->getMessage());
    }
  }
  public function getCardExpMonth() {
    return $this->_card_exp_month;
  }

  public function setCardExpYear($exp_year) {
    $this->_card_exp_year = $exp_year;
  }
  public function getCardExpYear() {
    return $this->_card_exp_year;
  }

  public function setCardCvc($cvc) {
    $this->_card_cvc = $cvc;
  }
  public function getCardCvc() {
    return $this->_card_cvc;
  }

  public function setCardToken($token) {
    $this->_card_token = $token;
  }
  public function getCardToken() {
    return $this->_card_token;
  }

  public function setSkip3D(bool $skip) {
    $this->_card_skip_threed_secure = $skip;
  }
  public function getSkip3D() {
    return $this->_card_skip_threed_secure;
  }
}
?>
