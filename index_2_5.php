<?php
include './CheckCookie.php';
$cookie_name = "user";
if (isset($_COOKIE[$cookie_name])) {

    $mo = chk_cookie($_COOKIE[$cookie_name]);

    if ($mo == "ok") {
        header('Location: ' . "home.php");
        exit();
    }
}
?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login Page</title>
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link  href="css/login.css" rel="stylesheet">    

        <link rel="stylesheet" href="css/ionicons/css/ionicons.min.css">
        <link rel="icon" type="image/png" sizes="16x16" href="andpic.png">

        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
          <link href="https://cdn.jsdelivr.net/npm/@mdi/font@latest/css/materialdesignicons.min.css" rel="stylesheet">
          <link href="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.min.css" rel="stylesheet">
          <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">


        <script src="js/user.js"></script>
        
        <style>
            
            body{
                background-color: #3f484f;
            }
            #login-form{
                margin-top: 200px;
                padding: 50px;
                background-color: #e7535f;
                border: 0px;
            }
            #topic{
                color: white;
            }
            #lab{
                color: white;
            }
            #txterror{
                color: white;
            }
        </style>
        
    </head>
    <body>


         <div id="app">






<template>
  <v-app id="inspire">
    <!-- dr -->
    <v-navigation-drawer
      v-model="drawer"
      app
      right
    >
      <v-list dense>
        <v-list-item @click="">
          <v-list-item-action>
            <v-icon>home</v-icon>
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title>Home</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
        <v-list-item @click="">
          <v-list-item-action>
            <v-icon>contact_mail</v-icon>
          </v-list-item-action>
          <v-list-item-content>
            <v-list-item-title>Contact</v-list-item-title>
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>

    <v-app-bar
      app
      color="cyan"
      dark
    >
      <v-spacer></v-spacer>
      <v-toolbar-title>Application</v-toolbar-title>
      <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
    </v-app-bar>

    <v-content>
      <v-container
        fluid
        fill-height
      >
        <v-layout
          justify-center
          align-center
        >
          
        </v-layout>
      </v-container>
    </v-content>

    <v-footer
      color="cyan"
      app
    >
      <v-spacer></v-spacer>
      <span class="white--text">&copy; 2019</span>
    </v-footer>
  </v-app>
</template>


  </div>

        
    </body>    
</html>     


<script>
    // var elem = document.getElementById("txtPassword");
    // elem.onkeyup = function (e) {
        // if (e.keyCode == 13) {
            // IsValiedData();
        // }
    // }


</script>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.js"></script>
  <script>
    new Vue({
        el: '#app',
        vuetify: new Vuetify(),

      })
  </script>
  <script>
  export default {
    props: {
      source: String,
    },
    data: () => ({
      drawer: null,
    }),
  }
</script>



<script src="js/jquery-2.1.0.js"></script>
<script src="js/bootstrap.min.js"></script>