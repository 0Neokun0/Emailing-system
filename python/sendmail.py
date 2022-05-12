import smtplib
from email.mime.text import MIMEText

# メール送信サーバーの設定
smtp_setting = {
    'host': 'smtp.lolipop.jp',
    'port': 465,
    'account': 'contact@upcolor.weblike.jp',
    'password': 'Gtm-123gtm123'
}

# メールの内容
email_content = {
    # あて先のメールアドレス
    'To': 'contact@upcolor.weblike.jp',
    # 送信元のメールアドレス
    'From': 'contact@upcolor.weblike.jp',
    # メールの件名
    'Subject': 'Pythonからのテストメール',
    # メールの本文
    'Text': 'このメールはPythonで送信しています。'
}

# メールデータ作成
msg = MIMEText(email_content['Text'], 'plain', 'utf-8')
msg['Subject'] = email_content['Subject']
msg['From'] = email_content['From']
msg['To'] = email_content['To']

# メール送信
with smtplib.SMTP_SSL(smtp_setting['host'], smtp_setting['port'], timeout=10) as smtp:
    smtp.login(smtp_setting['account'], smtp_setting['password'])
    smtp.send_message(msg)
    smtp.quit()