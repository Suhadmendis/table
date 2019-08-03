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


   <!-- 

        <div class="container">
            <div class="row">
                <div id="" class="col-md-4">
                   
                </div>
                 <div id="login-form" class="col-md-4">
                    <div>
                      
                        <div class="form-group">
                            <h1 id="topic"><center>PAY</center></h1>
                        </div>
                    </div>
                  
                    <div class="form-group"></div>

                    <strong id="lab">Username:</strong>

                    <input class="form-control"  name="UserName" type="text" id="txtUserName" onkeypress="keyset('txtPassword', event)"  />



                    <strong id="lab">Password:</strong>

                    <input class="form-control" name="Password" type="password" id="txtPassword" onkeypress="keyset('lbtn', event)"/>
                    <div id="txterror" class="login_error">

                    </div>


                    <button class="btn btn-primary" id="lbtn"  name="lbtn" onclick="IsValiedData();">Sign in</button>

                </div>
                 <div id="" class="col-md-4">
                  
                </div>
            </div>
        </div>
 -->
         <div id="app">




<!-- 
          <v-app id="inspire">
            <v-content>
              <v-container>Hello world</v-container>
              <v-btn>Button</v-btn>
            </v-content>
            <v-container grid-list-md text-center>
              <v-layout wrap>
                <v-flex xs12>
                  <v-card dark color="primary">
                    <v-card-text class="px-0">12</v-card-text>
                  </v-card>
                </v-flex>
                <v-flex v-for="i in 2" :key="`6${i}`" xs6>
                  <v-card dark color="secondary">
                    <v-card-text class="px-0">6</v-card-text>
                  </v-card>
                </v-flex>
                <v-flex v-for="i in 3" :key="`4${i}`" xs4>
                  <v-card dark color="primary">
                    <v-card-text class="px-0">4</v-card-text>
                  </v-card>
                </v-flex>
                <v-flex v-for="i in 4" :key="`3${i}`" xs3>
                  <v-card dark color="secondary">
                    <v-card-text class="px-0">3</v-card-text>
                  </v-card>
                </v-flex>
                <v-flex v-for="i in 6" :key="`2${i}`" xs2>
                  <v-card dark color="primary">
                    <v-card-text class="px-0">2</v-card-text>
                  </v-card>
                </v-flex>
                <v-flex v-for="i in 12" :key="`1${i}`" xs1>
                  <v-card dark color="secondary">
                    <v-card-text class="px-0">1</v-card-text>
                  </v-card>
                </v-flex>
              </v-layout>
            </v-container>
          </v-app> -->

<template>
  <v-app id="inspire">
    <v-content>

      <v-container
        fluid
        fill-height
      >

        <v-layout
          align-center
          justify-center
        >

          <v-flex
            xs12
            sm8
            md4
          >

            <v-card class="elevation-12">
              <v-toolbar
                color="primary"
                dark
                flat
              >
                <v-toolbar-title>Login form</v-toolbar-title>
                <v-spacer></v-spacer>

               <!--  <v-tooltip bottom>
                  <template v-slot:activator="{ on }">
                    <v-btn
                      :href="source"
                      icon
                      large
                      target="_blank"
                      v-on="on"
                    >
                      <v-icon>mdi-code-tags</v-icon>
                    </v-btn>
                  </template>
                  <span>Source</span>
                </v-tooltip> -->

              <!--   <v-tooltip right>
                  <template v-slot:activator="{ on }">
                    <v-btn
                      icon
                      large
                      href="https://codepen.io/johnjleider/pen/pMvGQO"
                      target="_blank"
                      v-on="on"
                    >
                      <v-icon>mdi-codepen</v-icon>
                    </v-btn>
                  </template>
                  <span>Codepen</span>
                </v-tooltip> -->

              </v-toolbar>

              <v-card-text>
                <v-form>
                  <v-text-field
                    id="txtUserName"
                    label="Login"
                    name="login"
                    prepend-icon=""
                    type="text"
                  ></v-text-field>

                  <v-text-field
                    id="txtPassword"
                    label="Password"
                    name="password"
                    prepend-icon=""
                    type="password"
                  ></v-text-field>
                </v-form>
              </v-card-text>
              <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn onclick="IsValiedData();" color="primary">Login</v-btn>
              </v-card-actions>
            </v-card>
          </v-flex>
        </v-layout>
      </v-container>
    </v-content>
  </v-app>
</template>





  </div>

        
    </body>    
</html>     


<script>
    var elem = document.getElementById("txtPassword");
    elem.onkeyup = function (e) {
        if (e.keyCode == 13) {
            IsValiedData();
        }
    }


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