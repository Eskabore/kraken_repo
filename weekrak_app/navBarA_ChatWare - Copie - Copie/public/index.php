 <!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-app.js"></script>

<!-- include firebase database here JL -->
<script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-database.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebase.js/7.20,0/firebase-messaging,js"></script>
<script src="https://www.gstatic.com/firebase/7.20.0/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebase/7.20.0/firebase-firestore.js"></script>

<link rel="stylesheet" href="css/normalize.css">

    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.min.css'>

        <link rel="stylesheet" href="css/style.css">

<!-- TODO: Add SDKs for Firebase products that you want to use https://firebase.google.com/docs/web/setup#config-web-app -->

<script>
// My web app's Firebase configuration
    var firebaseConfig = {
        apiKey: "AIzaSyB8TbhNZDAQKuRLNWVDAXpCR0cGJrxOMa0",
        authDomain: "chatware-6396c.firebaseapp.com",
        databaseURL: "https://chatware-6396c.firebaseio.com",
        projectId: "chatware-6396c",
        storageBucket: "chatware-6396c.appspot.com",
        messagingSenderId: "470102707907",
        appId: "1:470102707907:web:99179e4b991d0334941c76",
        measurementId: "G-L0B7PEMSHX"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    firebase.analytics();

  firebase.database().ref("messages").on("child_removed", function (snapshot) {
    document.getElementById("message-" + snapshot.key).innerHTML = "This message has been deleted";
  });

  function deleteMessage(self) {
    var messageId = self.getAttribute("data-id");
    firebase.database().ref("messages").child(messageId).remove();
  }

  function sendMessage() {
    var message = document.getElementById("message").value;
    firebase.database().ref("messages").push().set({
      "message": message,
      "sender": myName
    });
    return false;
  }
</script>

<style>
  figure.avatar {
    bottom: 0px !important;
  }
  .btn-delete {
    background: red;
    color: white;
    border: none;
    margin-left: 10px;
    border-radius: 5px;
  }
</style>

<div class="chat">
  <div class="chat-title">
    <h1>ChatWare</h1>
    <h2>Chatbox 1.0.1/ Firebase</h2>
    <figure class="avatar">
      <img src="https://p7.hiclipart.com/preview/349/273/275/livechat-online-chat-computer-icons-chat-room-web-chat-others.jpg" /></figure>
  </div>
  <div class="messages">
    <div class="messages-content"></div>
  </div>
  <div class="message-box">
    <textarea type="text" class="message-input" id="message" placeholder="Type message..."></textarea>
    <button type="submit" class="message-submit">Send</button>
  </div>

</div>
<div class="bg"></div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.concat.min.js'></script>

        <script src="js/chat.js?v=<?= time(); ?>"></script> 