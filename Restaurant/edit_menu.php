<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="edit.css">
        

        <title>Admin_home</title>    
    </head>
    <body>
        <!--navbar-->
        <div class="dropdown">
          <nav>
            <ul>
              <li><a href="./menu.php?usertype=admin%20&username=admin">Home</a></li>
              <li><a href="#">Our Specias</a>
                 <ul>
                     <li><a href="insert_s.php">Insert</a></li>
                      <li><a href="delete_s.php">Delete</a></li>
                      <li><a href="update_s.php">Update</a></li>
                 </ul>
             </li>
             <li><a href="#">Top Dishes</a>
                 <ul>
                     <li><a href="insert_t.php">Insert</a></li>
                      <li><a href="delete_t.php">Delete</a></li>
                      <li><a href="update_t.php">Update</a></li>
                 </ul>
             </li>
             <li><a href="#">Breakfast</a>
                 <ul>
                     <li><a href="insert_b.php">Insert</a></li>
                      <li><a href="delete_b.php">Delete</a></li>
                      <li><a href="update_b.php">Update</a></li>
                 </ul>
             </li>
             <li><a href="#">L & D</a>
                 <ul>
                     <li><a href="insert_ld.php">Insert</a></li>
                      <li><a href="delete_ld.php">Delete</a></li>
                      <li><a href="update_ld.php">Update</a></li>
                 </ul>
             </li>
                  
              
            </ul>
          </nav>
           
        </div> 
        
     <img height=650px src="./images/logo.jpg" alt="logo">

     
  
  <div class="alan-btn"></div>
    <script type="text/javascript"
     src="https://studio.alan.app/web/lib/alan_lib.min.js"></script>
    <script>
      var alanBtnInstance = alanBtn({
        key: "f49dd2343aa07df0acc4fe12f1a71eca2e956eca572e1d8b807a3e2338fdd0dc/stage",
        onCommand: function (commandData) {
          if (commandData.command === "go:back") {
            //call client code that will react on the received command
          }
          if (commandData.command === "scrolldown") {
              window.scrollTo(500, 800);
          }
          if (commandData.command === "scrollup"){
              window.scrollTo(500,800);
          }
          if (commandData.command === "homePage") {
              window.location.replace("index.html");
          }
          if (commandData.command === "contactpage") {
              window.location.replace("contact.html");
          }
          if (commandData.command === "aboutpage") {
              window.location.replace("about.html");
          }
          if (commandData.command === "bookingpage") {
              window.location.replace("booking1.php");
          }
          if (commandData.command === "menupage") {
              window.location.replace("menu.html");
          }
          if (commandData.command === "feedbackpage") {
              window.location.replace("enquiry.html");
          }
          
        },
        rootEl: document.getElementById("alan-btn"),
      });
    </script>
  </body>
</html>