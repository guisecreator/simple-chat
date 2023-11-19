<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" href="{{ asset('css/chat.css') }}">
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; } .chat-container { max-width: 600px; margin: 20px auto; border: 1px solid #ccc; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 5px; overflow: hidden; } .chat-header { background-color: #3498db; color: #fff; padding: 10px; text-align: center; } .chat-messages { max-height: 400px; overflow-y: auto; padding: 10px; } .chat-input { display: flex; padding: 10px; background-color: #f1f1f1; } textarea { flex: 1; padding: 8px; margin-right: 10px; } button { background-color: #3498db; color: #fff; border: none; padding: 8px 15px; cursor: pointer; border-radius: 3px; } button:hover { background-color: #2980b9; }
    </style>
</head>
<body>
    <div class="chat-container">
        <div class="chat-header">
            <h1>General Chat</h1>
        </div>
        <div class="chat-messages" id="chat-messages">

        </div>
        <div class="chat-input">
            <textarea id="message-input" placeholder="Enter your message..."></textarea>
            <button onclick="sendMessage()">Send</button>
        </div>
    </div>
   <script src="/js/chat.js"></script>
</body>
</html>
