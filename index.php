<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
  </style>
</head>
<body>
  <div class="button-container">
    <button class="button-49 top-btn" role="button" data-button="Forward" onclick="sendButtonClick('Forward')">Forward</button>
    <button class="button-49 left-btn" role="button" data-button="Left" onclick="sendButtonClick('Left')">Left</button>
    <button class="button-49 main-btn" role="button" data-button="Stop" onclick="sendButtonClick('Stop')">Stop</button>
    <button class="button-49 right-btn" role="button" data-button="Right" onclick="sendButtonClick('Right')">Right</button>
    <button class="button-49 bottom-btn" role="button" data-button="Backward" onclick="sendButtonClick('Backward')">Backward</button>
  </div>

  <script>
    function sendButtonClick(buttonName) {
      console.log('Sending:', buttonName);
      fetch('save_button_click.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'buttonname=' + encodeURIComponent(buttonName)
      });
    }
  </script>

</body>
</html>
