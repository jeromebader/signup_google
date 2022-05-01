<?php
   require_once('app/init.php');
    if(isset($_SESSION['access_token']) || isset($_SESSION['user'])){
?>
<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     
    
     <title>Content a Php Task</title>
 </head>
 <body>
 <div id="app">
        <nav class="navbar navbar-expand-md  shadow-sm background-color: #CC1414">
            <div class="container">
                <a class="navbar-brand" alingn="center" {{--href="{{ url('/') }} "--}}>
                    <strong> Php Task</strong>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        
                           
                                <li class="nav-item">
                                   <a class="nav-link" href="changepassword.php">Change password</a>
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link" href="logout.php">Log out</a>
                                </li>
                                                            

                                
                        
                    </ul>
                </div>
            </div>
        </nav>
<br>
     <div class="container">
            <div class="row justify-content-center">
              <div class="col-md-8"> 
                <strong  > <h1 >Landing Page Content</h1> </strong>
                
                

            

                <div class="form-group row ">
                    <textarea name="" id="" cols="100" rows="5" class="form-control"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni odit dolor dolore aspernatur est aliquid, officiis eos doloribus perspiciatis nesciunt, vero perferendis laborum alias veritatis pariatur? Libero consequuntur perspiciatis harum?
                    Maxime minus consectetur non fugit quos omnis sunt, ipsa excepturi quo odio veniam nam reprehenderit unde vitae minima qui, ullam, nobis quaerat illo fugiat odit eaque harum! Dolorem, aspernatur! Nemo!
                    Dolorum iste corrupti possimus eveniet nihil nobis qui odit aperiam, exercitationem temporibus nesciunt provident, dolore est dolores atque? Laudantium atque adipisci maxime esse doloremque aspernatur magnam tempore dignissimos aliquam ut?
                    Dolores praesentium placeat ad illo commodi? Voluptate hic commodi fuga porro inventore sed error. Ex magnam ipsum repellat non. Quis voluptates ut dolore magni eveniet quia soluta quidem neque consectetur!
                    Nobis earum ipsum numquam rem nostrum! Hic, amet. Aliquid adipisci provident, tempora modi numquam veritatis. Dolor molestias ab eius odio minima aut dicta asperiores similique! Distinctio tempore officiis molestiae rerum!</textarea>

                    </div>
                    <div class="form-group row ">
                    <textarea name="" id="" cols="100" rows="5" class="form-control">
                         Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni odit dolor dolore aspernatur est aliquid, officiis eos doloribus perspiciatis nesciunt, vero perferendis laborum alias veritatis pariatur? Libero consequuntur perspiciatis harum?
                    Maxime minus consectetur non fugit quos omnis sunt, ipsa excepturi quo odio veniam nam reprehenderit unde vitae minima qui, ullam, nobis quaerat illo fugiat odit eaque harum! Dolorem, aspernatur! Nemo!
                    Dolorum iste corrupti possimus eveniet nihil nobis qui odit aperiam, exercitationem temporibus nesciunt provident, dolore est dolores atque? Laudantium atque adipisci maxime esse doloremque aspernatur magnam tempore dignissimos aliquam ut?
                    Dolores praesentium placeat ad illo commodi? Voluptate hic commodi fuga porro inventore sed error. Ex magnam ipsum repellat non. Quis voluptates ut dolore magni eveniet quia soluta quidem neque consectetur!
                    Nobis earum ipsum numquam rem nostrum! Hic, amet. Aliquid adipisci provident, tempora modi numquam veritatis. Dolor molestias ab eius odio minima aut dicta asperiores similique! Distinctio tempore officiis molestiae rerum!</p></textarea>

                    </div>

                    <div class="form-group row ">
                    <textarea name="" id="" cols="100" rows="5" class="form-control"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni odit dolor dolore aspernatur est aliquid, officiis eos doloribus perspiciatis nesciunt, vero perferendis laborum alias veritatis pariatur? Libero consequuntur perspiciatis harum?
                    Maxime minus consectetur non fugit quos omnis sunt, ipsa excepturi quo odio veniam nam reprehenderit unde vitae minima qui, ullam, nobis quaerat illo fugiat odit eaque harum! Dolorem, aspernatur! Nemo!
                    Dolorum iste corrupti possimus eveniet nihil nobis qui odit aperiam, exercitationem temporibus nesciunt provident, dolore est dolores atque? Laudantium atque adipisci maxime esse doloremque aspernatur magnam tempore dignissimos aliquam ut?
                    Dolores praesentium placeat ad illo commodi? Voluptate hic commodi fuga porro inventore sed error. Ex magnam ipsum repellat non. Quis voluptates ut dolore magni eveniet quia soluta quidem neque consectetur!
                    Nobis earum ipsum numquam rem nostrum! Hic, amet. Aliquid adipisci provident, tempora modi numquam veritatis. Dolor molestias ab eius odio minima aut dicta asperiores similique! Distinctio tempore officiis molestiae rerum!</textarea>

                    </div> 
                    <div class="form-group row ">
                    <ol>
                        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum illo magni molestias, id eligendi rerum amet corrupti reprehenderit dignissimos. Quidem nesciunt excepturi esse cupiditate repudiandae ipsam sequi sunt illo sit?</li>
                        <li>Exercitationem provident est obcaecati doloremque. Eius recusandae optio quae debitis consectetur atque velit commodi voluptatum rerum, temporibus labore delectus vero ea totam ullam voluptas necessitatibus, ad amet placeat adipisci dignissimos!</li>
                        <li>Neque eaque soluta animi nulla sapiente atque corporis. Rem beatae suscipit illo cum commodi, quasi culpa facilis molestias modi libero. Autem cum dolore officiis blanditiis, voluptates delectus laborum excepturi similique?</li>
                        <li>Veritatis accusamus explicabo consectetur maxime adipisci? Placeat nesciunt accusantium, pariatur exercitationem sint velit rerum et provident natus dolore est optio ipsum esse incidunt nulla excepturi mollitia facere aspernatur in perspiciatis?</li>
                        <li>Facilis, provident maxime, nihil beatae sed ut exercitationem aliquid libero blanditiis voluptates quaerat porro nisi distinctio. Provident mollitia earum facere! Eos aspernatur possimus id voluptate minus dolorum facere. Dolores, doloribus!</li>
                    </ol>
                    </div> 

     </div>

         
 </body>
 </html>
 <?php
    }
    else
    {
        header('location: index.php');
    }
 ?>