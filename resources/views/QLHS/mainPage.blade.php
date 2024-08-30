<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Quản lý học sinh</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> 
        <link rel="stylesheet" href="{{ asset('css/qlhs(mainPage).css') }}">
       </head>
    </head>
    <body>
    <header>
            <div class="info">
                <div class="avatar">
                    <img src="./London.jpg" alt="">
                </div>
                <div class="tt">
                    <ul class="tt_user">
                        <li>Ten: <span class="names"><?php echo $_SESSION['tens'] ?></span></li>
                        <li>Ngay Sinh <span class="birthdays"><?php echo $_SESSION['ngaysinhs'] ?></span></li>
                        <li>Nghe nghiep <span class="jobs"><?php echo $_SESSION['nghes'] ?></span></li>
                    </ul>
                </div>
            </div>
            <ul class="nav nav-tabs">
                <li class="addnew active text-center"><a data-toggle="tab" href="#AddNew">Tao Thong Tin</a></li>
                <li><a class="danhsach text-center" data-toggle="tab" href="#DanhSach">Danh Sach</a></li>
                <li class="lich text-center"><a data-toggle="tab" href="#TrucNhat">Lich Truc</a></li>
                <li class="todo text-center"><a data-toggle="tab" href="#ToDo">To Do list</a></li>
            </ul>
        </header>
        
            <div class="tab-content">
            <div class="AddNew tab-pane active" id="AddNew">
                <h2 class="text-center">Chinh Sua Thong Tin</h2>
                <form action="./main.php" class="form-horizontal" method="post">
                    <div class="form-group row">
                        <label for="Name" class="control-label col-lg-2">Ten:</label>
                        <div class="col-lg-8">
                            <input type="text" name="ten" class="form-control" id="name" class="name" placeholder="Input Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="birthday" class="control-label col-lg-2">Ngay Sinh:</label>
                        <div class="col-lg-8">
                            <input type="date" name="ngaysinh" class="form-control" id="bdate" class="bdate" placeholder="Input Birthday">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="job" class="control-label col-lg-2">Nghe Nghiep:</label>
                        <div class="col-lg-8">
                            <input type="text" name="nghe" class="form-control" id="job" class="job" placeholder="Input Job">
                        </div>
                    </div>
                    <div class="form-group">
                            <button style="margin-left: 45%; width: 100px; height: 50px;" name="dientt" type="submit" class="btn btn-default" id="subbtn" class="subbtn" value="Enter">Xac nhan</button>
                    </div>
                </form>
            </div>
            <div class="DanhSach tab-pane" id="DanhSach">
                <h2 class="text-center">Thong Tin Lop Hoc</h2>
                <div class="row" id="setting">
                    <div class="col-lg-4">
                        <label for="khoa" class="col-lg-3">Khoa</label>
                        <div class="col-lg-6 dropdown">
                            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Choose Mon
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">CLC TA</a></li>
                                <li><a href="#">CLC TV</a></li>
                                <li><a href="#">DT</a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <label for="khoa" class="col-lg-3">Mon</label>
                        <div class="col-lg-6 dropdown">
                            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Choose Mon
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">CLC TA</a></li>
                                <li><a href="#">CLC TV</a></li>
                                <li><a href="#">DT</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <label for="khoa" class="col-lg-3">Lop</label>
                        <div class="col-lg-6 dropdown">
                            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Choose Lop
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">CLC TA</a></li>
                                <li><a href="#">CLC TV</a></li>
                                <li><a href="#">DT</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="dshs" id="dshs">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Class</th>
                                <th>Subject</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>HS001</td>
                                <td>Do Duc ANh</td>
                                <td>FIE03</td>
                                <td>Cal</td>
                            </tr>
                            <tr>
                                <td>HS001</td>
                                <td>Do Duc ANh</td>
                                <td>FIE03</td>
                                <td>Cal</td>
                            </tr>
                            <tr>
                                <td>HS001</td>
                                <td>Do Duc ANh</td>
                                <td>FIE03</td>
                                <td>Cal</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="color">
                        <div class="red"></div>
                        <div class="green"></div>
                        <div class="yellow"></div>
                    </div>
                </div>
                
            </div>
            <div class="TrucNhat tab-pane" id="TrucNhat">
                <h2 class="text-center">Lich Truc</h2>
                <div class="header">
                <div class="wrapper">
                    <p class="current text-danger">September 2024</p>
                    <div class="icons">
                        <ul>
                            <li class="prev">&#10094;</li>
                            <li class="next">&#10095;</li>
                        </ul>
                    </div>
                </div>
                </div>
                    <div class="dates">
                        <p class="t2">Mon</p>
                        <p class="t3">Tues</p>
                        <p class="t4">Wed</p>
                        <p class="t5">Thurs</p>
                        <p class="t6">Fri</p>
                        <p class="t7">Sat</p>
                        <p class="t8">Sun</p>
                    </div>
                    <div class="days">
                    <div class="top7">
                        <p class="d1">1</p>
                        <p class="d2">2</p>
                        <p class="d3">3</p>
                        <p class="d4 active">4</p>
                        <p class="d5">5</p>
                        <p class="d6">6</p>
                        <p class="d7">7</p>
                    </div>
                    <div class="top7">
                        <p class="d8">8</p>
                        <p class="d9">9</p>
                        <p class="d10">10</p>
                        <p class="d11">11</p>
                        <p class="d12">12</p>
                        <p class="d13">13</p>
                        <p class="d14">14</p>
                    </div>
                    <div class="top7">
                        <p class="d15">15</p>
                        <p class="d16">16</p>
                        <p class="d17">17</p>
                        <p class="d18">18</p>
                        <p class="d19">19</p>
                        <p class="d20">20</p>
                        <p class="d21">21</p>
                    </div>
                    <div class="top7">
                        <p class="d22">22</p>
                        <p class="d23">23</p>
                        <p class="d24">24</p>
                        <p class="d25">25</p>
                        <p class="d26">26</p>
                        <p class="d27">27</p>                        
                        <p class="d28">28</p>
                    </div>
                    <div class="top7">
                        <p class="d29">29</p>
                        <p class="d30">30</p>
                        <p class="d31">31</p>
                        <p class="d32 inactive">1</p>
                        <p class="d33 inactive">2</p>
                        <p class="d34 inactive">3</p>
                        <p class="d35 inactive">4</p>
                    </div>
                    </div>
                    </div>
                    <div class="Todo tab-pane fade" id="Todo">
                        <h2>To Do List<img src="./todo_bar.png"></h2>
                        <div class="row rows">
                            <form action="./main.php" method="post">
                            <input name="todo" type="text" id="addtodo" placceholder="Input task">
                            <button name="addtodo" id="addbtn" class="addbtn">Add</button>
                            </form>
                        </div>
                        <ul id="task" class="task">
                        </ul>
                    </div>
                    <div class="upfile" id="upfile">
                        <form action="./main.php" method="post" enctype="multipart/form-data">
                        Select image to upload:
                         <input type="file" name="fileToUpload" id="fileToUpload">
                         <input type="submit" value="Upload Image" name="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        

        <script src="{{ asset('js/qlhs(mainPage).js') }}"></script>
    </body>
</html>