<?php if (!class_exists('CaptchaConfiguration')) { return; }

// BotDetect PHP Captcha configuration options

return [
  // Captcha configuration for example page
  'ExampleCaptcha' => [
    'UserInputID' => 'CaptchaCode',
    'ImageWidth' => 150,
    'ImageHeight' => 40,
    'CodeLength' => CaptchaRandomization::GetRandomCodeLength(4,4),
    'ImageStyle' => ImageStyle::Overlap,
    'CustomLightColor' => '#fff',
  ],

];