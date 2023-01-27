<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/index.min.css">
  <script type="module">
  // Import the functions you need from the SDKs you need
  import {
    initializeApp
  } from "https://www.gstatic.com/firebasejs/9.16.0/firebase-app.js";
  import {
    getAnalytics
  } from "https://www.gstatic.com/firebasejs/9.16.0/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyDvYtCrqScLstXtTcaEDcfyfaWti5668KU",
    authDomain: "my-wordpress-42109.firebaseapp.com",
    projectId: "my-wordpress-42109",
    storageBucket: "my-wordpress-42109.appspot.com",
    messagingSenderId: "801924458373",
    appId: "1:801924458373:web:9dc587233f4679c49f46ec",
    measurementId: "G-NM2DM9Y7B6"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
  </script>
  <title>WordPress Template</title>
</head>

<body>
  <h1>Hello WordPress by Firebase!!</h1>
  <div class="logos">
    <img class="wp-logo" src="<?php echo get_template_directory_uri() ?>/image/WordPress-logotype-wmark.png" alt="">
    <span class="cross">×</span>
    <img class="firebase-logo" src="<?php echo get_template_directory_uri() ?>/image/logo-logomark.png" alt="">
  </div>
</body>

</html>