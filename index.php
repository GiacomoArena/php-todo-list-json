<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;0,500;0,700;0,900;1,700&display=swap" rel="stylesheet">
<!-- font awesome  -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css' integrity='sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==' crossorigin='anonymous'/>
  <!-- link CSS -->
  <link rel="stylesheet" href="css/style.css">
  <!-- link vue -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <!-- link axios -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js' integrity='sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==' crossorigin='anonymous'></script>
  <title>PHP ToDo List JSON</title>
  </head>

  <body>
    <div id="app" class="main-container">

      <div class="logo-container">
        <img src="img/boolean-logo.png" alt="Logo" class="logo">
      </div>
      <!-- start input area -->
      <div class="input-area">

        <input 
        @keyup.enter="add()"
        v-model="newTask"
        type="text" 
        placeholder="Cose da fare ?"
        >

        <button
        @click="add(i)" class="button">Aggiungi
      </button>
        
      </div>

      <div class="error">
        <span>{{error}}</span>
      </div>
      <div class="task-container">

        <h3  class="empty-message" v-if="tasks.length === 0">
          Non hai nulla da fare al momento! 
        </h3>

        <ul v-else class="lista-tasks">

          <li
          v-for="(task,i) in tasks"
          
          
          >

            <span >{{i+1+" ) "}}{{task.text}}</span>
            <i 
            class="fa-solid fa-trash"
            @click.stop="remove(i)"
            ></i>

          </li>
        </ul>
      </div>

    </div>
<!-- script JS -->
    <script src="js/script.js"></script>
</body>
</html>