@extends('admin.layouts.master')
@section('title','المقالات')
@section('content')
<div class="container mt-5">
    {{-- <a href="" class="btn btn-primary mx-1"></a>
    <a href="" class="btn btn-info mx-1"></a>
    <a href="" class="btn btn-warning mx-1"></a> --}}
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
{{--
            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif --}}

            <form method="GET"  action="#" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-9">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control input-text" placeholder="ابحث عن مقال...." aria-label="Recipient's username" aria-describedby="basic-addon2" name="term">
                            <button type="submit" class="btn btn-primary btn-lg">ابحث</button>

                        </div>

                    </div>
                </div>

            </form>
            <div class="card mt-3">
                <div class="card-header">
                    <h4>المقالات

                        <a href="{{ route('articles.create') }}" class="btn btn-primary float-end">إضافة مقال
                        </a>

                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>عنوان المقال</th>
                                <th>صاحب المقال</th>
                                <th>النص</th>
                                <th>القسم</th>
                                <th>الاجراء</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($articles as $article)
                            <tr>
                                <td>{{ $article->id }}</td>
                                <td>{{ $article->title }}</td>
                                <td>{{ $article->author }}</td>
                                <td>{{ Str::limit($article->body, 15) }}</td>
                                <td>
                                            <label class="badge bg-primary mx-1">{{ "null" }}</label>
                                </td>
                           {{-- auth()->user()->hasPermissionTo('view edit and delete') --}}

                                    <td>
                                       <ul class="list-inline m-0">
                                          <li class="list-inline-item">
                                            <a href="{{ route('articles.show',$article) }}" class="btn btn-danger btn-sm rounded-1"><i class="ti fa-regular ti-eye"></i></a>
                                          </li>
                                          <li class="list-inline-item">
                                            <a href="{{ route('articles.edit',$article) }}" class="btn btn-danger btn-sm rounded-1"><i class="fa fa-edit"></i></a>
                                          </li>
                                          <li class="list-inline-item">
                                            <form action="{{ route('articles.destroy',$article->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                             </form>
                                          </li>
                                       </ul>


                                    </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{ $articles->onEachSide(2)->links() }}
        </div>
    </div>
</div>
@endsection
