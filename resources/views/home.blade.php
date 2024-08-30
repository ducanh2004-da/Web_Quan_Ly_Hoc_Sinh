@extends('layouts.app')

@section('content')
<div class="container">
    <div class="tab-content">
        <div class="AddNew tab-pane active" id="AddNew">
            <h2 class="text-center">Update Your Information</h2>
            <form class="form-horizontal" action="{{ route('updateInfo') }}" method="POST">
                @csrf
                <div class="form-group row">
                    <label for="name" class="control-label col-lg-2">Name:</label>
                    <div class="col-lg-8">
                        <input type="text" name="ten" class="form-control" id="name" placeholder="Nhập tên">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="birthday" class="control-label col-lg-2">Date of Birth:</label>
                    <div class="col-lg-8">
                        <input type="date" name="ngaysinh" class="form-control" id="bdate" placeholder="Nhập ngày sinh">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="job" class="control-label col-lg-2">Job:</label>
                    <div class="col-lg-8">
                        <input type="text" name="nghe" class="form-control" id="job" placeholder="Nhập nghề nghiệp">
                    </div>
                </div>
                <div class="form-group">
                    <button style="margin-left: 45%; width: 100px; height: 50px;" name="dientt" type="submit" class="btn btn-default" id="subbtn">Submit</button>
                </div>
            </form>
            
        </div>

        <div class="DanhSach tab-pane" id="DanhSach">
            <h2 class="text-center">Class Information</h2>
            <div class="row" id="setting">
                <div class="col-lg-4">
                    <label for="khoa" class="col-lg-3">Major</label>
                    <div class="col-lg-6 dropdown">
                        <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Select Subject
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
                    <label for="mon" class="col-lg-3">Subject</label>
                    <div class="col-lg-6 dropdown">
                        <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Select Major
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
                    <label for="lop" class="col-lg-3">Class</label>
                    <div class="col-lg-6 dropdown">
                        <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Select Class 
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
                            <td>Đỗ Đức Anh</td>
                            <td>FIE03</td>
                            <td>Toán</td>
                        </tr>
                        <!-- Thêm các hàng khác tại đây -->
                    </tbody>
                </table>
            </div>
            <div class="addnewmem">
                    <div class="bonus">
                        <h2 class="text-center">+</h2>
                    </div>
                    <div class="themds">
                        <div class="deleteAdd">X</div>
                        <form class="themHS" action="{{ route('updateInfo') }}" method="POST">
                            <input type="text" class="ID" name="ID" placeholder="Input ID">
                            <input type="text" class="ds_name" name="name" placeholder="Input Name">
                            <input type="text" class="ds_class" name="class" placeholder="Input Class">
                            <input type="text" class="ds_subject" name="subject" placeholder="Input Subject">
                            <button style="background-color:aquamarine; width:100px;height:30px;" class="themds_btn">Submit</button>
                        </form>
                    </div>
                </div>
        </div>

        <div class="TrucNhat tab-pane fade" id="TrucNhat">
            <h2 class="text-center">Duty Sechedule</h2>
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
                <p class="cn">Sun</p>
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
                        <form class="todoist" action="{{ route('todoList') }}" method="POST">
                            @csrf
                            <input name="todo" type="text" id="addtodo" placeholder="Nhập công việc">
                            <button type="submit" id="addbtn" class="addbtn">Add</button>
                        </form>
                        </div>
                        @if(session('success'))
                           <div class="alert alert-success">
                              {{ session('success') }}
                           </div>
                        @endif
                        <ul id="task" class="task">
                            @foreach ($todos as $todo)
                            <li class="task-item" style="list-style:none;">{{$todo->work}} <div class="delete">X</div></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="upfile tab-pane fade" id="UpLoad">
                    <h2>Upload Images</h2>
                    <form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                             <label for="image">Select Image:</label>
                             <input type="file" name="image" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Upload</button>
                    </form>
                        <div class="showAnh">
                        <h2 class="text-center">List of Images:</h2>
                        <div class="row">
                        @foreach ($images as $image)
                            <div class="col-md-4">
                               <div class="card">
                                   <!-- <img src="{{ asset('images/hongkong.jpg') }}"> -->
                                   <img src="{{ asset('storage/' . $image->file_path) }}" class="card-img-top" alt="{{ $image->file_name }}">
                                   <div class="card-body">
                                        <h5 class="card-title">{{ $image->file_name }}</h5>
                                   </div>
                              </div>
                           </div>
                        @endforeach
                         
                       </div>
                        </div>
                    </div>

        </div>
    </div>
@endsection
