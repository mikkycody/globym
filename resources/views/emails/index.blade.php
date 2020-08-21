<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head style="font-family: Helvetica, Arial, sans-serif;">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" style="font-family: Helvetica, Arial, sans-serif;">
  <meta name="viewport" content="width=device-width, initial-scale=1" style="font-family: Helvetica, Arial, sans-serif;">
  <title style="font-family: Helvetica, Arial, sans-serif;"><?= __transliterate('general_setting', null, 'store_name', getStoreSettings('store_name') ).(' Communication') ?> </title>
  <style type="text/css" media="screen" style="font-family: Helvetica, Arial, sans-serif;"></style>

  <style type="text/css" media="screen" style="font-family: Helvetica, Arial, sans-serif;">
    @media screen {
      * {
        font-family: 'Oxygen', 'Helvetica Neue', 'Arial', 'sans-serif' !important;
      }
    }
  </style>

  <style type="text/css" media="only screen and (max-width: 480px)" style="font-family: Helvetica, Arial, sans-serif;">
    @media only screen and (max-width: 480px) {
      table[class*="container-for-gmail-android"] {
        min-width: 290px !important;
        width: 100% !important;
      }
      img[class="force-width-gmail"] {
        display: none !important;
        width: 0 !important;
        height: 0 !important;
      }
      table[class="w320"] {
        width: 320px !important;
      }
      td[class*="mobile-header-padding-left"] {
        width: 160px !important;
        padding-left: 0 !important;
      }
      td[class*="mobile-header-padding-right"] {
        width: 160px !important;
        padding-right: 0 !important;
      }
      td[class="header-lg"] {
        font-size: 24px !important;
        padding-bottom: 5px !important;
      }
      td[class="content-padding"] {
        padding: 5px 0 5px !important;
      }
      td[class="button"] {
        padding: 5px 5px 30px !important;
      }
      td[class*="free-text"] {
        padding: 10px 18px 30px !important;
      }
      td[class~="mobile-hide-img"] {
        display: none !important;
        height: 0 !important;
        width: 0 !important;
        line-height: 0 !important;
      }
      td[class~="item"] {
        width: 140px !important;
        vertical-align: top !important;
      }
      td[class~="quantity"] {
        width: 50px !important;
      }
      td[class~="price"] {
        width: 90px !important;
      }
      td[class="item-table"] {
        padding: 30px 20px !important;
      }
      td[class="mini-container-left"],
      td[class="mini-container-right"] {
        padding: 0 15px 15px !important;
        display: block !important;
        width: 290px !important;
      }
    }
  </style>
</head>

<body bgcolor="#ffffff" style="-webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; color: #676767; font-family: Helvetica, Arial, sans-serif; height: 100%; margin: 0 !important; width: 100% !important;">
  <style type="text/css" style="font-family: Helvetica, Arial, sans-serif;"></style>
  <table align="center" cellpadding="0" cellspacing="0" class="container-for-gmail-android" width="100%" style="border-collapse: collapse !important; font-family: Helvetica, Arial, sans-serif; min-width: 600px;">
    <tbody>
      <tr style="font-family: Helvetica, Arial, sans-serif;">
        <td align="left" valign="top" width="100%" style="background: #ffffff; border-collapse: collapse; color: #777777; font-family: Helvetica, Arial, sans-serif; font-size: 14px; line-height: 21px; text-align: center;">
          <center style="font-family: Helvetica, Arial, sans-serif;">
            <table cellspacing="0" cellpadding="0" width="100%" bgcolor="#<?= getStoreSettings('logo_background_color') ?>" style="border-bottom:1px solid #ddd; background-color: #<?= getStoreSettings('logo_background_color') ?>; border-collapse: collapse !important; font-family: Helvetica, Arial, sans-serif;">
              <tbody>
                <tr style="font-family: Helvetica, Arial, sans-serif;">
                  <td width="100%" height="80" valign="top" style="border-collapse: collapse; color: #777777; font-family: Helvetica, Arial, sans-serif; font-size: 14px; line-height: 21px; text-align: center; vertical-align: middle;">
                    <center style="font-family: Helvetica, Arial, sans-serif;">
                      <table cellpadding="0" cellspacing="0" width="600" class="w320" style="border-collapse: collapse !important; font-family: Helvetica, Arial, sans-serif;">
                        <tbody>
                          <tr style="font-family: Helvetica, Arial, sans-serif;">
                            <td class="pull-left mobile-header-padding-left" style="border-collapse: collapse; color: #777777; font-family: Helvetica, Arial, sans-serif; font-size: 14px; line-height: 21px; padding-left: 10px; text-align: left; vertical-align: middle; width: 290px;">
                              <a href="" style="color: #676767; font-family: Helvetica, Arial, sans-serif; text-decoration: none !important;"><img width="auto" height="47" src="<?=  getStoreSettings('logo_image_url') ?>" alt="<?= __transliterate('general_setting', null, 'store_name', getStoreSettings('store_name') ) ?>" style="-ms-interpolation-mode: bicubic; border: none; font-family: Helvetica, Arial, sans-serif; max-width: 600px; outline: none; text-decoration: none;"></a>
                            </td>
                            <td class="pull-right mobile-header-padding-right" style="border-collapse: collapse; color: #4d4d4d; font-family: Helvetica, Arial, sans-serif; font-size: 14px; line-height: 21px; padding-left: 10px; text-align: right; width: 290px;">
                            @if(getStoreSettings('social_twitter'))
                              <a href="https://twitter.com/<?= getStoreSettings('social_twitter') ?>" style="color: #676767; font-family: Helvetica, Arial, sans-serif; text-decoration: none !important;"><img width="44" height="47" src="<?= url('resources/assets/imgs/email-twitter.gif') ?>" alt="twitter" style="-ms-interpolation-mode: bicubic; border: none; font-family: Helvetica, Arial, sans-serif; max-width: 600px; outline: none; text-decoration: none;"></a>
                            @endif
                            @if(getStoreSettings('social_facebook'))
                              <a href="https://www.facebook.com/<?= getStoreSettings('social_facebook') ?>" style="color: #676767; font-family: Helvetica, Arial, sans-serif; text-decoration: none !important;"><img width="38" height="47" src="<?= url('resources/assets/imgs/email-facebook.gif') ?>" alt="facebook" style="-ms-interpolation-mode: bicubic; border: none; font-family: Helvetica, Arial, sans-serif; max-width: 600px; outline: none; text-decoration: none;"></a>
                            @endif
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </center>
                  </td>
                </tr>
              </tbody>
            </table>
          </center>
        </td>
      </tr>
    @if(isDemoForAdmin())
      <tr style="font-family: Helvetica, Arial, sans-serif;">
        <td align="center" valign="top" width="100%" style="background-color: #fff6c9; border-collapse: collapse; color: #8a6d3b; font-family: Helvetica, Arial, sans-serif; font-size: 14px; line-height: 21px; padding: 10px 0 10px; text-align: center;" class="content-padding">
          <center style="font-family: Helvetica, Arial, sans-serif;">
                <strong><?= __tr('Please Note: ') ?></strong><?= __tr('Sample Email Demonstration purposes only.') ?>
          </center>
        </td>
      </tr>
    @endif
      <tr style="font-family: Helvetica, Arial, sans-serif;">
        <td align="center" valign="top" width="100%" style="background-color: #f7f7f7; border-collapse: collapse; color: #777777; font-family: Helvetica, Arial, sans-serif; font-size: 14px; line-height: 21px; padding: 20px 0 5px; text-align: center;" class="content-padding">
          <center style="font-family: Helvetica, Arial, sans-serif;">
            @if(isset($emailsTemplate))
                @include($emailsTemplate)
            @endIf
            @if(isset($emailContent))
                @include($emailContent)
            @endIf
          </center>
        </td>
      </tr>
      <tr style="font-family: Helvetica, Arial, sans-serif;">
        <td align="center" valign="top" width="100%" style="background-color: #f7f7f7; border-collapse: collapse; color: #777777; font-family: Helvetica, Arial, sans-serif; font-size: 14px; height: 15px; line-height: 21px; text-align: center;">
        </td>
      </tr>
      <tr style="font-family: Helvetica, Arial, sans-serif;">
        <td align="center" valign="top" width="100%" style="background-color: #ffffff; border-collapse: collapse; color: #777777; font-family: Helvetica, Arial, sans-serif; font-size: 14px; height: 100px; line-height: 21px; text-align: center;">
          <center style="font-family: Helvetica, Arial, sans-serif;">
            <table cellspacing="0" cellpadding="0" width="600" class="w320" style="border-collapse: collapse !important; font-family: Helvetica, Arial, sans-serif;">
              <tbody>
                <tr style="font-family: Helvetica, Arial, sans-serif;">
                  <td style="border-collapse: collapse; color: #777777; font-family: Helvetica, Arial, sans-serif; font-size: 14px; line-height: 21px; padding: 25px 0 25px; text-align: center;">
                    <strong style="font-family: Helvetica, Arial, sans-serif;"><?= __transliterate('general_setting', null, 'store_name', getStoreSettings('store_name') ) ?></strong><br style="font-family: Helvetica, Arial, sans-serif;"> 
                    <?= __transliterate('misc_setting', null, 'append_email_message', getStoreSettings('append_email_message') ); ?>
                    <?= __transliterate('contact_setting', null, 'contact_address', getStoreSettings('contact_address') ) ?>
                </tr>
              </tbody>
            </table>
          </center>
        </td>
      </tr>
    </tbody>
  </table>
</body>

</html>