@extends('admin.layouts.master')
@section('title','تعليقات الخاصة بالمقالات')
@section('content')
    <!-- start dashboard-section -->
    <div class="dashboard-section pt-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="dashboard-box">
                        <form method="GET"  action="#" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control input-text" placeholder="Search citys...." aria-label="Recipient's username" aria-describedby="basic-addon2" name="term">
                                        <button type="submit" class="btn btn-primary btn-lg">ابحث</button>

                                    </div>

                                </div>
                            </div>

                        </form>

                            <a href="#" class="btn btn-secondary  btn-primary" tabindex="0"
                                   aria-controls="DataTables_Table_0" type="button">
                                          <span>
                                            {{-- <i class="ti ti-plus me-sm-1"></i> --}}
                                            <span class="d-none d-sm-inline-block">
                                            المدونة
                                            </span>
                                          </span>
                            </a>
                            <a href="#" class="btn btn-warning  btn-primary" tabindex="0"
                                aria-controls="DataTables_Table_0" type="button">
                                       <span>
                                         {{-- <i class="ti ti-plus me-sm-1"></i> --}}
                                         <span class="d-none d-sm-inline-block">
                                         المواد
                                         </span>
                                       </span>
                            </a>
                            <a href="#" class="btn btn-warning  btn-primary" tabindex="0"
                             aria-controls="DataTables_Table_0" type="button">
                                    <span>
                                      {{-- <i class="ti ti-plus me-sm-1"></i> --}}
                                      <span class="d-none d-sm-inline-block">
                                      تواصل معنا
                                      </span>
                                    </span>
                            </a>


                                <table class="table table-striped">
                                    <thead>
                                    <tr>

                                        <th>الاسم</th>
                                        <th>الايميل</th>
                                        <th >المقال</th>
                                        <th>التعليق</th>
                                        <th>التاريخ</th>
                                        <th colspan="2">الاجراء</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($articleComments as $articleComment)
                                    <tr>
                                        {{-- <th >{{$articleComment->id}}</th> --}}
                                        <td>{{$articleComment->name}}</td>
                                        <td>{{$articleComment->email}}</td>
                                        {{-- {{$articleComment->commentable_id}} --}}
                                        <td>{{Str::limit($article->body, 25)  }}</td>
                                        <td>{{$articleComment->body}}</td>
                                        <td>{{$articleComment->created_at}}</td>
                                        {{-- @if($articleComment->is_Publish == 1)
                                            <td><div width="50px" class="btn btn-success">قبول</div></td>
                                        @else
                                        <td><div width="40px" class="btn btn-danger">رفض</p></td>
                                            @endif --}}
                                        <td>
                                            <a href="{{route('comment.accept', $articleComment->id)}}" class="btn btn-success">قبول</a>
                                              {{-- <div class="btn btn-danger btn-sm rounded-1">رفض</p> --}}
                                        </td>
                                        <td>
                                            <a href="{{route('comment.reject', $articleComment->id)}}" class="btn btn-danger">رفض</a>
                                            {{-- <div class="btn btn-success btn-sm rounded-1">قبول</div> --}}
                                        </td>
                                    </tr>
                                    @endforeach

                                    </tbody>
                                </table>

                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end dashboard-section -->
@endsection
