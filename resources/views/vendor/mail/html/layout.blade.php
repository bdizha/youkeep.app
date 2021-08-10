<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
</head>
<body>
<style>
  @media only screen and (max-width: 600px) {
    .inner-body {
      width: 100% !important;
    }

    .footer {
      width: 100% !important;
    }
  }

  @media only screen and (max-width: 500px) {
    .button {
      width: 100% !important;
    }
  }
</style>
<table class="wrapper" width="100%" cellpadding="0" cellspacing="0" role="presentation"
       style="width:100.0%;background:#f3f6f9;border-collapse:collapse"
>
  <tr>
    <td class="height-60" valign="top">
      <p class="MsoNormal" align="center" style="text-align:center">&nbsp;<u></u><u></u></p>
    </td>
  </tr>
  <tr>
    <td align="center">
      <table class="content" cellpadding="0" cellspacing="0" role="presentation">
      {{ $header ?? '' }}
      <!-- Email Body -->
        {{ $greeting ?? '' }}
        <tr>
          <td class="body" colspan="3" width="100%" cellpadding="0" cellspacing="0">
            <table class="inner-body" align="center" width="100%" cellpadding="0" cellspacing="0" role="presentation">
              <!-- Body content -->
              <tr>
                <td class="content-cell">
                  {{ Illuminate\Mail\Markdown::parse($slot) }}

                  {{ $subcopy ?? '' }}
                </td>
              </tr>
            </table>
          </td>
        </tr>
        {{ $footer ?? '' }}
      </table>
    </td>
  </tr>
  <tr>
    <td class="height-60" valign="top">
      <p class="MsoNormal" align="center" style="text-align:center">&nbsp;<u></u><u></u></p>
    </td>
  </tr>
  <tr>
    <td valign="top" style="padding: 24px;">
      <h3 align="center" style="font-size:16px; margin:0cm;color:#484848;text-align:center;line-height:15.0pt">
        <span style="font-size:14px; margin:0cm;color:#484848;text-align:center;line-height:15.0pt">
          {!! "&copy;" !!} {{ date('Y') }} {{ config('app.name') }} {{ 'All rights reserved.' }}
        </span>
      </h3>
      <p class="MsoNormal" align="center" style="text-align:center">
        <a style="font-size:14px;font-family: arial,sans-serif, -apple-system, BlinkMacSystemFont,serif;color:#3B9CFF;font-weight:normal" href="{{ url('/terms') }}">
          Terms of Use
        </a>
        <span style="font-size:14px;font-family: arial,sans-serif, -apple-system, BlinkMacSystemFont,serif;color:#484848;font-weight:normal">~</span>
        <a style="font-size:14px;font-family: arial,sans-serif, -apple-system, BlinkMacSystemFont,serif;color:#3B9CFF;font-weight:normal" href="{{ url('/privacy') }}">
          Priviacy Policy
        </a>
      </p>
    </td>
  </tr>
</table>
</body>
</html>
