<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Your OTP Code</title>
</head>
<body style="margin:0; padding:0; font-family:Arial, sans-serif; background:#f6f6f6;">
  <table width="100%" bgcolor="#f6f6f6" cellpadding="0" cellspacing="0">
    <tr>
      <td>
        <table align="center" cellpadding="0" cellspacing="0" width="600" style="background:#ffffff; margin:30px auto; padding:20px; border-radius:8px; box-shadow:0 0 10px rgba(0,0,0,0.1);">
          <tr>
            <td style="text-align:center;">
              <h2 style="color:#333;">Your One-Time Password (OTP)</h2>
              <p style="color:#555; font-size:16px;">Use the following code to complete your login or verification process:</p>
              <div style="margin:20px auto; display:inline-block; background:#f1f1f1; padding:15px 25px; border-radius:5px; font-size:24px; letter-spacing:5px; font-weight:bold; color:#222;">
                {{ $view_message['code'] }} 
              </div>
              <p style="color:#888; font-size:14px; margin-top:30px;">This OTP is valid for 10 minutes. Do not share it with anyone.</p>
              <p style="color:#aaa; font-size:12px; margin-top:20px;">If you didn't request this, you can safely ignore this email.</p>
              <hr style="margin-top:30px; border:0; border-top:1px solid #eee;">
              <p style="color:#999; font-size:12px;">&copy; {{ date('Y') }} {{siteName()}}. All rights reserved.</p>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>
