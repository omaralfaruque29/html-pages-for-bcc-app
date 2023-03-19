@extends('layout')
@section('content')
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>Serial</th>
                          <th>Student ID</th>
                          <th>Student Name</th>
                          <th>Email</th>
                          <th>Mobile</th>
                          <th>Course</th>
                          <th>Status</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($allStudent as $aStudent)
                      <tr>
                          <td>{{$aStudent->student_id}}</td>
                          <td>{{$aStudent->student_id}}</td>
                          <td>{{$aStudent->student_name}}</td>
                          <td>{{$aStudent->student_email}}</td>
                          <td>{{$aStudent->student_mobile}}</td>
                          <td>{{$aStudent->student_course}}</td>
                          <td>
                            <label class="badge badge-info">enrolled</label>
                          </td>
                          <td>
                            <a href="{{URL::to('/show-student/'.$aStudent->student_id)}}"><button class="btn btn-outline-primary">Show</button></a>
                            <a href="{{URL::to('/edit-student/'.$aStudent->student_id)}}" id="edit"><button class="btn btn-outline-primary">Edit</button></a>
                            <a href="{{URL::to('/delete-student/'.$aStudent->student_id)}}" id="delete"><button class="btn btn-outline-primary">Delete</button></a>
                          </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
@endsection