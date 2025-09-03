<?php
namespace App\Http\Helpers;

class Helper 
{
    
    
  private static $private_key = '01F6e742cA7169D6113380D5f74727454f83cd29503AAFb0CBAb5dA7533486df';
  private static $public_key = '492c48d33d70aa0a7e8d3e14f7cb756a3f7cb4345ce9a97ecd56f01158d4bf81';
  private static $ch = null;



    public static function shout($string)
    {
        return strtoupper($string);
    }
    
    

// coinpayment code 


  // public static function Setup($private_key, $public_key) {
  //   $this->private_key = $private_key;
  //   $this->public_key = $public_key;
  //   static::$ch = null;
  // }
  
  /**
   * Gets the current CoinPayments.net exchange rate. Output includes both crypto and fiat currencies.
   * @param short If short == TRUE (the default), the output won't include the currency names and confirms needed to save bandwidth.
   */
  public static function GetRates($short = TRUE) {
    $short = $short ? 1:0;
    return Helper::api_call('rates', array('short' => $short));
  }
  /*
  
   */
  public static function GetBasicProfile() {
  
    return Helper::api_call('get_basic_info', []);
  }
  /**
   * Gets your current coin balances (only includes coins with a balance unless all = TRUE).<br />
   * @param all If all = TRUE then it will return all coins, even those with a 0 balance.
   */
  public static function GetBalances($all = FALSE) {   
    return Helper::api_call('balances', array('all' => $all ? 1:0));
  }
  
  /**
   * Creates a basic transaction with minimal parameters.<br />
   * See CreateTransaction for more advanced features.
   * @param amount The amount of the transaction (floating point to 8 decimals).
   * @param currency1 The source currency (ie. USD), this is used to calculate the exchange rate for you.
   * @param currency2 The cryptocurrency of the transaction. currency1 and currency2 can be the same if you don't want any exchange rate conversion.
   * @param buyer_email Set the buyer's email so they can automatically claim refunds if there is an issue with their payment.
   * @param address Optionally set the payout address of the transaction. If address is empty then it will follow your payout settings for that coin.
   * @param ipn_url Optionally set an IPN handler to receive notices about this transaction. If ipn_url is empty then it will use the default IPN URL in your account.
   */
  public static function CreateTransactionSimple($amount, $currency1, $currency2, $buyer_email, $address='', $ipn_url='') {    
    $req = array(
      'amount' => $amount,
      'currency1' => $currency1,
      'currency2' => $currency2,
      'buyer_email' => $buyer_email,
      'address' => $address,
      'ipn_url' => $ipn_url,
    );
    return Helper::api_call('create_transaction', $req);
  }

  public static function CreateTransaction($req) {
    // See https://www.coinpayments.net/apidoc-create-transaction for parameters
    return Helper::api_call('create_transaction', $req);
  }

  /**
   * Creates an address for receiving payments into your CoinPayments Wallet.<br />
   * @param currency The cryptocurrency to create a receiving address for.
   * @param ipn_url Optionally set an IPN handler to receive notices about this transaction. If ipn_url is empty then it will use the default IPN URL in your account.
   */
  public static function GetCallbackAddress($currency, $ipn_url = '') {    
    $req = array(
      'currency' => $currency,
      'ipn_url' => $ipn_url,
    );
    return Helper::api_call('get_callback_address', $req);
  }
public static function Gettxninfo($txn) {    
    $req = array(
      'txid' => $txn,
    );
    return Helper::api_call('get_tx_info', $req);
  }
  /**
   * Creates a withdrawal from your account to a specified address.<br />
   * @param amount The amount of the transaction (floating point to 8 decimals).
   * @param currency The cryptocurrency to withdraw.
   * @param address The address to send the coins to.
   * @param auto_confirm If auto_confirm is TRUE, then the withdrawal will be performed without an email confirmation.
   * @param ipn_url Optionally set an IPN handler to receive notices about this transaction. If ipn_url is empty then it will use the default IPN URL in your account.
   */
  public static function CreateWithdrawal($amount, $currency, $address, $auto_confirm = TRUE, $ipn_url = '') {   
    $req = array(
      'amount' => $amount,
      'currency' => $currency,
      'address' => $address,
      'auto_confirm' => $auto_confirm ? 1:0,
      'ipn_url' => $ipn_url,
    );
    return Helper::api_call('create_withdrawal', $req);
  }

  /**
   * Creates a transfer from your account to a specified merchant.<br />
   * @param currency The cryptocurrency to withdraw.
   * @param merchant The merchant ID to send the coins to.
   * @param auto_confirm If auto_confirm is TRUE, then the transfer will be performed without an email confirmation.
   */
  public static function CreateTransfer($amount, $currency, $merchant, $auto_confirm = FALSE) {    
    $req = array(
      'amount' => $amount,
      'currency' => $currency,
      'merchant' => $merchant,
      'auto_confirm' => $auto_confirm ? 1:0,
    );
    return Helper::api_call('create_transfer', $req);
  }

  /**
   * Creates a transfer from your account to a specified $PayByName tag.<br />
   * @param amount The amount of the transaction (floating point to 8 decimals).
   * @param currency The cryptocurrency to withdraw.
   * @param pbntag The $PayByName tag to send funds to.
   * @param auto_confirm If auto_confirm is TRUE, then the transfer will be performed without an email confirmation.
   */
  public static function SendToPayByName($amount, $currency, $pbntag, $auto_confirm = FALSE) {   
    $req = array(
      'amount' => $amount,
      'currency' => $currency,
      'pbntag' => $pbntag,
      'auto_confirm' => $auto_confirm ? 1:0,
    );
    return Helper::api_call('create_transfer', $req);
  }
  
  private static function is_setup() {
    return (!empty(static::$private_key) && !empty(static::$public_key));
  }
  
  private static function api_call($cmd, $req = array()) {
    if (!Helper::is_setup()) {
      return array('error' => 'You have not called the Setup function with your private and public keys!');
    }
    
    // Set the API command and required fields
    $req['version'] = 1;
    $req['cmd'] = $cmd;
    $req['key'] = static::$public_key;
    $req['format'] = 'json'; //supported values are json and xml
      
    // Generate the query string
    $post_data = http_build_query($req, '', '&');
      
    // Calculate the HMAC signature on the POST data
    $hmac = hash_hmac('sha512', $post_data, static::$private_key);
      
    // Create cURL handle and initialize (if needed)
    if (static::$ch === null) {
      static::$ch = curl_init('https://www.coinpayments.net/api.php');
      curl_setopt(static::$ch, CURLOPT_FAILONERROR, TRUE);
      curl_setopt(static::$ch, CURLOPT_RETURNTRANSFER, TRUE);
      curl_setopt(static::$ch, CURLOPT_SSL_VERIFYPEER, 0);
    }
    curl_setopt(static::$ch, CURLOPT_HTTPHEADER, array('HMAC: '.$hmac));
    curl_setopt(static::$ch, CURLOPT_POSTFIELDS, $post_data);
      
    $data = curl_exec(static::$ch);                
    if ($data !== FALSE) {
      if (PHP_INT_SIZE < 8 && version_compare(PHP_VERSION, '5.4.0') >= 0) {
        // We are on 32-bit PHP, so use the bigint as string option. If you are using any API calls with Satoshis it is highly NOT recommended to use 32-bit PHP
        $dec = json_decode($data, TRUE, 512, JSON_BIGINT_AS_STRING);
      } else {
        $dec = json_decode($data, TRUE);
      }
      if ($dec !== NULL && count($dec)) {
        return $dec;
      } else {
        // If you are using PHP 5.5.0 or higher you can use json_last_error_msg() for a better error message
        return array('error' => 'Unable to parse JSON result ('.json_last_error().')');
      }
    } else {
      return array('error' => 'cURL error: '.curl_error(static::$ch));
    }
  }



  // end coinpayment 
   
    // Total price with shipping and coupon
   


}