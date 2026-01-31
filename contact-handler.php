<?php
// Contact form handler (Resend)

// Language + translations for internal email text
include_once __DIR__ . '/includes/language.php';
include_once __DIR__ . '/includes/translations.php';

function loadDotEnv($path) {
    if (!file_exists($path)) return;
    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if (!is_array($lines)) return;

    foreach ($lines as $line) {
        $line = trim($line);
        if ($line === '' || str_starts_with($line, '#')) continue;
        $pos = strpos($line, '=');
        if ($pos === false) continue;

        $key = trim(substr($line, 0, $pos));
        $value = trim(substr($line, $pos + 1));

        // Strip wrapping quotes
        if ((str_starts_with($value, '"') && str_ends_with($value, '"')) ||
            (str_starts_with($value, "'") && str_ends_with($value, "'"))) {
            $value = substr($value, 1, -1);
        }

        if ($key !== '') {
            $_ENV[$key] = $value;
            putenv($key . '=' . $value);
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? trim((string)$_POST['name']) : '';
    $email = isset($_POST['email']) ? trim((string)$_POST['email']) : '';
    $phone = isset($_POST['phone']) ? trim((string)$_POST['phone']) : '';
    $message = isset($_POST['message']) ? trim((string)$_POST['message']) : '';
    $privacy = isset($_POST['privacy']) ? true : false;

    // Basic validation
    if (empty($name) || empty($email) || empty($message)) {
        header('Location: kontakti.php?error=missing_fields#contact-form');
        exit;
    }

    // Privacy policy validation
    if (!$privacy) {
        header('Location: kontakti.php?error=privacy_required#contact-form');
        exit;
    }

    // Email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Location: kontakti.php?error=invalid_email#contact-form');
        exit;
    }

    // Load .env (gitignored)
    loadDotEnv(__DIR__ . '/.env');

    // Required config (from .env or server env vars)
    $resend_api_key = getenv('RESEND_API_KEY') ?: '';
    $to_email = getenv('CONTACT_EMAIL') ?: (getenv('CONTACT_TO_EMAIL') ?: '');

    // Sender: Resend requires a verified sender. If not provided, use Resend's onboarding sender.
    // For production, set RESEND_FROM_EMAIL in your environment (or extend .env if you want).
    $from_email = getenv('RESEND_FROM_EMAIL') ?: 'Riolit Website <onboarding@resend.dev>';

    if (empty($resend_api_key) || empty($from_email) || empty($to_email)) {
        // Missing server-side configuration
        header('Location: kontakti.php?error=send_failed#contact-form');
        exit;
    }

    $email_subject = __('email_subject_new_message');
    $text_body = __('email_label_name') . ": {$name}\n";
    $text_body .= __('email_label_email') . ": {$email}\n";
    if (!empty($phone)) {
        $text_body .= __('email_label_phone') . ": {$phone}\n";
    }
    $text_body .= "\n" . __('email_label_message') . ":\n{$message}\n";

    $safe_name = htmlspecialchars($name, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    $safe_email = htmlspecialchars($email, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    $safe_phone = htmlspecialchars($phone, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    $safe_message_html = nl2br(htmlspecialchars($message, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'));
    $safe_message_preheader = htmlspecialchars(mb_substr($message, 0, 120, 'UTF-8'), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    $sent_at = date('Y-m-d H:i:s');

    // Email-friendly HTML (table layout + inline styles)
    $html_body = '<!doctype html><html lang="' . htmlspecialchars($lang, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') . '"><head><meta charset="UTF-8"></head><body style="margin:0;padding:0;background:#f5f5f5;">';
    $html_body .= '<div style="display:none;max-height:0;overflow:hidden;opacity:0;color:transparent;">' . htmlspecialchars(__('email_preheader_new_message'), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') . ' ' . $safe_message_preheader . '</div>';
    $html_body .= '<table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="width:100%;background:#f5f5f5;padding:24px 0;">';
    $html_body .= '  <tr><td align="center">';
    $html_body .= '    <table role="presentation" width="640" cellpadding="0" cellspacing="0" style="width:640px;max-width:640px;background:#ffffff;border-radius:14px;overflow:hidden;border:1px solid #e6e6e6;">';

    // Header
    $html_body .= '      <tr><td style="padding:22px 24px;background:#1a5490;color:#ffffff;">';
    $html_body .= '        <div style="font-family:Montserrat,Segoe UI,Arial,sans-serif;font-size:18px;font-weight:700;line-height:1.3;">' . htmlspecialchars(__('email_subject_new_message'), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') . '</div>';
    $html_body .= '        <div style="font-family:Montserrat,Segoe UI,Arial,sans-serif;font-size:13px;opacity:0.9;margin-top:6px;">' . htmlspecialchars(__('email_received_at'), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') . ' ' . htmlspecialchars($sent_at, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') . '</div>';
    $html_body .= '      </td></tr>';

    // Content card
    $html_body .= '      <tr><td style="padding:20px 24px 8px 24px;">';
    $html_body .= '        <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="width:100%;border-collapse:separate;border-spacing:0;">';
    $html_body .= '          <tr>';
    $html_body .= '            <td style="padding:12px 14px;background:#f8fafc;border:1px solid #edf2f7;border-radius:12px;">';

    // Key/value table
    $html_body .= '              <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="width:100%;border-collapse:collapse;">';
    $html_body .= '                <tr>';
    $html_body .= '                  <td style="font-family:Montserrat,Segoe UI,Arial,sans-serif;font-size:12px;color:#6b7280;padding:6px 0;width:160px;">' . htmlspecialchars(__('email_label_name'), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') . '</td>';
    $html_body .= '                  <td style="font-family:Montserrat,Segoe UI,Arial,sans-serif;font-size:14px;color:#111827;padding:6px 0;font-weight:600;">' . $safe_name . '</td>';
    $html_body .= '                </tr>';
    $html_body .= '                <tr>';
    $html_body .= '                  <td style="font-family:Montserrat,Segoe UI,Arial,sans-serif;font-size:12px;color:#6b7280;padding:6px 0;">' . htmlspecialchars(__('email_label_email'), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') . '</td>';
    $html_body .= '                  <td style="font-family:Montserrat,Segoe UI,Arial,sans-serif;font-size:14px;color:#111827;padding:6px 0;"><a href="mailto:' . $safe_email . '" style="color:#1a5490;text-decoration:none;font-weight:600;">' . $safe_email . '</a></td>';
    $html_body .= '                </tr>';
    $html_body .= '                <tr>';
    $html_body .= '                  <td style="font-family:Montserrat,Segoe UI,Arial,sans-serif;font-size:12px;color:#6b7280;padding:6px 0;">' . htmlspecialchars(__('email_label_phone'), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') . '</td>';
    $html_body .= '                  <td style="font-family:Montserrat,Segoe UI,Arial,sans-serif;font-size:14px;color:#111827;padding:6px 0;">' . (!empty($phone) ? $safe_phone : '<span style="color:#9ca3af;">' . htmlspecialchars(__('email_phone_empty'), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') . '</span>') . '</td>';
    $html_body .= '                </tr>';
    $html_body .= '              </table>';

    // Message block
    $html_body .= '              <div style="height:12px;line-height:12px;">&nbsp;</div>';
    $html_body .= '              <div style="font-family:Montserrat,Segoe UI,Arial,sans-serif;font-size:12px;color:#6b7280;margin-bottom:6px;">' . htmlspecialchars(__('email_label_message'), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') . '</div>';
    $html_body .= '              <div style="font-family:Montserrat,Segoe UI,Arial,sans-serif;font-size:14px;color:#111827;line-height:1.7;white-space:normal;">' . $safe_message_html . '</div>';

    $html_body .= '            </td>';
    $html_body .= '          </tr>';
    $html_body .= '        </table>';
    $html_body .= '      </td></tr>';

    // Footer
    $html_body .= '      <tr><td style="padding:10px 24px 18px 24px;">';
    $html_body .= '        <div style="font-family:Montserrat,Segoe UI,Arial,sans-serif;font-size:12px;color:#6b7280;line-height:1.6;">';
    $html_body .= '          ' . htmlspecialchars(__('email_footer_note'), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    $html_body .= '        </div>';
    $html_body .= '      </td></tr>';

    $html_body .= '    </table>';
    $html_body .= '  </td></tr>';
    $html_body .= '</table>';
    $html_body .= '</body></html>';

    $payload = [
        'from' => $from_email,
        'to' => [$to_email],
        'subject' => $email_subject,
        'text' => $text_body,
        'html' => $html_body,
        // So the recipient can reply directly to the sender
        'reply_to' => $email,
    ];

    $ch = curl_init('https://api.resend.com/emails');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: Bearer ' . $resend_api_key,
        'Content-Type: application/json',
        'Accept: application/json',
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload, JSON_UNESCAPED_UNICODE));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    $response = curl_exec($ch);
    $http_code = (int)curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $curl_err = curl_error($ch);
    curl_close($ch);

    if ($response === false || $http_code < 200 || $http_code >= 300) {
        // Optional: log for debugging (avoid exposing secrets to user)
        error_log('Resend send failed. HTTP=' . $http_code . ' err=' . $curl_err . ' resp=' . (is_string($response) ? $response : ''));
        header('Location: kontakti.php?error=send_failed#contact-form');
        exit;
    }

    // Redirect with success message
    header('Location: kontakti.php?success=1#contact-form');
    exit;
} else {
    header('Location: kontakti.php');
    exit;
}
?>
