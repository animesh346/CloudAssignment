<?php

function generate_csrf_token() {
  return hash_hmac('sha256', 'YOUR_SECRET_KEY', session_id());
}

?>
