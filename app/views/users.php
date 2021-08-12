<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo CSS_PATH ?>/dashbord.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,200;0,400;1,200;1,500&family=Raleway:wght@400;600&display=swap"
        rel="stylesheet">
    <title>Dashboard</title>
</head>

<div class="admin">

<div class="sidebar">
    <div>
    <img src="<?php echo IMAGE ?>Fichier 4.svg" class="grande-image">
    </div>
    <div>
             <div id="sb">
                <a href="<?php echo URLROOT ?>/recipes/getRecipes">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="white" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-grid">
                    <rect x="3" y="3" width="7" height="7"></rect>
                    <rect x="14" y="3" width="7" height="7"></rect>
                    <rect x="14" y="14" width="7" height="7"></rect>
                    <rect x="3" y="14" width="7" height="7"></rect>
                     </svg> Dashboard
                </a>
            </div>
        <div id="sb"><a href="<?php echo URLROOT ?>/users/getUsers">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                <circle cx="9" cy="7" r="4">
                </circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
    </svg> Users</a></div>
        <div id="sb"><a href="<?php echo URLROOT ?>/recipes/getDetails">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="30" height="30" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><g xmlns="http://www.w3.org/2000/svg"><g><path d="m438.109 0h-346.328c-25.243 0-45.781 20.538-45.781 45.782v420.436c0 25.244 20.538 45.782 45.781 45.782h346.328c15.379 0 27.891-12.512 27.891-27.891v-456.218c0-15.379-12.512-27.891-27.891-27.891zm-372.109 466.218c0-14.216 11.565-25.782 25.781-25.782h314.217v51.564h-314.217c-14.216 0-25.781-11.565-25.781-25.782zm380 17.891c0 4.351-3.54 7.891-7.891 7.891h-12.111v-51.563h12.111c2.739 0 5.388-.397 7.891-1.136zm0-71.563c0 4.351-3.54 7.891-7.891 7.891h-332.108v-155.222c0-5.523-4.477-10-10-10s-10 4.477-10 10v155.591c-7.348.93-14.16 3.602-20.001 7.597v-382.621c0-12.229 8.56-22.489 20.001-25.121v154.553c0 5.523 4.477 10 10 10s10-4.477 10-10v-155.214h332.108c4.351 0 7.891 3.54 7.891 7.891z" fill="#ffffff" data-original="#000000" style="" class=""/><path d="m346.91 107.855c-7.56 0-14.992 1.438-21.927 4.21-10.863-16.081-29.144-26.029-48.982-26.029s-38.119 9.948-48.982 26.029c-6.935-2.771-14.367-4.21-21.927-4.21-32.583 0-59.091 26.508-59.091 59.091 0 25.036 15.346 46.751 38.182 55.297v116.701c0 8.521 6.933 15.455 15.454 15.455h152.728c8.521 0 15.454-6.933 15.454-15.455v-116.7c22.835-8.546 38.181-30.262 38.181-55.297 0-32.583-26.507-59.092-59.09-59.092zm-142.727 226.545v-20.002h143.636v20.002zm151.423-129.333c-4.555 1.033-7.787 5.082-7.787 9.752v79.579h-143.636v-79.579c0-4.67-3.232-8.719-7.787-9.752-17.896-4.061-30.395-19.737-30.395-38.12 0-21.555 17.536-39.091 39.091-39.091 7.341 0 14.496 2.047 20.689 5.92 2.458 1.538 5.463 1.933 8.237 1.082 2.772-.851 5.039-2.864 6.211-5.516 6.259-14.157 20.3-23.305 35.771-23.305s29.512 9.147 35.771 23.305c1.173 2.652 3.439 4.665 6.211 5.516 2.773.852 5.778.456 8.237-1.082 6.194-3.873 13.348-5.92 20.69-5.92 21.554 0 39.09 17.536 39.09 39.091.001 18.383-12.498 34.059-30.393 38.12z" fill="#ffffff" data-original="#000000" style="" class=""/><path d="m96.001 210.215c-5.523 0-10 4.48-10 10.003s4.477 10 10 10 10-4.477 10-10v-.007c0-5.523-4.477-9.996-10-9.996z" fill="#ffffff" data-original="#000000" style="" class=""/></g></g></g></svg>
        Recipes
    </a>
    </div>
       <div id="sb">
           <a href="">
           
           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="30" height="30" x="0" y="0" viewBox="0 0 192 192" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><g xmlns="http://www.w3.org/2000/svg" id="_01-hat" data-name="01-hat"><path d="M149.776,40.346a56.011,56.011,0,0,0-107.552,0A48,48,0,0,0,40,135.333V184a8,8,0,0,0,8,8h96a8,8,0,0,0,8-8V135.333a48,48,0,0,0-2.224-94.987ZM56,176V160h80v16Zm88-56a8,8,0,0,0-8,8v16H120V128H104v16H88V128H72v16H56V128a8,8,0,0,0-8-8,32,32,0,0,1-.021-64l.556.016a8.045,8.045,0,0,0,8.028-6.678,39.995,39.995,0,0,1,78.874,0,8.022,8.022,0,0,0,8.028,6.678l.553-.016A32,32,0,0,1,144,120Z" fill="#ffffff" data-original="#000000" style="" class=""/></g></g></svg>

            Types
           </a>

           </div>
           <div id="sb">
               <a href="">
               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="30" height="30" x="0" y="0" viewBox="0 0 512.00001 512" style="enable-background:new 0 0 512 512" xml:space="preserve"><g><path xmlns="http://www.w3.org/2000/svg" d="m0 113.292969h113.292969v-113.292969h-113.292969zm30.003906-83.289063h53.289063v53.289063h-53.289063zm0 0" fill="#ffffff" data-original="#000000" style=""/><path xmlns="http://www.w3.org/2000/svg" d="m149.296875 0v113.292969h362.703125v-113.292969zm332.699219 83.292969h-302.695313v-53.289063h302.695313zm0 0" fill="#ffffff" data-original="#000000" style=""/><path xmlns="http://www.w3.org/2000/svg" d="m0 260.300781h113.292969v-113.292969h-113.292969zm30.003906-83.292969h53.289063v53.289063h-53.289063zm0 0" fill="#ffffff" data-original="#000000" style=""/><path xmlns="http://www.w3.org/2000/svg" d="m149.296875 260.300781h362.703125v-113.292969h-362.703125zm30.003906-83.292969h302.695313v53.289063h-302.695313zm0 0" fill="#ffffff" data-original="#000000" style=""/><path xmlns="http://www.w3.org/2000/svg" d="m0 407.308594h113.292969v-113.296875h-113.292969zm30.003906-83.292969h53.289063v53.289063h-53.289063zm0 0" fill="#ffffff" data-original="#000000" style=""/><path xmlns="http://www.w3.org/2000/svg" d="m149.296875 407.308594h362.703125v-113.296875h-362.703125zm30.003906-83.292969h302.695313v53.289063h-302.695313zm0 0" fill="#ffffff" data-original="#000000" style=""/></g></svg>
                Categories
               </a>
           </div>
    
        </div>
              <div id="sb">
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4">

                    </path><polyline points="16 17 21 12 16 7"></polyline>
                    <line x1="21" y1="12" x2="9" y2="12"></line></svg>
                    Exit </a>
                
              </div>

    </div>







        <div class="content">

            <div class="title">
                <div class="logo">
                   
                </div>
               
            </div>
        

         
            <h2>Users list</h2>
        
            <div class="table-container">
                
                <table>
                    <tr>

                        <th><h6>Name</h6></th>
                        <th><h6>Email</h6></th>
                        <th><h6>Action</h6></th>
                      
                    </tr>
                    

                        <?php 
                        foreach ($data as $row){
                        ?>

                        <tr>
                            <td class="name"><?= $row['fname']." ".$row['lname'] ?></td>
                            <td class="description"><?= $row['email'] ?></td>
                            <td class="status">
                            <a href="<?php echo URLROOT ?>/recipes/delete/<?php echo $row['id']?>" ><img src="<?php echo IMAGE?>delete.svg" ></a>
                        </td>
                        </tr>
                        <?php }?>
                     
                 
                    
                </table>
            </div>
            </div>

            


        
               




</body>

</html>